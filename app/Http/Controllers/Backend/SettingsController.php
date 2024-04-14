<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SettingsController extends Controller
{
    public function index()
    {
        $setting = Setting::where('id', 1)->first();
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'popupImage' => 'image'
        ]);
        $setting = Setting::where('id', 1)->first();
        if ($request->popupStatus == 1) {
            $status = 1;
        } else {
            $status = 0;
        }

        if ($request->file('popupImage')) {
            $manager = new ImageManager(new Driver());
            $name_gen = Str::slug($request->title).'-'.hexdec(uniqid()).'.'.$request->file('popupImage')->getClientOriginalExtension();
            $img1 = $manager->read($request->file('popupImage'));
            $img1->toJpeg(80)->save(base_path('public/uploads/settings/popup/'.$name_gen));
            $save_url = 'uploads/settings/popup/'.$name_gen;
            @unlink($setting->popupImage);
        } else {
            $save_url = $request->popupImageOld;
        }

        Setting::where('id', 1)->update([
            'title' => $request->title,
            'popupHref' => $request->popupHref,
            'popupEnd_date' => $request->popupEnd_date,
            'popupStatus' => $status,
            'popupImage' => $save_url,
            'competenceMax' => $request->competenceMax,
        ]);

        $notification = array(
            'message' => "Ayarlar başarıyla güncellendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('settings.index')->with($notification);
    }
}
