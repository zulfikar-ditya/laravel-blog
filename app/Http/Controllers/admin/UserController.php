<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $data = User::paginate(50);
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
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|unique:users|max:255',
                'phonenumber' => 'min:12|max:12',
            ]);
            if ($request->password != $request->Confirmpassword) {
                $request->session()->flash('password-not-match');
                return redirect(route('admin-user-add'));
            }
            $newData = new User;
            $newData->name = $request->name;
            $newData->email = $request->email;
            $newData->address = $request->address;
            $newData->phonenumber = $request->phonenumber;
            $newData->password = bcrypt($request->password);
            $request->session()->flash('add-success');
            $newData->save();
            if ($request->role) {
                if($request->role == 1) {
                    $newData->assignRole('superuser');
                } 
                else if($request->role == 2) {
                    $newData->assignRole('staff');
                }
                else if($request->role == 3) {
                    $newData->assignRole('reporter');
                } 
                else if($request->role == 4) {
                    $newData->assignRole('user');
                }
            }
            if ($request->add) {
                return redirect(route('admin-user-list'));
            } else{
                return redirect(route('admin-user-add'));
            }
        }
        return view('admin.user.add');
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
        $data = User::findOrFail($id);
        return view('admin.user.edit', ['data' => $data]);
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
        $data = User::findOrFail($id);
        if($request->save) {
            $request->validate([
                'email' => 'required|max:255',
                'phonenumber' => 'min:12|max:12',
            ]);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->phonenumber = $request->phonenumber;
            if (count($data->getRoleNames()) != 0) {
                $data->removeRole($data->getRoleNames()[0]);
            }
            if ($request->role) {
                if($request->role == 1) {
                    $data->assignRole('superuser');
                } 
                else if($request->role == 2) {
                    $data->assignRole('staff');
                }
                else if($request->role == 3) {
                    $data->assignRole('reporter');
                } 
                else if($request->role == 4) {
                    $data->assignRole('user');
                }
            }
            $request->session()->flash('update-success');
        }
        else if ($request->savePassword) {
            if (Auth::user()->hasRole('staff')) {
                if(Hash::check($request->PrevPass, $data['password'])) {
                    if ($request->newPass != $request->confirmPass) {
                        $request->session()->flash('password-not-match');
                        return redirect(route('admin-user-edit', ['id' => $data['id']]));
                    } else {
                        $data->password = bcrypt($request->newPass);
                        $request->session()->flash('update-password-success');
                    }
                } 
                else {
                    $request->session()->flash('password-wrong');
                    return redirect(route('admin-user-edit', ['id' => $data['id']]));
                }
            } else {
                if ($request->newPass != $request->confirmPass) {
                    $request->session()->flash('password-not-match');
                    return redirect(route('admin-user-edit', ['id' => $data['id']]));
                } else {
                    $data->password = bcrypt($request->newPass);
                    $request->session()->flash('update-password-success');
                }
            }
        }
        $data->save();
        return redirect(route('admin-user-list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyConfirm($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.delete', ['data' => $data]);
    }
    
    public function destroy(Request $request, $id)
    {   
        $data = User::findOrFail($id);
        $data->delete();
        $request->session()->flash('delete-success');
        return redirect(route('admin-user-list'));
    }
}
