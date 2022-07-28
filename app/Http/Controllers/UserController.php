<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function edit(){
       $data=User::find(Auth::id());
       return view('usereditprofile',compact('data'));
    }

    function update(Request $req)
    {
        $obj=User::find(AUth::id());

        $obj->name=$req->name;
        $obj->email=$req->email;
        $obj->address=$req->address;
        $obj->phone=$req->phone;

        if($obj->save()){
            return redirect("/");
        }
        else{
            echo 'error while saving data';
        }

    }
}
