<?php

namespace App\Http\Controllers\reporter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\DB;

use App\Models\category;
use App\Models\blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function base()
    {
        return view('reporter.index');
    }

    public function index() 
    {
        $data = DB::table('blogs')->where('status', '=', '1', 'and','user', '=', Auth::user()->id)->get();
        return view('reporter.list', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('reporter.add', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'max:100',
            'image' => 'image|mimes:jpeg,png,jpg,',
            'image_source' => 'max:50',
        ]);
        $newData = new blog;
        $newData->title = $request->title;
        $newData->image_source = $request->image_source;
        $newData->content = $request->content;
        $newData->category = $request->category;
        $newData->user = Auth::user()->id;
        $date = date('Y-m-d');
        $place = str_replace('$date$', $date, 'public/images/post/$date$/');
        $name = $request->title.time().'.'.$request->file('image')->getClientOriginalExtension();
        // move image
        $request->file('image')->move(public_path($place), $name);
        $newData->image = $place.$name;
        $newData->save();
        $request->session()->flash('success');
        return redirect(route('reporter-list-post'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
