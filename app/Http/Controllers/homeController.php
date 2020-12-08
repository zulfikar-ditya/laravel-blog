<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\blog;
use App\Models\category;

class homeController extends Controller
{
    public function index(Request $request) 
    {
        $search = '';
        $blog = blog::where(
            'status', '=', true,
        )->orderBy('id', 'desc')->paginate(20);
        if ($request->search) {
            $search = $request->search;
            $blog = blog::where([
                ['title', 'like', '%'.$search.'%'],
                ['status', '=', true],
            ])->orderBy('id', 'desc')->paginate(20);
        }
        return view('home.index', [
            'blog' => $blog,
            'search' => $search
        ]);
    }

    public function PostDetail($id, Request $request) 
    {
        $data = blog::findOrFail($id);
        if ($data['status'] == false) {
            return abort(404);
        }
        $relatedPost = blog::where([
            ['status', '=', true],
            ['category', '=', $data['category']]
        ])->orderBy('id', 'desc')->paginate(7);
        return view('home.detail-post', ['data' => $data, 'relatedPost' => $relatedPost]);
    }

    public function CategoryList(Request $request) 
    {
        $data = category::orderBy('id', 'desc')->paginate(10);
        $search = '';        
        if ($request->search) {
            $search = $request->search;
            $data = category::where('name', 'like', '%'.$search.'%')->orderBy('id', 'desc')->paginate(10);
        }
        return view('home.category', ['data' => $data, 'search' => $search]);
    }

    public function PostByCategory($id) 
    {
        $category = category::findOrFail($id);
        $blog = blog::where([
            ['status', '=', true],
            ['category', '=', $category['id']]
        ])->orderBy('id', 'desc')->paginate(20);
        return view('home.post-by-category', ['category' => $category, 'blog' => $blog]);
    }
}
