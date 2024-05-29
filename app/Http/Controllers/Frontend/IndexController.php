<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\City;
use App\Models\Committees;
use App\Models\Contact;
use App\Models\Director;
use App\Models\Event;
use App\Models\HistoryCommittee;
use App\Models\News;
use App\Models\President;
use App\Models\Provinces;
use App\Models\Scholarship;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserTitle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'password' => ['required'],
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
        return redirect()->route('index')->with($notification);
    }

    public function index()
    {
        setlocale(LC_TIME, 'Turkish');
        if (Auth::guest()) {
            $sliders = News::where('status', 1)
                ->where('slider', 1)
                ->where('confirm', 1)
                ->where('OnPermission', 1)
                ->orderBy('news_order', 'asc')
                ->orderBy('created_at', 'desc')
                ->limit(10)->get();
        } else {
            $sliders = News::where('status', 1)
                ->where('slider', 1)
                ->where('confirm', 1)
                ->orderBy('news_order', 'asc')
                ->orderBy('created_at', 'desc')
                ->limit(10)->get();
        }

        $fourMonthsAgo = Carbon::now()->subMonths(4);

        if (Auth::guest()) {
            $events = Event::where('status', 1)
                ->where('OnPermission', 1)
                ->whereDate('start_date', '>=', $fourMonthsAgo)
                ->orderBy('start_date', 'asc')
                ->get();
        } else {
            $events = Event::where('status', 1)
                ->whereDate('start_date', '>=', $fourMonthsAgo)
                ->orderBy('start_date', 'asc')
                ->get();
        }

        $popup = Setting::select('popupImage', 'popupEnd_date', 'popupHref', 'popupStatus')->where('id', 1)->first();
        $ads = Advertisement::where('status', 1)->get();
        return view('frontend.index', compact('sliders', 'popup', 'events', 'ads'));
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

    public function localAssociations()
    {
        $setting = Setting::where('id', 1)->first()->local_associations;
        return view('frontend.local_associations', compact('setting'));
    }

    public function subBranches()
    {
        $setting = Setting::where('id', 1)->first()->sub_branches;
        return view('frontend.sub-branches', compact('setting'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'type' => $request->contact,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'status' => 0
        ]);

        return redirect()->back()->with('thanks', 'Mesaj Başarıyla Gönderildi');
    }

    public function usersList()
    {
        $cities = Provinces::get();
        $users = User::select('id', 'title', 'first_name', 'last_name', 'slug', 'company_name')->where('status', 1)->limit(50)->get();
        return view('frontend.users_list', compact('users', 'cities'));
    }

    public function getUserList(Request $request)
    {
        if ($request->input('cityId') != '207' && $request->input('cityId')) {
            if ($request->input('cityId')) {
                $cityId = $request->input('cityId');

                if ($cityId == '-1000') {
                    $members = User::with('titleName')
                        ->whereNotExists('work_province', $cityId)
                        ->get();
                } else {
                    $members = User::with('titleName')
                        ->where('work_province', $cityId)
                        ->get();
                }

                $formattedMembers = $members->map(function($member) {
                    return [
                        'id' => $member->id,
                        'slug' => $member->slug,
                        'title_name' => optional($member->titleName)->title,
                        'first_name' => $member->first_name,
                        'last_name' => $member->last_name,
                        'company_name' => $member->company_name,
                    ];
                });

                $city = Provinces::where('province_no', $cityId)->first();
                $cityName = $city->province_name;
                return response()->json([
                    'cityName' => $cityName,
                    'members' => $formattedMembers,
                ]);
            }
        }
        elseif( $request->input('countryId') || $request->input('cityId')) {

            $cityId = $request->input('countryId') ? $request->input('countryId') : $request->input('cityId');

            $members = User::with('titleName')
                ->where('country', $cityId)
                ->where('type', '!=', 1)
                ->get();

            $formattedMembers = $members->map(function($member) {
                return [
                    'id' => $member->id,
                    'slug' => $member->slug,
                    'title_name' => optional($member->titleName)->title,
                    'first_name' => $member->first_name,
                    'last_name' => $member->last_name,
                    'company_name' => $member->company_name,
                ];
            });
            return response()->json([
                'members' => $formattedMembers,
            ]);
        }
    }

    public function calendar()
    {
        return view('frontend.calendar');
    }

    public function calenderEvents(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        $events = Event::whereBetween('start_date', [$start, $end])
            ->orWhereBetween('end_date', [$start, $end])
            ->get();

        $formattedEvents = [];
        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->title,
                'url' => $event->event_href,
                'start' => $event->start_date,
                'end' => $event->end_date
            ];
        }

        return response()->json(['events' => $formattedEvents]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('ara');

        $newsQuery = News::select('id', 'title', 'news_body', 'slug', 'status', 'created_at')
            ->where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('news_body', 'LIKE', '%' . $searchTerm . '%')
            ->where('status', 1)
            ->get()
            ->map(function ($item) {
                $item['source'] = 'news';
                return $item;
            });

        $eventQuery = Event::select('id', 'title', 'slug',  'event_body', 'status', 'created_at')
            ->where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('event_body', 'LIKE', '%' . $searchTerm . '%')
            ->where('status', 1)
            ->get()
            ->map(function ($item) {
                $item['source'] = 'event';
                return $item;
            });

        $userQuery = User::select('id', 'slug', 'first_name','last_name', 'email', 'created_at')
            ->where('first_name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('last_name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('email', 'LIKE', '%' . $searchTerm . '%')
            ->get()
            ->map(function ($item) {
                $item['source'] = 'user';
                return $item;
            });

        $results = $newsQuery->concat($eventQuery)->concat($userQuery);
        //dd($results);
        return view('frontend.search', compact('results', 'searchTerm'));
    }

    public function user($id, string $slug)
    {
        $user = User::find($id);
        return view('frontend.user', compact('user'));
    }
}
