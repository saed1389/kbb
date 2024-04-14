<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Committees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CommitteesController extends Controller
{
    public function checkIndex()
    {
        $lists = Committees::where('menu_id', 1)->get();
        return view('admin.menus.check.index', compact('lists'));
    }

    public function checkStore(Request $request) {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $manger = new ImageManager(new Driver());
            $name_gen = Str::slug($request->name).'-'.hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manger->read($request->file('image'));
            $img->toJpeg(80)->save(base_path('public/uploads/users/committees/'.$name_gen));
            $save_url = 'uploads/users/committees/'.$name_gen;
        } else {
            $save_url = '';
        }

        Committees::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $save_url,
            'status' => 1,
            'menu_id' => 1,
            'created_by' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Denetleme başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('committees.check')->with($notification);
    }

    public function checkEdit($id) {
        $lists = Committees::where('menu_id', 1)->get();
        $user = Committees::where('id', $id)->first();

        return view('admin.menus.check.edit', compact('user', 'lists'));
    }

    public function checkUpdate(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $manger = new ImageManager(new Driver());
            $name_gen = Str::slug($request->name).'-'.hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manger->read($request->file('image'));
            $img->toJpeg(80)->save(base_path('public/uploads/users/committees/'.$name_gen));
            $save_url = 'uploads/users/committees/'.$name_gen;
        } else {
            $save_url = $request->oldImage;
        }

        Committees::where('id', $id)->update([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => "Denetleme başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('committees.check')->with($notification);
    }

    public function delete($id) {
        $user = Committees::where('id', $id)->first();
        @unlink($user->image);
        $user->delete();
        $notification = array(
            'message' => "Üye başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function adviceIndex ()
    {
        $lists = Committees::where('menu_id', 2)->get();
        return view('admin.menus.advice.index', compact('lists'));
    }

    public function adviceStore(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        Committees::create([
            'name' => $request->name,
            'position' => $request->position,
            'menu_id' => 2,
            'status' => 1,
            'created_by' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Danışma başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('committees.advice')->with($notification);
    }

    public function adviceEdit($id) {
        $lists = Committees::where('menu_id', 2)->get();
        $user = Committees::where('id', $id)->first();

        return view('admin.menus.advice.edit', compact('user', 'lists'));
    }

    public function adviceUpdate(Request $request, $id) {
        $request->validate([
            'name' => 'required',
        ]);

        Committees::where('id', $id)->update([
            'name' => $request->name,
            'position' => $request->position,
        ]);

        $notification = array(
            'message' => "Danışma başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('committees.advice')->with($notification);
    }

    public function honorIndex () {
        $lists = Committees::where('menu_id', 3)->get();
        return view('admin.menus.honor.index', compact('lists'));
    }

    public function honorStore(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);

        Committees::create([
            'name' => $request->name,
            'position' => $request->position,
            'menu_id' => 3,
            'status' => 1,
            'created_by' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Onur ve Etik başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('committees.honor')->with($notification);
    }

    public function honorEdit($id) {
        $lists = Committees::where('menu_id', 3)->get();
        $user = Committees::where('id', $id)->first();

        return view('admin.menus.honor.edit', compact('user', 'lists'));
    }

    public function honorUpdate(Request $request, $id) {
        $request->validate([
            'name' => 'required',
        ]);

        Committees::where('id', $id)->update([
            'name' => $request->name,
            'position' => $request->position,
        ]);

        $notification = array(
            'message' => "Onur ve Etik başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('committees.honor')->with($notification);
    }

    public function qualificationIndex()
    {
        $lists = Committees::where('menu_id', 4)->get();
        return view('admin.menus.qualification.index', compact('lists'));
    }

    public function qualificationStore(Request $request) {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $manger = new ImageManager(new Driver());
            $name_gen = Str::slug($request->name).'-'.hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manger->read($request->file('image'));
            $img->toJpeg(80)->save(base_path('public/uploads/users/committees/'.$name_gen));
            $save_url = 'uploads/users/committees/'.$name_gen;
        } else {
            $save_url = '';
        }

        Committees::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $save_url,
            'status' => 1,
            'menu_id' => 4,
            'created_by' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Yeterlik Yürütme başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('committees.qualification')->with($notification);
    }

    public function qualificationEdit($id) {
        $lists = Committees::where('menu_id', 4)->get();
        $user = Committees::where('id', $id)->first();

        return view('admin.menus.qualification.edit', compact('user', 'lists'));
    }

    public function qualificationUpdate(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $manger = new ImageManager(new Driver());
            $name_gen = Str::slug($request->name).'-'.hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manger->read($request->file('image'));
            $img->toJpeg(80)->save(base_path('public/uploads/users/committees/'.$name_gen));
            $save_url = 'uploads/users/committees/'.$name_gen;
        } else {
            $save_url = $request->oldImage;
        }

        Committees::where('id', $id)->update([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => "Yeterlik Yürütme başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('committees.qualification')->with($notification);
    }





    public function changeStatus($id, $status)
    {
        Committees::where('id', $id)->update(['status' => $status]);
    }
}
