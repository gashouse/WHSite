<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hours;
use Validator;

class HoursController extends Controller
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
		$hours = Hours::all();
		return view('admin.templates.hours.hours-index',  compact('hours'));
	}

	public function show($id)
	{
		return 'show';
		// return 'show the quote with id ' . $id;
	}

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------

    // public function create() { }
    // public function store(StoreQuoteRequest $request, Topic $topic) { }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------

    public function edit($id)
    {
		$hours = Hours::find($id);
		return view('admin.templates.hours.hours-edit',  compact(['hours']));
    }

    public function update(Request $request, $id)
    {
        $hours = Hours::find($id);

        $validator = Validator::make($request->all(), [
			'day' => 				  'required|alpha|max:9',
			'day_abbr' => 			  'required|alpha|max:3',
			'kitchen_open' => 		  'required',
			'kitchen_open_suffix' =>  'nullable|max:2',
			'kitchen_close' => 		  'required',
			'kitchen_close_suffix' => 'nullable|max:2',
			'bar_open' => 			  'required',
			'bar_open_suffix' => 	  'nullable|max:2',
			'bar_close' => 			  'required',
			'bar_close_suffix' => 	  'nullable|max:2',
        ]);

        // $validator = Validator::make($request->all(), $hours->rules);

		if ($validator->fails()) {
			return redirect()->route('hours.edit', [$id])
				->withErrors($validator)
				->withInput();
		}

		$hours->day = $request->day;
		$hours->day_abbr = $request->day_abbr;
		$hours->kitchen_open = $request->kitchen_open;
		$hours->kitchen_open_suffix = $request->kitchen_open_suffix;
		$hours->kitchen_close = $request->kitchen_close;
		$hours->kitchen_close_suffix = $request->kitchen_close_suffix;
		$hours->bar_open = $request->bar_open;
		$hours->bar_open_suffix = $request->bar_open_suffix;
		$hours->bar_close = $request->bar_close;
		$hours->bar_close_suffix = $request->bar_close_suffix;

        $hours->save();

        return $this->index();

    }

// --------------------------------------------------------------------------------
//
// --------------------------------------------------------------------------------

    // public function destroy(Request $request, $id) { }

}

// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }
