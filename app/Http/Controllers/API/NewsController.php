<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use App\Models\CompetencePoint;
use App\Models\Event;
use App\Models\News;
use App\Models\School;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(){
        $news = News::where('status', 1)
            ->where('confirm', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return response()->json(['news' => $news], 200);
    }

    public function slider(){
        $sliders = News::where('status', 1)
            ->where('slider', 1)
            ->where('confirm', 1)
            ->orderBy('news_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->limit(10)->get();

        return response()->json(['sliders' => $sliders], 200);
    }

    public function show($id)
    {
        $news = News::findOrFail($id);

        return response()->json(['news' => $news], 200);
    }

    public function events() {
        $news = Event::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return response()->json(['news' => $news], 200);
    }

    public function eventDetail($id)
    {
        $news = Event::findOrFail($id);

        return response()->json(['news' => $news], 200);
    }

    public function chatUser()
    {
        $users = User::select('users.id', 'users.first_name', 'users.last_name', 'users.profile_image', 'user_titles.title')
            ->leftJoin('user_titles', 'user_titles.id', '=', 'users.title')
            ->get();
        return response()->json(['users' => $users], 200);
    }

    public function profile()
    {
        $profile = User::where('id', Auth::user()->id)->first();

        return response()->json(['profile' => $profile], 200);
    }

    public function profileStore(Request $request)
    {
        $request->validate([
            'email' => "required|email",
        ],[
            'email.unique' => 'E-posta benzersiz olmalı',
        ]);

        User::where('id', Auth::user()->id)->update([
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

        return response()->json(['message' => 'Başarıyla güncellendi'], 200);
    }

    public function kbbSchool(Request $request)
    {
        School::create([
            'name' => $request->name,
            'specialty_date' => $request->specialty_date,
            'specialty_subject' => $request->specialty_subject,
            'currently_work' => $request->currently_work,
            'graduated_faculty' => $request->graduated_faculty,
            'graduation_year' => $request->graduation_year,
            'first_school' => $request->first_school,
            'second_school' => $request->second_school,
            'congress_registration' => $request->congress_registration,
            'institutional_permission' => $request->institutional_permission,
            'certificate_proficiency' => $request->certificate_proficiency,
            'european_board' => $request->european_board,
            'previously_school' => $request->previously_school,
            'complete_school' => $request->complete_school,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'status' => 0,
            'created_by' => Auth::user()->id,
        ]);

        return response()->json(['message' => 'Form başarıyla gönderildi.'], 200);
    }

    public function kbbSchoolGet()
    {
        $schools = School::select('created_at', 'status')
            ->where('created_by', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json(['schools' => $schools], 200);
    }

    public function kbbCompetenceStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'certificate' => 'file'
        ]);

        if ($request->hasFile('certificate')) {
            $path = 'uploads/users/certificate/';
            $fileName = $request->file('certificate')->getClientOriginalName();
            $request->file('certificate')->move($path, $fileName);
            $fileUrl = $path .$fileName;
        } else {
            $fileUrl = '';
        }

        $point = CompetencePoint::where('id', $request->point_id)->first();

        Competence::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'certificate' => $fileUrl,
            'point' => $point->point,
            'vote' => 0,
            'status' => 0,
            'point_id' => $request->point_id,
            'user_id' => Auth::user()->id,
        ]);
    }

    public function kbbCompetenceList()
    {
        $competences = Competence::where('user_id', Auth::user()->id)->get();

        return response()->json(['competences' => $competences], 200);
    }

    public function kbbCompetencePoint()
    {
        $points = Competence::select('point')
            ->where('user_id', Auth::user()->id)
            ->where('vote', 1)
            ->where('status', 2)
            ->sum('point');

        return response()->json(['points' => $points], 200);
    }

    public function kbbCompetenceTotal()
    {
        $totalPoint = Setting::select('competenceMax')->where('id', 1)->first();

        return response()->json(['totalPoint' => $totalPoint], 200);
    }

    public function notification()
    {

    }

}
