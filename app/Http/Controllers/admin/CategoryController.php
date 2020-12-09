<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\models\category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = category::paginate(50);
        $query = '';
        $filter = '';
        if ($request->search) {
            $query = str_replace('$query$', $request->search, '%$query$%');
            $data = category::where('name', 'like', $query)->paginate(50);
        }
        if ($request->filter) {
            if ($request->filter == 'NewTrue'){
                $filter = 'New = True';
                $data = category::where('is_new', '=', '1')->paginate(50);
            } 
            else if ($request->filter == 'NewFalse') {
                $filter = 'New = False';
                $data = category::where('is_new', '=', '0')->paginate(50);
            }
            else if ($request->filter == 'TrendingTrue') {
                $filter = 'Treding = True';
                $data = category::where('is_trending', '=', '1')->paginate(50);
            }
            else if ($request->filter == 'TrendingFalse') {
                $filter = 'Trending = False';
                $data = category::where('is_trending', '=', '0')->paginate(50);
            }
            else if ($request->filter == 'AutoUpdateTrue') {
                $filter = 'Auto Update = True';
                $data = category::where('is_auto_update', '=', '1')->paginate(50);
            }
            else if ($request->filter == 'AutoUpdateFalse') {
                $filter = 'Auto Update = False';
                $data = category::where('is_auto_update', '=', '0')->paginate(50);
            }
        }
        foreach ($data as $item) {
            $item->AutoUpdateFunction;
        }
        return view('admin.category.list', [
            'data' => $data,
            'query' => $query,
            'filter' => $filter,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
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
            'name' => 'unique:categories|max:50',
            'image' => 'image|mimes:jpeg,png,jpg,',
        ]);
        $new = new category;
        $new->name = $request->name;
        $new->is_new = $request->new;
        $new->is_trending = $request->trending;
        $new->is_auto_update = $request->autoUpdate;

        $date = date('Y-m-d');
        $place = str_replace('$date$', $date, 'public/images/categories/$date$/');
        $name = $request->name.time() . '.' .$request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path($place), $name);
        $path = $place.$name;
        $new->image = $path;
        $new->user = Auth::user()->id;
        $new->save();
        $request->session()->flash('success');
        if($request->add) {
            return redirect(route('admin-category-list'));
        } else {
            return redirect(route('admin-category-add'));
        }
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
        $data = category::findOrFail($id);
        $data->AutoUpdateFunction;
        return view('admin.category.edit', ['data' => $data]);
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
        $data = category::findOrFail($id);
        $request->validate([
            'name' => 'max:50',
        ]);
        if($request->hasFile('image') != null) {
            $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,',
            ]);
            $date = date('Y-m-d');
            $place = str_replace('$date$', $date, 'public/images/categories/$date$/');
            $name = $request->name.time() . '.' .$request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path($place), $name);
            $path = $place.$name;
            $data->image = $path;
        }
        $data->name = $request->name;
        $data->is_new = $request->new;
        $data->is_trending = $request->trending;
        $data->is_auto_update = $request->autoUpdate;
        $data->save();
        $request->session()->flash('update-success');
        return redirect(route('admin-category-list'));
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
