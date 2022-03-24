<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAllAdmin()
    {

        $admins = User::all();

        return view('lisadmin',['admins'=>$admins]);
    }
    public function deleteAdmin($id){
        if ($id != 1198){
            User::where('id', $id)
            ->delete();
            return redirect()->back();
        }
        else {
            return redirect()->back();
        }



    }
}
