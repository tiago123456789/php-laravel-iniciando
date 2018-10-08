<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    public function index() {
       $pages =  Page::paginate(15);
       return view("admin.page.index", compact('pages'));
    }

    public function show($id) {
        $page = Page::find($id);
        return view("admin.page.show", compact("page"));
    }

    public function edit($id) {
        $page = Page::find($id);
        return view("admin.page.edit", compact("page"));
    }

    public function new() {
        return view("admin.page.new");
    }

    public function create(Request $request) {
        $newPage = Input::except("_token");
        $page = new Page($newPage);
        $page->save();
        return redirect()->route("page");
    }

    public function update(Request $request, $id) {
        $page = Page::find($id);
        $page->title = $request->input("title");
        $page->url = $request->input("url");
        $page->body = $request->input("body");
        $page->save();
        return redirect()->route("page");
    }

    public function remove($id) {
        Page::where("id", "=", $id)->delete();
        return redirect()->route("page");
    }
}
