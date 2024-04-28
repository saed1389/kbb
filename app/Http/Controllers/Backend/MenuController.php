<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FooterMenu;
use App\Models\Menu;
use App\Models\Setting;
use App\Models\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::where('parent_id', 0)->orderBy('menuOrder', 'asc')->get();
        //$submenus = Menu::whereNot('parent_id', 0)->orderBy('menuOrder', 'desc')->get();
        return view('admin.menus.index', compact( 'menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parentMenu = Menu::where('parent_id', 0)->orderBy('menuOrder', 'desc')->get();
        return view('admin.menus.add', compact('parentMenu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        if ($request->blank) {
            $blank = $request->blank;
        } else {
            $blank = 0;
        }

        Menu::create([
            'parent_id' => $request->parent_id,
            'title' => $request->title,
            'title_en' => $request->title_en,
            'slug' => Str::slug($request->title),
            'slug_en' => Str::slug($request->title_en),
            'href' => $request->href,
            'content' => $request->body,
            'content_en' => $request->content_en,
            'blank' => $blank,
            'show' => $request->show,
            'permission' => $request->permission,
            'status' => $request->status,
            'created_by' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Ana Menü başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('menus.index')->with($notification);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parentMenu = Menu::where('parent_id', 0)->orderBy('menuOrder', 'desc')->get();
        $menu = Menu::where('id', $id)->first();
        return view('admin.menus.edit', compact('menu', 'parentMenu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);

        if ($request->blank) {
            $blank = $request->blank;
        } else {
            $blank = 0;
        }

        Menu::where('id', $id)->update([
            'parent_id' => $request->parent_id,
            'title' => $request->title,
            'title_en' => $request->title_en,
            'slug' => Str::slug($request->title),
            'slug_en' => Str::slug($request->title_en),
            'href' => $request->href,
            'content' => $request->body,
            'content_en' => $request->content_en,
            'blank' => $blank,
            'show' => $request->show,
            'permission' => $request->permission,
            'status' => $request->status,
            'created_by' => Auth::user()->id,
        ]);

        $notification = array(
            'message' => "Menü başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('menus.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Menu::where('id', $id)->delete();
        $notification = array(
            'message' => "Menü başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->route('menus.index')->with($notification);
    }

    public function updateAccordionOrder(Request $request)
    {
        //dd($request);
        $order = $request->input('order');

        foreach ($order as $item) {
            $menu = Menu::find($item['id']);
            $menu->menuOrder = $item['position'];
            $menu->save();
        }

        return response()->json(['status' => '200']);
    }

    public function updateTableOrder(Request $request)
    {
        //dd($request);
        $order = $request->input('order');

        foreach ($order as $item) {
            $menu = Menu::find($item['id']);
            $menu->menuOrder = $item['position'];
            $menu->save();
        }

        return response()->json(['status' => '200']);
    }

    public function footerMenu()
    {
        $menus = Menu::where('status', 1)->get();
        $rightMenus = FooterMenu::where('position', 2)->get();
        $leftMenus = FooterMenu::where('position', 1)->get();
        return view('admin.menus.footer', compact('menus', 'rightMenus', 'leftMenus'));
    }

    public function footerMenuStore(Request $request)
    {
        //dd($request);
        $request->validate([
            'menu_id' => 'required',
            'position' => 'required'
        ]);

        FooterMenu::create([
            'menu_id' => $request->menu_id,
            'position' => $request->position,
        ]);

        $notification = array(
            'message' => "Menü başarıyla eklendi!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function footerMenuDelete($id)
    {
        FooterMenu::where('id', $id)->delete();
        $notification = array(
            'message' => "Menü başarıyla silindi!",
            'alert-type' => 'success'
        );

        return redirect()->route('menus.footer-menu')->with($notification);
    }

    public function footerMenuEdit($id)
    {
        $footer = FooterMenu::where('id', $id)->first();
        $menus = Menu::where('status', 1)->get();
        $rightMenus = FooterMenu::where('position', 2)->get();
        $leftMenus = FooterMenu::where('position', 1)->get();
        return view('admin.menus.footerEdit', compact('menus', 'rightMenus', 'leftMenus', 'footer'));
    }

    public function footerMenuUpdate(Request $request, $id)
    {
        $request->validate([
            'menu_id' => 'required',
            'position' => 'required'
        ]);

        FooterMenu::where('id', $id)->update([
            'menu_id' => $request->menu_id,
            'position' => $request->position,
        ]);

        $notification = array(
            'message' => "Menü başarıyla güncelle!",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function assistantSchool()
    {
        $setting = Setting::first()->assistant_school;
        return view('admin.menus.assistant_school', compact('setting'));
    }

    public function assistantSchoolUpdate(Request $request)
    {
        $request->validate([
            'economic_business' => 'required',
        ]);

        Setting::where('id', '1')->update([
            'assistant_school' => $request->economic_business,
        ]);

        $notification = array(
            'message' => "Asistan Okulu başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('menu.assistantSchool')->with($notification);
    }

    public function exchangeProgram()
    {
        $setting = Setting::first()->exchange_program;
        return view('admin.menus.exchange-program', compact('setting'));
    }

    public function exchangeProgramUpdate(Request $request)
    {
        $request->validate([
            'economic_business' => 'required',
        ]);

        Setting::where('id', '1')->update([
            'exchange_program' => $request->economic_business,
        ]);

        $notification = array(
            'message' => "Değişim Programı başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('menu.exchangeProgram')->with($notification);
    }

    public function localAssociations()
    {
        $setting = Setting::first()->local_associations;
        return view('admin.menus.local_associations', compact('setting'));
    }

    public function localAssociationsUpdate(Request $request)
    {
        $request->validate([
            'economic_business' => 'required',
        ]);

        Setting::where('id', '1')->update([
            'local_associations' => $request->economic_business,
        ]);

        $notification = array(
            'message' => "Yöresel Dernekler başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('menu.localAssociations')->with($notification);
    }

    public function subBranches()
    {
        $setting = Setting::first()->sub_branches;
        return view('admin.menus.sub-branches', compact('setting'));
    }

    public function subBranchesUpdate(Request $request)
    {
        $request->validate([
            'economic_business' => 'required',
        ]);

        Setting::where('id', '1')->update([
            'sub_branches' => $request->economic_business,
        ]);

        $notification = array(
            'message' => "Alt Bilim Dalları başarıyla düzenlendi!",
            'alert-type' => 'success'
        );

        return redirect()->route('menu.subBranches')->with($notification);
    }
}
