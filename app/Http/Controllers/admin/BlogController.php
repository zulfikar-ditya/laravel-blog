<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\DB;

use App\Models\blog;
use App\Models\category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = blog::orderBy('id', 'desc')->paginate(50);
        $category = category::all();
        $categoryFilter = '';
        $search = '';
        $filter = '';
        $filterStatusData = [
            'StatusTrue'=>[
                'status' => 'Status True',
                'query' => blog::where('status', '=', 1)->orderBy('id', 'desc')->paginate(50)
            ],
            'StatusFalse'=> [
                'status' => 'Status False',
                'query' => blog::where('status', '=', 0)->orderBy('id', 'desc')->paginate(50)
            ],
        ];
        if ($request->search) {
            $search = $request->search;
            $data = blog::where('title', 'like', '%'.$search.'%')->orderBy('id', 'desc')->paginate(50);
        }
        if ($request->filterStatus) {
            $data = $filterStatusData[$request->filterStatus]['query'];
            $filter = $filterStatusData[$request->filterStatus]['status'];
        }
        if ($request->filterCategory) {
            $categoryFilter = category::findOrFail($request->filterCategory);
            $data = blog::where('category', '=', 1)->orderBy('id', 'desc')->paginate(50);
        }
        return view('admin.blog.list', ['data' => $data, 
                                        'category' => $category,
                                        'categoryFilter' => $categoryFilter,
                                        'filter' => $filter, 
                                        'search' => $search,
        ]);
    }

    public function MyPost(Request $request) {
        $data = blog::where('user', '=', Auth::user()->id)->paginate(50);
        $category = category::all();
        $filterStatusData = [
            'StatusTrue'=>[
                'status' => 'Status True',
                'query' => blog::where([
                    ['status', '=', 1],
                    ['user', '=', Auth::user()->id],
                ])->paginate(50)
            ],
            'StatusFalse'=> [
                'status' => 'Status False',
                'query' => blog::where([
                    ['status', '=', 0],
                    ['user', '=', Auth::user()->id],
                ])->paginate(50)
            ],
        ];
        $search = '';
        $filter = '';
        $categoryFilter = '';
        if($request->search) {
            $search = $request->search;
            $data = blog::where([
                ['user', '=', Auth::user()->id],
                ['title', 'like', '%'.$search.'%']
                ])->paginate(50);
        }
        if ($request->filterStatus) {
            $data = $filterStatusData[$request->filterStatus]['query'];
            $filter = $filterStatusData[$request->filterStatus]['status'];
        }
        if ($request->filterCategory) {
            $categoryFilter = category::findOrFail($request->filterCategory);
            $data = blog::where('category', '=', 1)->paginate(50);
        }
        return view('admin.blog.my-post', [
            'data' => $data,
            'category' => $category,
            'search' => $search,
            'filter' => $filter,
            'categoryFilter' => $categoryFilter
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        return view('admin.blog.add', ['category' => $category]);
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
        return redirect(route('admin-blog-list'));
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
        $data = blog::where([
            ['id', '=', $id],
        ])
        ->get();
        if (count($data) == 0) {
            return abort(404);
        }
        $category = category::all();
        return view('admin.blog.edit', ['data' => $data, 'category' => $category]);
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
        $request->validate([
            'title' => 'max:100',
            'image_source' => 'max:50',
        ]);
        $data = blog::where([
            ['id', '=', $id],
        ])
        ->get();
        if (count($data) == 0) {
            return abort(404);
        }
        $data[0]['title'] = $request->title;
        $data[0]['image_source'] = $request->image_source;
        $data[0]['category'] = $request->category;
        $data[0]['content'] = $request->content;
        if($request->hasFile('image') != null) {
            $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,',
            ]);
            $date = date('Y-m-d');
            $place = str_replace('$date$', $date, 'public/images/post/$date$/');
            $name = $request->title.time().'.'.$request->file('image')->getClientOriginalExtension();
            // move image
            $request->file('image')->move(public_path($place), $name);
            $data[0]['image']->image = $place.$name;

        }
        $data['0']->save();
        $request->session()->flash('success-update');
        return redirect(route('admin-blog-list'));
    }
    
    public function ConfirmHidePost($id) 
    {
        $data = blog::where([
            ['id', '=', $id],
            ['status', '=', 1],
        ])->get();
        if (count($data) == null ) {
            return abort(404);
        }
        return view('admin.blog.confirm-hide', ['data' => $data[0]]);
    }

    public function HidePost($id, Request $request) 
    {
        $data = blog::where([
            ['id', '=', $id],
            ['status', '=', true],
        ])->get();
        if (count($data) == null ) {
            return abort(404);
        }
        $data[0]['status'] = false;
        $data[0]->save();
        $request->session()->flash('hide-success');
        return redirect(route('admin-blog-list'));
    }

    public function ComfirmUnHidePost($id) 
    {
        $data = blog::where([
            ['id', '=', $id],
            ['status', '=', false],
        ])->get();
        if (count($data) == null ) {
            return abort(404);
        }
        return view('admin.blog.confirm-un-hide', ['data' => $data[0]]);
    }

    public function  UnHidePost($id, Request $request) 
    {
        $data = blog::where([
            ['id', '=', $id],
            ['status', '=', false],
        ])->get();
        if (count($data) == null ) {
            return abort(404);
        }
        $data[0]['status'] = true;
        $data[0]->save();
        $request->session()->flash('un-hide-success');
        return redirect(route('admin-blog-list'));
    }

    public function ConfirmDestroy($id) 
    {
        $data = blog::findOrFail($id);
        return view('admin.blog.delete-confirm', ['data' => $data]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $data = blog::findOrFail($id);
        $data->delete();
        $request->session()->flash('delete');
        return redirect(route('admin-blog-list'));
    }
}
