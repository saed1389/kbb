<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Provinces;
use App\Models\User;
use App\Models\UserJob;
use App\Models\UserTitle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.members.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = UserJob::where('status', 1)->get();
        $titles = UserTitle::where('status', 1)->get();
        $countries = Country::all();
        $provinces = Provinces::orderBy('province_name', 'asc')->get();
        return view('admin.users.members.add', compact('titles', 'jobs', 'countries', 'provinces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'profile_image' => 'mimes:jpeg,jpg,png,gif,svg',
            'user_cv' => 'mimes:doc,docx,pdf',
        ],[
            'email.unique' => 'E-posta benzersiz olmalı',
        ]);

        if ($request->file('profile_image')) {

            $manager = new ImageManager(new Driver());
            $gen = Str::slug($request->first_name.'-'.$request->last_name);
            $name_gen = $gen.'-'.hexdec(uniqid()).'.'.$request->file('profile_image')->getClientOriginalExtension();
            $img = $manager->read($request->file('profile_image'));

            $img->scale(350, 350);
            $img->toJpeg(80)->save(base_path('public/uploads/users/images/'.$name_gen));
            $profile_url = 'uploads/users/images/'.$name_gen;
        } else {
            $profile_url = '';
        }

        if ($request->file('user_cv')) {
            $file = $request->file('user_cv');
            $gen = Str::slug($request->first_name.'-'.$request->last_name);
            $fileName = $gen.'-'.hexdec(uniqid()) . '_' . $file->getClientOriginalName();
            $filePath = 'uploads/users/cv/';

            $file->move(public_path($filePath), $fileName);
            $cv_url = 'uploads/users/cv/'.$fileName;
        } else {
            $cv_url = '';
        }

        User::create([
            'title' => $request['title'],
            'occupation' => $request['occupation'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'slug' => Str::slug($request->first_name.'-'.$request->last_name),
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
            'profile_image' => $profile_url,
            'user_cv' => $cv_url,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => 0,
            'user_type' => $request['user_type'],
            'status' => 1,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Üye başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('members.index')->with($notification);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users.members.applicationShow', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        $jobs = UserJob::where('status', 1)->get();
        $titles = UserTitle::where('status', 1)->get();
        $countries = Country::all();
        $provinces = Provinces::orderBy('province_name', 'asc')->get();
        $city_work = City::where('province_no', $user->work_province)->get();
        $city_home = City::where('province_no', $user->home_province)->get();
        return view('admin.users.members.edit', compact('user', 'provinces', 'countries', 'jobs', 'titles', 'city_home', 'city_work'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();
        $request->validate([
            'email' => "required|email|unique:users,email,$id",
            'profile_image' => 'mimes:jpeg,jpg,png,gif,svg',
            'user_cv' => 'mimes:doc,docx,pdf',
        ],[
            'email.unique' => 'E-posta benzersiz olmalı',
        ]);

        if ($request->file('profile_image')) {

            $manager = new ImageManager(new Driver());
            $gen = Str::slug($request->first_name.'-'.$request->last_name);
            $name_gen = $gen.'-'.hexdec(uniqid()).'.'.$request->file('profile_image')->getClientOriginalExtension();
            $img = $manager->read($request->file('profile_image'));
            $img->scale(350, 350);
            $img->toJpeg(80)->save(base_path('public/uploads/users/images/'.$name_gen));
            $profile_url = 'uploads/users/images/'.$name_gen;
            @unlink($user->profile_image);
        } else {
            $profile_url = $request->oldImage;
        }

        if ($request->file('user_cv')) {
            $file = $request->file('user_cv');
            $gen = Str::slug($request->first_name.'-'.$request->last_name);
            $fileName = $gen.'-'.hexdec(uniqid()) . '_' . $file->getClientOriginalName();
            $filePath = 'uploads/users/cv/';

            $file->move(public_path($filePath), $fileName);
            $cv_url = 'uploads/users/cv/'.$fileName;
            @unlink($user->user_cv);
        } else {
            $cv_url = $request->oldCV;
        }

        User::where('id', $id)->update([
            'title' => $request['title'],
            'occupation' => $request['occupation'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'slug' => Str::slug($request->first_name.'-'.$request->last_name),
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
            'profile_image' => $profile_url,
            'user_cv' => $cv_url,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => 0,
            'user_type' => $request['user_type'],
            'status' => 1,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Üye başarıyla güncelle!",
            'alert-type' => 'success'
        );

        return redirect()->route('members.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $user = User::findOrFail($id);
        @unlink($user->profile_image);
        @unlink($user->user_cv);
        $user->delete();

        $notification = array(
            'message' => "Üye başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->route('members.index')->with($notification);
    }

    public function suspend()
    {
        return view('admin.users.members.suspend');
    }

    public function applications()
    {
        return view('admin.users.members.applications');
    }

    public function deleteImage($id)
    {
        $user = User::findOrFail($id);
        @unlink($user->profile_image);
        $user->update(['profile_image' => '']);

        $notification = array(
            'message' => "Kullanıcı profili resmi başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteCV($id)
    {
        $user = User::findOrFail($id);
        @unlink($user->user_cv);
        $user->update(['user_cv' => '']);

        $notification = array(
            'message' => "Kullanıcı CV'si başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        User::where('id', $id)->update(['status' => $status]);
    }

    public function ChangeConfirm($id, $status)
    {
        User::where('id', $id)->update(['status' => $status, 'apply' => 1]);
    }

    public function GetMembers()
    {
        if (\request()->ajax()) {
            $query = User::with(['titleName'])
                ->where('type', '!=', 1)
                ->where('status', 1)
                ->where('apply', 1)
                ->select('users.*')
                ->orderBy('id', 'desc');

            return datatables()->of($query)
                ->addColumn('titleName', function (User $user) {
                    return optional($user->titleName)->title;
                })
                ->make(true);
        } else {
            return false;
        }
    }

    public function getSuspends()
    {
        if (\request()->ajax()) {
            $query = User::with(['titleName'])
                ->where('type', '!=', 1)
                ->where('status', 0)
                ->where('apply', 1)
                ->select('users.*')
                ->orderBy('id', 'desc');

            return datatables()->of($query)
                ->addColumn('titleName', function (User $user) {
                    return optional($user->titleName)->title;
                })
                ->make(true);
        } else {
            return false;
        }
    }

    public function getApplications()
    {
        if (\request()->ajax()) {
            $query = User::with(['titleName'])
                ->where('type', '!=', 1)
                ->where('apply', 0)
                ->where('status', 0)
                ->select('users.*')
                ->orderBy('id', 'desc');

            return datatables()->of($query)
                ->addColumn('titleName', function (User $user) {
                    return optional($user->titleName)->title;
                })
                ->make(true);
        } else {
            return false;
        }
    }
}
