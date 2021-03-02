<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Alert;

class UserController extends Controller
{
    function show(){
        $data = User::all();
        return view('users', ['users' => $data]);
    }

    function delete($id){
        $data = User::find($id);
        $data->delete();
        Alert::success('Success', 'User Deleted Succesfully');
        return redirect()->view('users');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        Alert::success('Success', 'User Deleted Succesfully');
        return redirect()->back();
    }
}
