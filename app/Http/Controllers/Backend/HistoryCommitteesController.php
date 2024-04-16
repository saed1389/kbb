<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HistoryCommittee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryCommitteesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historyCommittees = HistoryCommittee::all();
        return view('admin.menus.historyCommittees.index', compact('historyCommittees'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HistoryCommittee::create([
            'start_date' => $request->start_date,
            'president' => $request->president,
            'sec_president' => $request->sec_president,
            'secretary' => $request->secretary,
            'accounting' => $request->accounting,
            'member' => $request->member,
            'created_by' => Auth::user()->id,
            'status' => 1,
        ]);

        $notification = array(
            'message' => "Geçmiş Dönemler Yönetim başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('history-committees.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $historyCommittees = HistoryCommittee::orderBy('start_date', 'ASC')->get();
        $member = HistoryCommittee:: where('id', $id)->first();
        return view('admin.menus.historyCommittees.edit', compact('historyCommittees', 'member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        HistoryCommittee::where('id', $id)->update([
            'start_date' => $request->start_date,
            'president' => $request->president,
            'sec_president' => $request->sec_president,
            'secretary' => $request->secretary,
            'accounting' => $request->accounting,
            'member' => $request->member,
        ]);

        $notification = array(
            'message' => "Geçmiş Dönemler Yönetim başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('history-committees.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        HistoryCommittee::where('id', $id)->delete();
        $notification = array(
            'message' => "Geçmiş Dönemler Yönetim başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->route('history-committees.index')->with($notification);
    }
}
