<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Menu;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class MenusController extends Controller
{

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function index()
    {
		$menus = Menu::all();
		return view('admin.templates.menus.menus-index',  compact('menus'));
    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function create()
    {
        return view('admin.templates.menus.menus-create');
    }

    public function upload_menu($file)
    {
		return $file->store('public/uploads/menus');
	}

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
			'name' =>       'required|string',
			'slug' =>       'required|alpha_dash|unique:menus,slug',
			'url' => 	    'required',
			'visibility' => 'nullable',
			'thumbnail' =>  'nullable',
			'notes' =>      'nullable',
        ]);

		if ($validator->fails()) {
			return redirect()->route('menus.create')
				->withErrors($validator)
				->withInput();
		}

		$menu = new Menu;

		$menu->name = $request->name;
		$menu->slug = $request->slug;

		if ($request->file('url')) {
			$menu->url = $this->upload_menu($request->file('url'));
		} else {
			$menu->url = NULL;
		}

		$menu->visibility = $request->visibility;
		$menu->thumbnail  = $request->thumbnail;
		$menu->notes      = $request->notes;

        $menu->save();

        if ($request->file('url')) {
			$request->file('url')->store('uploads/menus');
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
		$menu = Menu::find($id);
		return view('admin.templates.menus.menus-edit',  compact(['menu']));
    }

    public function update(Request $request, $id)
    {
    	$menu = Menu::find($id);

        $validator = Validator::make($request->all(), [
			'name' =>       'required|string',
			'slug' =>    [
				'required',
				'alpha_dash',
				Rule::unique('excerpts')->ignore($id),
			],
			'url' => 	    'required',
			'visibility' => 'nullable',
			'thumbnail' =>  'image|nullable',
			'notes' =>      'nullable',
        ]);

		if ($validator->fails()) {
			return redirect()->route('menus.edit', [$id])
				->withErrors($validator)
				->withInput();
		}

		$menu->name = $request->name;
		$menu->slug = $request->slug;
		$menu->url = $this->upload_menu($request->file('url'), $request->slug);
		$menu->visibility = $request->visibility;
		$menu->thumbnail = $request->thumbnail;
		$menu->notes = $request->notes;

        $menu->save();

        return $this->index();
    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        Storage::delete($menu->url);
        $menu->delete();
        return $this->index();
    }
}
