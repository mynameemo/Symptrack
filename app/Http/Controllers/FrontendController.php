<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Frontend;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mission;
use App\Models\Value;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    //

   
    public function HomePage(){
        $abouts=About::latest()->get();
        $missions=Mission::latest()->get();
        return view('FrontendNav.HomePage', compact('abouts', 'missions'));
    }
    public function welcome(){
        return view('welcome');
    }

    public function dashboard(){
        return view('dashboard');
    }
    public function test(){
        return view('layouts.test');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function FAQs(){
        return view('pages.FAQs');
    }
    public function add_symptom(){
        return view('pages.add_symptom');
    }

    public function personalInfo(){
        return view('pages.personalInfo');
    }
    public function symptom_history(){
        return view('pages.symptom_history');
    }

    public function myProfile(){
        return view('users.myProfile');
    }

    public function updatePersonalInformation(Request $request){
      $request->validate([
        'name' => 'required|string|max:255',
        'email' =>'required' ,
        'phonenumber' => 'nullable|string|max:10',
        'gender' => 'required|string',
        'address' => 'nullable|string|max:255',
      ]);

        
     $update=User::where('id', $request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'address'=>$request->address,
        ]);   

        
        
    }

    public function updatePassword(Request $request){


        $user=Auth::user(); 
            if(Hash::check($request->old_password, $user->password)){
            $user->password=Hash::make($request->new_password);
            $user->update();
                
                return redirect()->back();
            }else{
                
                return redirect()->back();
            }       
        }

public function updateProfileImage(Request $request){
    if($request->hasFile('profileImage')){
            $file=$request->file('profileImage');
            $extension=$file->getClientOriginalExtension();
            $fileName=time().'.'.$extension;
            $file->move(public_path('backend/profile'), $fileName);

            $user=Auth::user();
            $user->profileImage=$fileName;
            $user->update();
    }
    
}

}
