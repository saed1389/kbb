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
            'popupImage' => 'image',
            'popupImage2' => 'image',
        ]);
        $setting = Setting::where('id', 1)->first();
        if ($request->popupStatus == 1) {
            $status = 1;
        } else {
            $status = 0;
        }

        if ($request->popupStatus2 == 1) {
            $status2 = 1;
        } else {
            $status2 = 0;
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

        if ($request->file('popupImage2')) {
            $manager2 = new ImageManager(new Driver());
            $name_gen2 = Str::slug($request->title2).'-'.hexdec(uniqid()).'.'.$request->file('popupImage2')->getClientOriginalExtension();
            $img2 = $manager2->read($request->file('popupImage2'));
            $img2->toJpeg(80)->save(base_path('public/uploads/settings/popup/'.$name_gen2));
            $save_url2 = 'uploads/settings/popup/'.$name_gen2;
            @unlink($setting->popupImage2);
        } else {
            $save_url2 = $request->popupImageOld2;
        }

        Setting::where('id', 1)->update([
            'title' => $request->title,
            'popupHref' => $request->popupHref,
            'popupEnd_date' => $request->popupEnd_date,
            'popupStatus' => $status,
            'popupImage' => $save_url,
            'title2' => $request->title2,
            'popupHref2' => $request->popupHref2,
            'popupEnd_date2' => $request->popupEnd_date2,
            'popupStatus2' => $status2,
            'popupImage2' => $save_url2,
            'competenceMax' => $request->competenceMax,
        ]);

        $notification = array(
            'message' => "Ayarlar başarıyla güncellendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('settings.index')->with($notification);
    }
}
