<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use App\Models\CompetencePoint;
use App\Models\Setting;
use Illuminate\Http\Request;

class CompetencePointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $points = CompetencePoint::all();
        return view('admin.competence.points.index', compact('points'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'point' => 'required|numeric'
        ]);
        CompetencePoint::create([
            'title' => $request->title,
            'point' => $request->point,
            'status' => 1
        ]);

        $notification = array(
            'message' => "Yeterlik puani başarıyla eklendi!",
            'alert-type' => 'success'
        );
        return redirect()->route('competencesPoint.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $points = CompetencePoint::all();
        $point = CompetencePoint::where('id', $id)->first();
        return view('admin.competence.points.edit', compact('points', 'point'));
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
        CompetencePoint::where('id', $id)->delete();
        $notification = array(
            'message' => "Yeterlik puani başarıyla silindi!",
            'alert-type' => 'success'
        );
        return redirect()->route('competencesPoint.index')->with($notification);
    }

    public function changeStatus($id, $status)
    {
        CompetencePoint::where('id', $id)->update(['status' => $status]);
    }

    public function memberList()
    {
        $total = Setting::select('competenceMax')->first()->competenceMax;
        $points = Competence::groupBy('user_id')
            ->selectRaw('user_id, SUM(point) as total_points')
            ->orderBy('total_points', 'DESC')
            ->get();
        //dd($points);
        return view('admin.competence.memberList', compact('points', 'total'));
    }
}
