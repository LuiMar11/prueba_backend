<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.index', compact('users','roles'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = request()->except('_token');
        User::insert($user);
        return redirect(route('users.index'));
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('users.edit', compact('user','roles'));
    }

    public function update($id)
    {
        $datos = request()->except('_token', '_method');
        User::where('id', '=', $id)->update($datos);
        return redirect(route('users.index'));
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect(route('users.index'));
    }
}
