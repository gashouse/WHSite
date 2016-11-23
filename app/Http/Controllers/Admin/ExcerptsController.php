<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Excerpt;
use Validator;
use Illuminate\Validation\Rule;

class ExcerptsController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------

	public function index()
	{
		$excerpts = Excerpt::all();
		return view('admin.templates.excerpts.excerpts-index',  compact('excerpts'));
	}

	public function show($id)
	{
		return 'show';
		// return 'show the quote with id ' . $id;
	}

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------

    public function create() {
    	return view('admin.templates.excerpts.excerpts-create');
    }

	public function store(Request $request) {


		if ($request->active == false || $request->active == null) {
			$active = false;
		}
		else {
			$active = true;
		}

        $validator = Validator::make($request->all(), [
			'title' =>   'required|string',
			'slug' =>    'required|alpha_dash|unique:excerpts,slug',
			'content' => 'required',
			'types' =>   'nullable',
			'active' =>  'boolean|nullable',
        ]);

		if ($validator->fails()) {
			return redirect()->route('excerpts.create')
				->withErrors($validator)
				->withInput();
		}

		$excerpt = new Excerpt;

		$excerpt->title = $request->title;
		$excerpt->slug = $request->slug;
		$excerpt->content = $request->content;
		$excerpt->types = $request->types;
		$excerpt->active = $active;

        $excerpt->save();

        return $this->index();
	}

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------

    public function edit($id)
    {
		$excerpt = Excerpt::find($id);
		return view('admin.templates.excerpts.excerpts-edit',  compact(['excerpt']));
    }

    public function update(Request $request, $id)
    {
        $excerpt = Excerpt::find($id);

        $validator = Validator::make($request->all(), [
			'title' =>   'required|string',
			'slug' =>    [
				'required',
				'alpha_dash',
				Rule::unique('excerpts')->ignore($id),
			],
			'content' => 'required',
			'types' =>   'nullable',
			'active' =>  'boolean|nullable',
        ]);

		if ($validator->fails()) {
			return redirect()->route('excerpts.edit', [$id])
				->withErrors($validator)
				->withInput();
		}

		$excerpt->title = $request->title;
		$excerpt->slug = $request->slug;
		$excerpt->content = $request->content;
		$excerpt->types = $request->types;
		$excerpt->active = $request->active;

        $excerpt->save();

        return $this->index();

    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------
    public function destroy($id)
    {
        $menu = Excerpt::findOrFail($id)->delete();
        return $this->index();
    }

}
