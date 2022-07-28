<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    function myads(){
        $data=DB::table("ads")->where('user_id',Auth::id())->get();

        return view('Ads.myads',compact('data'));

    }

    function index(){   
        $data=DB::table("ads")->get();
        return view("Ads.all_ads",compact('data'));
    }

    function index1(){
           
        $data=DB::table("ads")->where("time_start",null)->get();
        return view("Ads.add_ads1",compact('data'));
    }

    function create(){
        return view("Ads.ads_form");
    }
    function store(Request $req){
        $img=time().".".$req->file("image")->getClientOriginalExtension();
        // dd($img);
        $req->file("image")->move('ads',$img);
            $obj=new Ad();
        $obj->title=$req->title;
        $obj->description=$req->description;
        $obj->address=$req->address;
        $obj->city=$req->city;
        $obj->date_start=$req->datestart;
        $obj->date_end=$req->dateend;
        $obj->time_start=$req->timestart;
        $obj->time_end=$req->timeend;
        $obj->image=$img;
        $obj->user_id=Auth::id();
        if ($obj->save()){
            return redirect("/");
        }
        else{
            echo "error";
        }
    }

    function create1(){
        return view("Ads.ads_form1");
    }
    public function store1(Request $req){
        $obj=new Ad();
        $old_image=$obj->image;

        $obj->title=$req->title;
        $obj->description=$req->description;
        $obj->address=$req->address;
        $obj->city=$req->city;
        $obj->user_id=Auth::id();
        if ($obj->save()){
            return redirect("/");
        }
        else{
            echo "error";
        }
    }
    function update1($id){
       $data=Ad::find($id);
       return view('Ads.update1',compact('data'));
    }  
    
    function update2($id,Request $req){
        // dd($req->all());
        $obj=Ad::find($id);
        $test=$req->input('image',null);
        if($test==null){
        $obj->title=$req->title;
        $obj->description=$req->description;
        $obj->address=$req->address;
        $obj->city=$req->city;
        $obj->date_start=$req->datestart;
        $obj->date_end=$req->dateend;
        $obj->time_start=$req->timestart;
        $obj->time_end=$req->timeend;
        
        if($obj->save()){

            return redirect("/");
        }

        else{
            echo "error while updating";
        }
    }
    else{
        $img=time().".".$req->file("image")->getClientOriginalExtension();
        // dd($img);
        $req->file("image")->move('ads',$img);
        $obj->title=$req->title;
        $obj->description=$req->description;
        $obj->address=$req->address;
        $obj->city=$req->city;
        $obj->date_start=$req->datestart;
        $obj->date_end=$req->dateend;
        $obj->time_start=$req->timestart;
        $obj->time_end=$req->timeend;
        $obj->image=$img;
        if($obj->save()){
            if(File::exists(public_path("ads/".$old_image))){
                File::delete(public_path("ads/".$old_image));
            return redirect("/");

            }
                else{
                    echo 'file doest not exists';
                }
        }

        else{
            echo "error while updating";
        }
    }


}
    

    function deleteadd($id){
      $obj=Ad::find($id);
      $old_image=$obj->image;

      if($obj->delete()){

           if(File::exists(public_path("ads/".$old_image))){
                File::delete(public_path("ads/".$old_image));
                    return redirect("/");

            }
                else{
                    echo 'file doest not exists';
                }
      }
      else{
          echo 'error while deleting';
      }
    }



    function about(){
        echo 'asdasdasd';
    }
    function contact(){
        echo 'asdasdas';
    }
}
