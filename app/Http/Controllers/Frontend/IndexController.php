<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\News;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function province_fetch_city(Request $request)
    {
        $data['city'] = City::where('province_no', $request->province_no)->get();
        return response()->json($data);
    }

    public function user_register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ],[
            'email.unique' => 'E-posta benzersiz olmalı',
        ]);

        User::create([
            'title' => $request['title'],
            'occupation' => $request['job'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'country' => $request['country'],
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
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => 0,
            'status' => 0,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Başvuru başarıyla kabul edildi!",
            'alert-type' => 'success'
        );
        return redirect()->route('home')->with($notification);
    }

    public function index()
    {
        $sliders = News::where('status', 1)->get();
        return view('frontend.index', compact('sliders'));
    }
}
