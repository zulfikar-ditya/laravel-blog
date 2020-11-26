<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchValue = '';
        $filter = '';
        if($request->search) {
            $searchValue = $request->search;
            $query = $request->search;
            $search = str_replace('$query$', $query, '%$query$%');
            $data = User::where('name', 'like', $search)->paginate(50);
        } else {
             $data = DB::table('users')->paginate(50);
        }
        if($request->filter) {
            if($request->filter == 1) {
                $data = User::role('superuser')->paginate(50);
                $filter = 'superuser';
            } 
            elseif($request->filter == 2) {
                $data = User::role('staff')->paginate(50);
                $filter = 'staff';
            } 
            elseif($request->filter == 3) {
                $data = User::role('reporter')->paginate(50);
                $filter = 'reporter';
            } 
            elseif($request->filter == 4) {
                $data = User::role('user')->paginate(50);
                $filter = 'user';
            }
        } 
        return view('admin.user.list', ['data' => $data, 
                                        'searchValue' => $searchValue, 
                                        'filter' => $filter
                                        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
