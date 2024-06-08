<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.scholarships.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function display(string $id)
    {
        $scholarship = Scholarship::where('id', $id)->first();
        return view('admin.scholarships.show', compact('scholarship'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
    }

    public function changeStatus($id, $status)
    {
        Scholarship::where('id', $id)->update(['status' => $status]);
    }

    public function GetScholarships()
    {
        if (\request()->ajax()) {
            return datatables()->of(Scholarship::select('scholarships.*')->orderBy('created_at', 'desc'))
                ->make(true);
        } else {
            return false;
        }
    }
}
