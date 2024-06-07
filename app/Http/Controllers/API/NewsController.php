<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use App\Models\CompetencePoint;
use App\Models\Event;
use App\Models\Image;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\PhotoCategory;
use App\Models\School;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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
            'certificate' => 'required'
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

    public function kbbCompetenceEdit($id)
    {
        $jobs = Competence::where('competences.id', $id)
            ->join('competence_points', 'competence_points.id', '=', 'competences.point_id')
            ->select('competence_points.title as point_name', 'competence_points.point as point_max', 'competences.*')
            ->first();
        return response()->json(['jobs' => $jobs], 200);
    }

    public function kbbCompetenceUpdate(Request $request,$id)
    {
        if ($request->hasFile('certificate')) {
            $path = 'uploads/users/certificate/';
            $fileName = $request->file('certificate')->getClientOriginalName();
            $request->file('certificate')->move($path, $fileName);
            $fileUrl = $path .$fileName;
        } else {
            $fileUrl = $request->certificateOld;
        }

        Competence::where('id', $id)->update([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'certificate' => $fileUrl,
            'point_id' => $request->point_id,
            'edit_request' => 0,
            'point' => 0,
            'vote' => 0,
            'status' => 0,
            'updated_at' => Carbon::now()
        ]);

        return response()->json(status: 200);
    }

    public function kbbCompetenceDelete($id){
        Competence::where('id', $id)->delete();
        return response()->json(status: 200);
    }

    public function titles()
    {
        $titles = UserTitle::where('status', 1)->get();
        return response()->json(['titles' => $titles], 200);
    }

    public function newsCreate()
    {
        $galleries = PhotoCategory::where('status', 1)->get();
        $categories = NewsCategory::where('status', 1)->get();
        return response()->json(['galleries' => $galleries, 'categories' => $categories], 200);
    }

    public function newsStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'news_body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')){

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img1 = $manager->read($request->file('image'));
            $img2 = $manager->read($request->file('image'));
            $img3 = $manager->read($request->file('image'));
            $crop = $manager->read($request->file('image'));

            $imgSmall = $img2->scale(355, 124);
            $imgMid = $img3->scale(590, 204);

            $img1->toJpeg(80)->save(base_path('public/uploads/news/original/'.$name_gen));
            $imgMid->toJpeg(60)->save(base_path('public/uploads/news/mid/'.$name_gen));
            $imgSmall->toJpeg(80)->save(base_path('public/uploads/news/small/'.$name_gen));
            $crop->toJpeg(80)->save(base_path('public/uploads/news/crop/'.$name_gen));

            $save_url = $name_gen;
        } else {
            $save_url = '';
        }

        if ($request->gallery != 0) {
            if ($request->file('image')) {
                $imgGallery = $manager->read($request->file('image'));
                $imgGallery->toJpeg(80)->save(base_path('public/uploads/photoGallery/'.$name_gen));
                Image::create([
                    'category' => $request->gallery,
                    'image' => 'uploads/photoGallery/'.$name_gen,
                    'created_by' => Auth::user()->id,
                    'status' => 1
                ]);
            }
        }

        if ($request->new_page) {
            $new_page = $request->new_page;
        } else {
            $new_page = 0;
        }

        News::create([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'short_description' => $request->short_description,
            'short_description_en' => $request->short_description_en,
            'news_href' => $request->news_href,
            'gallery' => $request->gallery,
            'new_page' => $new_page,
            'news_body' => $request->news_body,
            'news_body_en' => $request->news_body_en,
            'placeId' => $request->placeId,
            'news_category' => $request->news_category,
            'slider' => $request->slider,
            'OnPermission' => $request->OnPermission,
            'status' => 0,
            'image' => $save_url,
            'cropImage' => $save_url,
            'created_by' => Auth::user()->id,
            'news_order' => 0,
            'confirm' => 0
        ]);
    }

    public function newsEdit(string $id)
    {
        $news = News::where('id', $id)->first();
        $galleries = PhotoCategory::where('status', 1)->get();

        return response()->json(['news' => $news, 'galleries' => $galleries], 200);
    }

    public function newsUpdate(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'news_body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')){
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img1 = $manager->read($request->file('image'));
            $img2 = $manager->read($request->file('image'));
            $img3 = $manager->read($request->file('image'));

            $imgSmall = $img2->scale(355, 124);
            $imgMid = $img3->scale(590, 204);

            $img1->toJpeg(80)->save(base_path('public/uploads/news/original/'.$name_gen));
            $imgMid->toJpeg(60)->save(base_path('public/uploads/news/mid/'.$name_gen));
            $imgSmall->toJpeg(80)->save(base_path('public/uploads/news/small/'.$name_gen));
            @unlink('uploads/news/original/'.$request->oldImage);
            @unlink('uploads/news/mid/'.$request->oldImage);
            @unlink('uploads/news/small/'.$request->oldImage);
            $save_url = $name_gen;
        } else {
            $save_url = $request->oldImage;
        }

        if ($request->gallery != 0) {
            if ($request->file('image')) {
                $imgGallery = $manager->read($request->file('image'));
                $imgGallery->toJpeg(80)->save(base_path('public/uploads/photoGallery/'.$name_gen));
            }

            $photo = Image::where('image', $request->oldImage)->first();

            if ($photo) {
                @unlink('uploads/photoGallery/'.$request->oldImage);
                $photo->delete();
            }

            Image::create([
                'category' => $request->gallery,
                'image' => 'uploads/photoGallery/'.$name_gen,
                'created_by' => Auth::user()->id,
                'status' => 1
            ]);
        }

        if ($request->image_base64) {
            $crop = $this->storeBase64($request->image_base64);
            @unlink('uploads/news/crop/'.$request->oldCrop);
        } else {
            $crop = $request->oldCrop;
        }

        if ($request->new_page) {
            $new_page = $request->new_page;
        } else {
            $new_page = 0;
        }

        News::where('id', $id)->update([
            'title' => $request->title,
            'title_en' => $request->title_en,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'short_description' => $request->short_description,
            'short_description_en' => $request->short_description_en,
            'news_href' => $request->news_href,
            'gallery' => $request->gallery,
            'new_page' => $new_page,
            'news_body' => $request->news_body,
            'news_body_en' => $request->news_body_en,
            'placeId' => $request->placeId,
            'news_category' => $request->news_category,
            'slider' => $request->slider,
            'OnPermission' => $request->OnPermission,
            'image' => $save_url,
            'cropImage' => $crop,
        ]);

        return response()->json(status: 200);
    }

    public function newsDelete(string $id){
        $news = News::findOrFail($id);
        @unlink('uploads/news/original/'.$news->image);
        @unlink('uploads/news/mid/'.$news->image);
        @unlink('uploads/news/small/'.$news->image);
        @unlink('uploads/news/crop/'.$news->cropImage);
        $news->delete();

        return response()->json(status: 200);
    }

    public function activityList()
    {
        $activities = CompetencePoint::where('status', 1)->get();
        return response()->json(['activities' => $activities], 200);
    }

    public function notification()
    {

    }

}
