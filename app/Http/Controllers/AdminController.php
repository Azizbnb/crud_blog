<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        return view('roles.admin')->with(['users'=> $users]);
    }

    public function edit($id){
        $user=User::find($id);
        $roles=Role::all();
        return view('roles.admin.edit.index')->with(["user" => $user, "roles" => $roles])->with('flash_message', 'user modifié!');
    }
    public function update(Request $request, $id){
        $users=User::all();
        $user=User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('admin.index')->with(["users"=>$users])->with('flash_message', 'user mis à jour!');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('flash_message', 'user supprimé!');

    }
}
