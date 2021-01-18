<?php

namespace App\Http\Controllers\reporter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\File;

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
        $data = blog::where([
            ['status', '=', '1'],
            ['user', '=', Auth::user()->id],
        ])->orderBy('id', 'desc')->paginate(5);
        $Alldata = blog::where([
            ['user', '=', Auth::user()->id],
        ])->orderBy('id', 'desc')->paginate(5);
        $view = 0;
        foreach ($Alldata as $item) {
            $view += $item['viewer'];
        }

        return view('reporter.index', ['data' => $data, 'view' => $view]);
    }

    public function index(Request $request) 
    {
        $search = '';
        $filter = '';
        $category = category::all();
        foreach ($category as $item) {
            $item->AutoUpdateFunction;
        }
        $data = blog::where([
                            ['user', '=', Auth::user()->id],
                            ['status', '=', '1']
                            ])
                            ->orderBy('id', 'desc')
                            ->paginate(50);
        if ($request->search) {
            $search = $request->search;
            $data = blog::where([
                                ['user', '=', Auth::user()->id],
                                ['title', 'LIKE', str_replace('$query$', $search, '%$query$%')],
                                ['status', '=', '1']
                                ])
                                ->orderBy('id', 'desc')
                                ->paginate(50);
        }
        if ($request->filter) {
            $filter = category::find($request->filter);
            $data = blog::where([
                                ['user', '=', Auth::user()->id],
                                ['category', '=', $filter['id']],
                                ['status', '=', '1']
                                ])
                                ->orderBy('id', 'desc')
                                ->paginate(50);
        }
        return view('reporter.list', [
            'data' => $data,
            'search' => $search,
            'filter' => $filter,
            'category' => $category,
        ]);
    }

    public function SelectCategory(Request $request) 
    {
        $data = category::orderBy('id', 'desc')->paginate(10);
        $search = '';
        if ($request->search) {
            $search = $request->search;
            $data = category::where('name', 'like', '%'.$search.'%')->orderBy('id', 'desc')->paginate(10);
        }
        $dataCount = count($data);
        return view('reporter.select-category', [
            'data' => $data,
            'dataCount' => $dataCount,
            'search' => $search,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $category = category::findOrFail($id);
        return view('reporter.add', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
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
        $newData->category = category::findOrFail($id)->id;
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
        $data = blog::where([
            ['id', '=', $id],
            ['status', '=', 1],
            ['user', '=', Auth::user()->id],
        ])
        ->get();
        $category = category::findOrFail($data[0]['category']);
        return view('reporter.edit', ['data' => $data, 'category' => $category]);
    }

    public function updateCategory(Request $request, $id)
    {
        $blog = blog::findOrFail($id);
        $category = category::orderBy('id', 'desc')->paginate(20);
        $search = '';
        $dataCount = '';
        if($request->search) {
            $search = $request->search;
            $category = category::where('name', 'like', '%'.$search.'%')->orderBy('id', 'desc')->paginate(20);
            $dataCount = count($category);
        }
        return view('reporter.update-category', 
            [
                'data' => $category,
                'blog' => $blog,
                'search' => $search,
                'dataCount' => $dataCount
            ]
        );
    }

    public function saveUpdateCategory(Request $request, $id)
    {
        $blog = blog::findOrFail($id);
        $blog['category'] = $request->category;
        $blog->save();
        $request->session()->flash('success-update');
        return redirect(route('reporter-list-post'));
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
            ['status', '=', 1],
            ['user', '=', Auth::user()->id],
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
            File::delete($data[0]->image);
            $date = date('Y-m-d');
            $place = str_replace('$date$', $date, 'public/images/post/$date$/');
            $name = $request->title.time().'.'.$request->file('image')->getClientOriginalExtension();
            // move image
            $request->file('image')->move(public_path($place), $name);
            $data[0]['image'] = $place.$name;

        }
        $data['0']->save();
        $request->session()->flash('success-update');
        return redirect(route('reporter-list-post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyConfirm($id) {
        $data = blog::where([
            ['id', '=', $id],
            ['status', '=', 1],
            ['user', '=', Auth::user()->id],
        ])
        ->get();
        if (count($data) == 0) {
            return abort(404);
        }
        return view('reporter.delete', ['data' => $data[0] ]);
    }

    public function destroy(Request $request, $id)
    {
        $data = blog::where([
            ['id', '=', $id],
            ['status', '=', 1],
            ['user', '=', Auth::user()->id],
        ])
        ->get();
        if (count($data) == 0) {
            return abort(404);
        }
        $data[0]['status'] = false;
        $data[0]->save();
        $request->session()->flash('delete');
        return redirect(route('reporter-list-post'));
    }
}
