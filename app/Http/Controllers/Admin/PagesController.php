<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function index()
    {
		$pages = Page::all();
		return view('admin.templates.pages.pages-index',  compact('pages'));
    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function create()
    {
        return view('admin.templates.pages.pages-create');
    }

    public function upload_hero($file)
    {
		return $file->store('public/uploads/heros');
	}

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
			'title' => 'required|string',
			'slug' => 'required|alpha_dash|unique:pages,slug',
			'url' => 'required',
			'active' => 'nullable',
			'hero_image' => 'nullable',
			'hero_title' => 'nullable',
			'hero_tagline' => 'nullable',
        ]);

		if ($validator->fails()) {
			return redirect()->route('pages.create')
				->withErrors($validator)
				->withInput();
		}

		$page = new Page;

		$page->title = $request->title;
		$page->slug = $request->slug;
		$page->url = $request->url;
		$page->active = $request->active;

		if ($request->file('hero_image')) {
			$page->hero_image = $this->upload_hero($request->file('hero_image'));
		} else {
			$page->hero_image = NULL;
		}

		$page->hero_title = $request->hero_title;
		$page->hero_tagline  = $request->hero_tagline;

        $page->save();

        if ($request->file('hero_image')) {
			$request->file('hero_image')->store('uploads/heros');
		}

        return $this->index();
    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function show($id)
    {
        //
    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function edit($id)
    {
		$page = Page::find($id);
		return view('admin.templates.pages.pages-edit',  compact(['page']));
    }

    public function update(Request $request, $id)
    {
    	$page = Page::find($id);

        $validator = Validator::make($request->all(), [
			'title' => 'required|string',
			'slug' =>    [
				'required',
				'alpha_dash',
				Rule::unique('pages')->ignore($id),
			],
			'url' => 'required',
			'active' => 'nullable',
			'hero_image' => 'nullable',
			'hero_title' => 'nullable',
			'hero_tagline' => 'nullable',
        ]);

		if ($validator->fails()) {
			return redirect()->route('pages.edit', [$id])
				->withErrors($validator)
				->withInput();
		}

		$page->title = $request->title;
		$page->slug = $request->slug;
		$page->url = $request->url;
		$page->active = $request->active;

		if ($request->file('hero_image')) {
			$page->hero_image = $this->upload_hero($request->file('hero_image'));
		} else {
			$page->hero_image = NULL;
		}

		$page->hero_title = $request->hero_title;
		$page->hero_tagline  = $request->hero_tagline;

        $page->save();

        if ($request->file('hero_image')) {
			$request->file('hero_image')->store('uploads/heros');
		}

        return $this->index();

    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        Storage::delete($page->url);
        $page->delete();
        return $this->index();
    }
}
