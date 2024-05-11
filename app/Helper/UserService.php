<?php
namespace App\Helper;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserService {
    public $email, $password, $name;

    public function __construct($email, $password, $name = "") {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
    }

    public function validateInput($auth = false): array
    {
        $validationRule = $auth ? 'exists:users' : 'unique:users';
        $validator = Validator::make(['email' => $this->email, 'password' => $this->password],
            [
                'email' => 'required|email:rfc,dns', $validationRule,
                'password' => 'required|string|min:6'
            ],[
                'email.required' => 'E-posta boş olamaz',
                'password.required' => 'Şifre boş olamaz',
                'password.min' => 'Şifre minimum 6 karakter'
            ]);

        if ($validator->fails()) {
            return ['status' => false, 'message' => $validator->messages() ];
        } else {
            return ['status' => true ];
        }
    }

    public function register($deviceName): array
    {
        $validate = $this->validateInput();
        if (!$validate['status']) {
            return $validate;
        } else {
            $user = User::create([
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            $token = $user->createToken($deviceName)->plainTextToken;
            return ['status' => true, 'token' => $token, 'name' => $this->name];
        }
    }

    public function login($deviceName): array {
        if ($deviceName == null) {
            $deviceName = 'iphone';
        }
        $validate = $this->validateInput(true);
        if ($validate['status'] == false) {
            return $validate;
        } else {
            $user = User::where('email', $this->email)->first();
            if (Hash::check($this->password, $user->password)) {
                $token = $user->createToken($deviceName)->plainTextToken;
                return ['status' => true, 'token' => $token, 'name' => $user];
            } else {
                return ['status' => false, 'message' => ['password' => 'Incorrect Password!']];
            }
        }
    }
}
