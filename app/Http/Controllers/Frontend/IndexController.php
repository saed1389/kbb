<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Committees;
use App\Models\Director;
use App\Models\HistoryCommittee;
use App\Models\News;
use App\Models\President;
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

    public function dernegmz()
    {
        return view('frontend.our_association.index');
    }

    public function baskan()
    {
        $baskan = President::where('current', 0)->where('status', 1)->orderBy('year', 'asc')->get();
        $current = President::where('current', 1)->where('status', 1)->first();
        return view('frontend.our_association.president', compact('baskan', 'current'));
    }

    public function kurullar()
    {
        return view('frontend.our_association.committees');
    }

    public function denetleme()
    {
        $baskan = Committees::where('menu_id', 1)->where('position', '=', 'Başkan')->where('status', 1)->first();
        $directors = Committees::where('menu_id', 1)->where('id', '!=', $baskan->id)->where('status', 1)->get();
        //dd($directors);
        return view('frontend.our_association.check', compact('baskan', 'directors'));
    }

    public function danisma()
    {
        $members = Committees::where('menu_id', 2)->where('status', 1)->get();

        return view('frontend.our_association.advice', compact('members'));
    }

    public function onur_ve_etik()
    {
        $members = Committees::where('menu_id', 3)->where('status', 1)->get();
        return view('frontend.our_association.honor', compact('members'));
    }

    public function yeterlik_yurutme()
    {
        $baskan = Committees::where('menu_id', 4)->where('position', '=', 'Başkan')->where('status', 1)->first();
        $directors = Committees::where('menu_id', 4)->where('id', '!=', $baskan->id)->where('status', 1)->get();

        return view('frontend.our_association.competence', compact('baskan', 'directors'));
    }

    public function gecmis()
    {
        // Retrieve members from the database and group them by the 'group' attribute
        $members = HistoryCommittee::where('status', 1)
            ->orderBy('start_date', 'asc')
            ->get();


        return view('frontend.our_association.historyCommittees', compact('members'));
    }

    public function younetim() {
        $baskan = Director::where('position', 1)->where('status', 1)->first();
        $directors = Director::where('position', '!=' , '1')->where('status', 1)->orderBy('position', 'asc')->orderBy('id', 'asc')->get();
        return view('frontend.our_association.directors', compact('directors', 'baskan'));
    }
}
