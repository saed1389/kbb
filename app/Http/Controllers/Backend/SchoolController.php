<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::where('created_by', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('user.schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.schools.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        $notification = array(
            'message' => "Başvuru formu başarıyla gönderildi!",
            'alert-type' => 'danger'
        );

        return redirect()->route('schools.index')->with($notification);
    }

    public function list() {
        return view('admin.schools.list');
    }

    public function GetSchool()
    {
        if (\request()->ajax()) {
            return datatables()->of(School::select('schools.*')->orderBy('created_at', 'desc'))
                ->make(true);
        } else {
            return false;
        }
    }

    public function changeStatus($id, $status)
    {
        School::where('id', $id)->update(['status' => $status]);
    }
}
