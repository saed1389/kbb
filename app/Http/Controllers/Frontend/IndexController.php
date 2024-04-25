<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Committees;
use App\Models\Director;
use App\Models\HistoryCommittee;
use App\Models\News;
use App\Models\President;
use App\Models\Scholarship;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserTitle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\select;

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
        $sliders = News::where('status', 1)->where('slider', 1)->where('confirm', 1)->orderBy('created_at', 'desc')->orderBy('news_order', 'asc')->limit(10)->get();
        return view('frontend.index', compact('sliders'));
    }

    public function baskan()
    {
        $baskan = President::where('current', 0)->where('status', 1)->orderBy('year', 'asc')->get();
        $current = President::where('current', 1)->where('status', 1)->first();
        return view('frontend.our_association.president', compact('baskan', 'current'));
    }

    public function denetleme()
    {
        $baskan = Committees::where('menu_id', 1)->where('position', '=', 'Başkan')->where('status', 1)->first();
        $directors = Committees::where('menu_id', 1)->where('id', '!=', $baskan->id)->where('status', 1)->get();
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

    public function economic_business()
    {
        $setting = Setting::where('id', 1)->first()->economic_business;
        return view('frontend.our_association.economicBusiness', compact('setting'));
    }

    public function scholarshipApp()
    {
        $titles = UserTitle::where('status', 1)->get();

        return view('frontend.scholarship.education-scholarship', compact('titles'));
    }

    public function scholarshipAppStore(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'domesticCompany' => 'required',
            'position' => 'required',
            'title' => 'required',
            'phoneNumber' => 'required',
            'mobilePhone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'university' => 'required',
            'dateOfGraduation' => 'required',
            'expertiseTestDate' => 'required',
            'specializedInstitution' => 'required',
            'medicalSpecialty' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'KBBQualificationCertificate' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'personCV' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'workingArea' => 'required',
            'foreignLanguage1' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'foreignLanguage2' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'foreignLanguage3' => 'file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'foreignLanguage4' => 'file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'currentLanguage' => 'file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'referenceLetter1' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'referenceLetter2' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'referenceLetter3' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'referenceLetter4' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'candidateEducation' => 'required',
            'institutionLetter' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,pps,ppsx,xls,xlsx|max:5120',
            'educationStartDate' => 'required',
            'educationCompletionDate' => 'required',
            'scholarshipDuration' => 'required',
        ]);

        $fileFields = [
            'medicalSpecialty', 'KBBQualificationCertificate', 'personCV',
            'englishForeign', 'foreignLanguage1', 'foreignLanguage2',
            'foreignLanguage3', 'foreignLanguage4', 'otherScholarship',
            'referenceLetter1', 'referenceLetter2', 'referenceLetter3',
            'referenceLetter4', 'institutionLetter', 'currentLanguage'
        ];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $fileName = uniqid('', true) . '.' . $file->getClientOriginalExtension();
                $filePath = 'uploads/scholarship/';
                $file->move(public_path($filePath), $fileName);
                ${$field.'_url'} = $filePath . $fileName;
            } else {
                ${$field.'_url'} = null;
            }
        }

        Scholarship::create([
            'name' => $request->name,
            'domesticCompany' => $request->domesticCompany,
            'position' => $request->position,
            'title' => $request->title,
            'phoneNumber' => $request->phoneNumber,
            'mobilePhone' => $request->mobilePhone,
            'email' => $request->email,
            'address' => $request->address,
            'university' => $request->university,
            'dateOfGraduation' => $request->dateOfGraduation,
            'expertiseTestDate' => $request->expertiseTestDate,
            'specializedInstitution' => $request->specializedInstitution,
            'medicalSpecialty' => $medicalSpecialty_url,
            'KBBQualificationCertificate' => $KBBQualificationCertificate_url,
            'associationNo' => $request->associationNo,
            'personCV' => $personCV_url,
            'workingArea' => $request->workingArea,
            'detailedProject' => $request->detailedProject,
            'currentLanguage' => $currentLanguage_url,
            'englishForeign' => $englishForeign_url,
            'foreignLanguage1' => $foreignLanguage1_url,
            'foreignLanguage2' => $foreignLanguage2_url,
            'foreignLanguage3' => $foreignLanguage3_url,
            'foreignLanguage4' => $foreignLanguage4_url,
            'otherScholarship' => $otherScholarship_url,
            'referenceLetter1' => $referenceLetter1_url,
            'referenceLetter2' => $referenceLetter2_url,
            'referenceLetter3' => $referenceLetter3_url,
            'referenceLetter4' => $referenceLetter4_url,
            'candidateEducation' => $request->candidateEducation,
            'institutionLetter' => $institutionLetter_url,
            'educationStartDate' => $request->educationStartDate,
            'educationCompletionDate' => $request->educationCompletionDate,
            'scholarshipDuration' => $request->scholarshipDuration,
            'status' => 0
        ]);
        return redirect()->back()->with('thanks', 'Başvuru formu başarıyla gönderildi');
    }

    public function assistantSchool()
    {
        $setting = Setting::where('id', 1)->first()->assistant_school;
        return view('frontend.assistant_school', compact('setting'));
    }

    public function exchangeProgram()
    {
        $setting = Setting::where('id', 1)->first()->exchange_program;
        return view('frontend.exchange_program', compact('setting'));
    }
}
