<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.documents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documents.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'user_cv' => 'mimes:doc,csv,xlsx,xls,docx,ppt,odt,ods,odp,pdf',
        ]);

        if ($request->file('file')) {
            $file = $request->file('file');
            $gen = Str::slug($request->title);
            $fileName = $gen.'-'.date('d-m-Y-H-i-s').'.'.$file->getClientOriginalExtension();
            $filePath = 'uploads/Document/';

            $file->move(public_path($filePath), $fileName);
            $doc_url = 'uploads/Document/'.$fileName;
        }

        Document::create([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $doc_url,
            'documentPlace' => $request->documentPlace,
            'documentType' => $request->documentType,
            'OnPermission' => $request->OnPermission,
            'created_by' => Auth::user()->id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "Belge başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('documents.index')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doc = Document::where('id', $id)->first();
        return view('admin.documents.edit', compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'user_cv' => 'mimes:doc,docx,pdf',
        ]);

        if ($request->file('file')) {
            $file = $request->file('file');
            $gen = Str::slug($request->title);
            $fileName = $gen.'-'.date('d-m-Y-H-i-s').'.'.$file->getClientOriginalExtension();
            $filePath = 'uploads/Document/';

            $file->move(public_path($filePath), $fileName);
            $doc_url = 'uploads/Document/'.$fileName;
        } else {
            $doc_url = $request->oldDoc;
        }

        Document::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $doc_url,
            'documentPlace' => $request->documentPlace,
            'documentType' => $request->documentType,
            'OnPermission' => $request->OnPermission,
            'created_by' => Auth::user()->id,
            'status' => $request->status,
        ]);

        $notification = array(
            'message' => "Belge başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('documents.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $doc = Document::where('id', $id)->first();
        @unlink($doc->file);
        $doc->delete();

        $notification = array(
            'message' => "Belge başarıyla silindi!",
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function changeStatus($id, $status)
    {
        Document::where('id', $id)->update(['status' => $status]);
    }

    public function GetDocuments()
    {
        if (\request()->ajax()) {
            return datatables()->of(Document::select('documents.*')->orderBy('created_at', 'desc'))
                ->make(true);
        } else {
            return false;
        }
    }

}
