@extends('layouts.backend')
@section('content')



    
    
       <!-- SHOW CONTENTS-->
        <!-- About Us-->
           
        @foreach ($abouts as $about )
          <div class="box" style="position: absolute; margin-top: 200px; margin-left: 270px; width: 400px; height: max-content;">
            
            
            
            <div class="box-body pad">
                <h1 style="font-size: 20px; margin-top: -10px;"> <b>OUR STORY</b></h1>
               
                
              
                <div>
                    <label>Title</label> <br>
                    <input type="text" value="{{ $about->about_title }}" style="width: 350px;">
                </div>
                <div>
                    <label> Image </label>
                    <!--img src="{{ asset('backend/content/' . $content->content_image) }}" alt="Content Image" style="width: 80px; height: 80px;"-->
                    <input type="file" value="{{ $about->about_image }}">
                    <label><img src="{{ asset('backend/content/' . $about->about_image) }}"  style="width: 80px; height: 80px;"></label>
                </div>
                <div>
                    <label>Description</label> <br>
                   <textarea style="height: 150px; width: 350px;">{{ $about->about_description }}</textarea> 
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
              
            </div>
         @endforeach 

        <!-- End of About Us-->
   
        <!-- Our Mission-->
         @foreach ($missions as $mission)
          <div class="display-box" style=" margin-top: -420px; margin-left: 500px;">
            
            <div class="box-body pad">
                <h1 style="font-size: 20px; margin-top: -10px;"> <b>OUR MISSION</b></h1> 
                    <label style="width: 100px;">Title</label> <br>
                    <input class="display-box" type="text" value="{{ $mission->mission_title }}" style="width: 350px;">
                </div>
                <div style="padding-left: 10px; padding-top: 20px;">
                    <label> Image </label>
                    <!--img src="{{ asset('backend/content/' . $content->content_image) }}" alt="Content Image" style="width: 80px; height: 80px;"-->
                    <input type="file" value="{{ $mission->mission_image }}">
                    <label><img src="{{ asset('backend/content/' . $mission->mission_image) }}" alt="Content Image" style="width: 80px; height: 80px;"></label>
                </div>
                <div style="padding-left: 10px;">
                    <label>Description</label> <br>
                   <textarea class="area" style="">{{ $mission->mission_description }}</textarea> 
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
               
            </div>
         @endforeach

        <!--End Of Our Mission-->

        <!-- Our Values-->
        @foreach ($values as $value)
          <div class="display-box" style=" margin-top: 150px; margin-left: 100px;">
            
            <div class="box-body pad">
                <h1 style="font-size: 20px; margin-top: -10px;"> <b>OUR VALUES</b></h1> 
                    <label>Title</label> <br>
                    <input type="text" value="{{ $value->value_title }}" style="width: 350px;">
            </div>

                <div style="padding-left: 10px;">
                    <label>Description</label> <br>
                   <textarea style="height: 150px; width: 350px;">{{ $value->value_description }}</textarea> 
                </div>

                <div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
               
            </div>
         @endforeach

        <!--End Of Our Values-->

        
        <!-- What To Expect-->
         <!--div>
            <h1 style="font-size: 20px; margin-top: -10px;"> <b>WHAT TO EXPECT</b></h1> 
         </div-->
        @foreach ($w_t_e_s as $wte)
          <div class="display-box" style="margin-top: 150px; margin-left: 600px;">
            
            <div class="box-body pad">
                    <label>Title</label> <br>
                    <input type="text" value="{{ $wte->wte_heading }}" style="width: 350px;">
            </div>

                <div style="padding-left: 10px;">
                    <label>Description</label> <br>
                   <textarea style="height: 150px; width: 350px;">{{ $wte->wte_description }}</textarea> 
                </div>

                <div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
               
            </div>
         @endforeach

        <!--End Of What To Expect-->
        
        <!-- END OF SHOW CONTENTS-->

        <!-- UPDATE CONTENTS-->
         
@endsection