<?php

namespace App\Http\Controllers;

use App\Http\Requests\requestprofile;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profilecontroller extends Controller
{
    public function index(){
        return view('profile.index');
    }

    public function contact(){
        return view('contact');
    }

    public function profile($user_name){
      $profile =  Profile::where("profile_name" , $user_name)->with('user')->first();
     return view("single_profile" , compact('profile'));
    }

    public function profiles(){

        $profiles = User::find(auth()->id())->profile;
        return view("profiles" , compact('profiles'));
    }

    public function store(requestprofile $request){


        // $path = $request->file('profile_pic')->store('profile_image');
        $path = time().".".$request->profile_pic->extension();
        $request->profile_pic->move(public_path("profile_image") , $path);

        $profile = new Profile();
        $profile->phone = $request->phone;
        $profile->profile_name = $request->profile_name;
        $profile->fb = $request->fb;
        $profile->linkedin = $request->linkedin;
        $profile->email = $request->email;
        $profile->profile_pic = $path;
        $profile->github = $request->github;
        $profile->user_id = auth()->user()->id;
        $profile->save();

        return redirect('index');
    }

    public function edite(Profile $profile){
        // $profile =  profile::where("id" , $id)->first();

        return view('profile.update' , compact('profile'));

    }

    public function update(requestprofile $request){


        /*...image_path...*/
        $path = time().".".$request->profile_pic->extension();
        $request->profile_pic->move(public_path("profile_image"),$path);
        /*.......*/

        Profile::where("id" ,"=", $request->id)->update([
            "phone" => $request->phone,
            "profile_name" => $request->profile_name,
            "fb" => $request->fb,
            "linkedin" => $request->linkedin,
            "email" => $request->email,
            "profile_pic" => $path,
            "github" => $request->github,
            "user_id" => auth()->user()->id,
        ]);

        return redirect("profiles");
    }

    public function delete($id){
     DB::table("profile")->delete($id);
     return redirect("profiles");
    }

}
