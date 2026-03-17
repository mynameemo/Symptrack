<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Mission;
use App\Models\Value;
use App\Models\WTE;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Call;
use App\Models\Message;
use App\Models\Footer;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showContents()
    {
        $abouts = About::all();
        $missions = Mission::all();
        $values = Value::all();
        $w_t_e_s = WTE::all();
        return view('FrontendNav.displayContents', compact('abouts', 'missions', 'values', 'w_t_e_s'));
    }

   

    public function abouts(Request $request){
        $request->validate([
            'about_title' => 'required|string|max:255',
            'about_description' => 'nullable|string',
            'about_image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
        $aboutImage = null;

        if($request->hasFile('about_image')){
            $file=$request->file('about_image');
            $extension=$file->getClientOriginalExtension();
            $aboutImage=time().'.'.$extension;
            $file->move(public_path('backend/content'), $aboutImage);

            $create=About::create([
                'about_image' =>$aboutImage,
                'about_title' =>$request->about_title,
                'about_description' =>$request->about_description,
            ]);


        
            return redirect()->back()->with('success', 'About section created successfully.');
            }
    }


    public function missions(Request $request){
        $request->validate([
            'mission_title' => 'required|string|max:255',
            'mission_description' => 'nullable|string',
            'mission_image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
        $missionImage = null;

        if($request->hasFile('mission_image')){
            $file=$request->file('mission_image');
            $extension=$file->getClientOriginalExtension();
            $missionImage=time().'.'.$extension;
            $file->move(public_path('backend/content'), $missionImage);

            $create=Mission::create([
                'mission_image' =>$missionImage,
                'mission_title' =>$request->mission_title,
                'mission_description' =>$request->mission_description,
            ]);

            

        
        }
    }

    public function values(Request $request){
        $request->validate([
            'value_title' => 'required|string|max:255',
            'value_description' => 'required|string',
        ]);

            $create=Value::create([
                'value_title' =>$request->value_title,
                'value_description' =>$request->value_description,
            ]);

           

        
        }

    public function w_t_e_s(Request $request){
        $request->validate([
            'wte_heading' => 'required|string|max:255',
            'wte_description' => 'nullable|string',
        ]);

            $create=WTE::create([
                'wte_heading' =>$request->wte_heading,
                'wte_description' =>$request->wte_description,
            ]);

            

        
        }

    public function locations(Request $request){
        $request->validate([
            'contact_heading' => 'required|string|max:255',
            'contact_information' => 'required',
            'contact_option' => 'nullable|string',
        ]);

            $create=Location::create([
                'contact_heading' =>$request->contact_heading,
                'contact_information' =>$request->contact_information,
                'contact_option' =>$request->contact_option,
            ]);

            
        
        }
    public function contacts(Request $request){
        $request->validate([
            'contact_email1' => 'required|string|email|max:255|unique:contacts,contact_email1',
            'contact_email2' => 'nullable|string|email|max:255|unique:contacts,contact_email2',
        ]);

            $create=Contact::create([
                'contact_email1' =>$request->contact_email1,
                'contact_email2' =>$request->contact_email2,
            ]);

        
        }
    public function calls(Request $request){
        $request->validate([
            'contact_number1' => 'required|string|digits:10|unique:calls,contact_number1',
            'contact_number2' => 'nullable|string|digits:10|unique:calls,contact_number2',
        ]);

            $create=Call::create([
                'contact_number1' =>$request->contact_number1,
                'contact_number2' =>$request->contact_number2,
            ]);

            

        
        }

        public function messages(Request $request){
        $request->validate([
            'person_name' => 'required|string|max:255',
            'person_email' => 'nullable|string|email|max:255|unique:messages,person_email',
            'person_message' => 'nullable|string|max:255',
        ]);

            $create=Message::create([
                'person_name' =>$request->person_name,
                'person_email' =>$request->person_email,
                'person_message' =>$request->person_message,
            ]);

           
        
        }

        public function footers(Request $request){
        $request->validate([
            'footer_title' => 'required|string|max:255',
            'footer_description' => 'nullable|string|max:255',
            'footer_email' => 'nullable|string|email|max:255|unique:messages,person_email',
            'footer_phone' => 'nullable|string|max:255',
            'footer_address' => 'nullable|string|max:255',  
            'footer_image' => 'nullable|image|mimes:jpg,jpeg,png',

        ]);

            $create=Footer::create([
                'footer_title' =>$request->footer_title,
                'footer_description' =>$request->footer_description,
                'footer_email' =>$request->footer_email,
                'footer_phone' =>$request->footer_phone,
                'footer_address' =>$request->footer_address,
                'footer_image' =>$request->footer_image,
            ]);

           
        
        }
}
