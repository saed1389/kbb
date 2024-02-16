<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Provinces;
use App\Models\User;
use App\Models\UserJob;
use App\Models\UserTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        return view('admin.index');
    }

    public function profileShow($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users.profile', compact('user'));
    }

    public function profile($id)
    {
        $user = User::where('id', $id)->first();
        $jobs = UserJob::where('status', 1)->get();
        $titles = UserTitle::where('status', 1)->get();
        $countries = Country::all();
        $provinces = Provinces::orderBy('province_name', 'asc')->get();
        $city_work = City::where('province_no', $user->work_province)->get();
        $city_home = City::where('province_no', $user->home_province)->get();
        return view('admin.users.edit-profile', compact('user', 'provinces', 'countries', 'jobs', 'titles', 'city_home', 'city_work'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $request->validate([
            'email' => "required|email|unique:users,email,$id",
        ],[
            'email.unique' => 'E-posta benzersiz olmalı',
        ]);

        User::where('id', $id)->update([
            'title' => $request['title'],
            'occupation' => $request['occupation'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'slug' => Str::slug($request['first_name'].'-'.$request['last_name']),
            'country' => $request['country'],
            'tc_card_no' => $request['tc_card_no'],
            'birthday_date' => $request['birthday_date'],
            'gender' => $request['gender'],
            'father_name' => $request['father_name'],
            'mother_name' => $request['mother_name'],
            'working_status' => $request['working_status'],
            'company_name' => $request['company_name'],
            'work_address' => $request['work_address'],
            'work_city' => $request['work_city'],
            'work_province' => $request['work_province'],
            'work_tel' => $request['work_tel'],
            'home_address' => $request['home_address'],
            'home_city' => $request['home_city'],
            'home_province' => $request['home_province'],
            'home_tel' => $request['home_tel'],
            'mobile' => $request['mobile'],
            'memberChatAddress' => $request['memberChatAddress'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'user_type' => $request['user_type'],
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Profil başarıyla güncelle!",
            'alert-type' => 'success'
        );

        return redirect()->route('admin-profile-edit', $id)->with($notification);
    }

    public function profilePhoto($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users.edit-profile-photo', compact('user'));
    }

    public function webcamStore(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        $img = $request->image;
        $folderPath = "uploads/users/images/";

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);
        $fileName = @$user->first_name.'-'.@$user->last_name.'-'.uniqid() . '.png';

        $file = $folderPath . $fileName;
        file_put_contents(public_path($file), $image_base64);
        @unlink($user->profile_image);
        User::where('id', $id)->update([
            'profile_image' => $file,
        ]);
        $notification = array(
            'message' => "Profil resim başarıyla güncelle!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function fileStore(Request $request, $id)
    {
        $request->validate([
            'icon' => 'image'
        ]);
        $user = User::where('id', $id)->first();
        $manager = new ImageManager(new Driver());
        $name_gen = @$user->first_name.'-'.@$user->last_name.'-'.uniqid().'.'.$request->file('icon')->getClientOriginalExtension();
        $img1 = $manager->read($request->file('icon'));
        $imgSmall = $img1->scale(500, 355);
        $imgSmall->toJpeg(80)->save(base_path('public/uploads/users/images/'.$name_gen));
        $save_url = 'uploads/users/images/'.$name_gen;
        @unlink($user->profile_image);
        User::where('id', $id)->update([
            'profile_image' => $save_url,
        ]);
        $notification = array(
            'message' => "Profil resimi başarıyla güncelle!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome(): View
    {
        return view('managerHome');
    }
}
