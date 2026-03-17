@extends('layouts.backend')
@section('content')

<section>
    <!-- About Us-->
        <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('contents') }}" style="margin-left: 300px; position: absolute; margin-top: 150px; background-color: white; width: 380px; padding-left: 10px; height: 450px; ">
            @csrf
            <div style="padding-top: 10px; ">             
               
                        <label >Title </label> <br>
                        <input style="width: 350px;" type="text" name="content_title" class="form-control @error('content_title') is-invalid @enderror" value="{{ old('content_title') }}">
                        @error('content_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div style="padding-top: 10px;">        
                        <label for="exampleInputFile">Input Image</label>
                        <input type="file" name="content_image" >

                    </div>
                    <div style="padding-top: 20px;">
                        <label>Description </label> <br>
                        <textarea style="width: 350px; height: 200px;" name="content_description" class="form-control @error('content_description') is-invalid @enderror">{{ old('content_description') }}</textarea>
                        @error('content_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button style="margin-top: 10px;" type="submit" class="btn btn-success">Submit</button>
                </form>

                <!-- End of About Us-->
                 
                <!-- Our Mission-->
                <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('missions') }}">
                @csrf

                <div class="missionBox">
                        <div>
                            <label> Title </label> <br>
                            <input style="width: 350px;" type="text" name="mission_title" class="form-control @error('mission_title') is-invalid @enderror" value="{{ old('mission_title') }}">
                            @error('mission_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div style="padding-top: 10px;">
                            <label> Image </label> <br>
                            <input type="file" name="mission_image" >
                        </div>
                        <div style="padding-top: 20px;">
                            <label> Description </label> <br>
                            <textarea style="width: 350px; height: 200px;" name="mission_description" class="form-control @error('mission_description') is-invalid @enderror">{{ old('mission_description') }}</textarea>
                            @error('mission_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success"> Submit </button>
                   
                </div>
            </form>
    <!-- End of Our Mission-->


    <!-- Our Values-->                 
        
        <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('values') }}">
             @csrf
            <div class="valueBox1">
                    <div style="padding-left: 10px; padding-top: 10px;">
                        <label>Title</label>
                        <input style="width: 280px;" type="text" name="value_title" class="form-control @error('value_title') is-invalid @enderror" value="{{ old('value_title') }}" >
                        @error('value_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div style="padding-left: 10px;">
                        <label>Description</label>
                        <textarea style="height: 130px;  width: 280px;" name="value_description" class="form-control  @error('value_description') is-invalid @enderror"> {{ old('value_description') }} </textarea>
                        @error('value_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div> 
                <button style="margin-top: 10px; margin-left: 10px;" type="submit" class="btn btn-success"> Submit </button>
            </div>   
        </form> 

        <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('values') }}">
             @csrf
            <div class="valueBox2">
                    <div style="padding-left: 10px; padding-top: 10px;">
                        <label>Title</label>
                        <input style="width: 280px;" type="text" name="value_title" class="form-control @error('value_title') is-invalid @enderror" value="{{ old('value_title') }}" >
                        @error('value_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div style="padding-left: 10px;">
                        <label>Description</label>
                        <textarea style="height: 130px;  width: 280px;" name="value_description" class="form-control  @error('value_description') is-invalid @enderror"> {{ old('value_description') }} </textarea>
                        @error('value_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div> 
                <button style="margin-top: 10px; margin-left: 10px;" type="submit" class="btn btn-success"> Submit </button>
            </div>   
        </form>   

        <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('values') }}">
             @csrf
            <div class="valueBox3">
                    <div style="padding-left: 10px; padding-top: 10px;">
                        <label>Title</label>
                        <input style="width: 280px;" type="text" name="value_title" class="form-control @error('value_title') is-invalid @enderror" value="{{ old('value_title') }}" >
                        @error('value_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div style="padding-left: 10px;">
                        <label>Description</label>
                        <textarea style="height: 130px;  width: 280px;" name="value_description" class="form-control  @error('value_description') is-invalid @enderror"> {{ old('value_description') }} </textarea>
                        @error('value_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div> 
                <button style="margin-top: 10px; margin-left: 10px;" type="submit" class="btn btn-success"> Submit </button>
            </div>   
        </form>        
   
    <!-- End Of Our Values-->

    <!-- What to Expect-->

    <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('w_t_e_s') }}">
        @csrf
        <div class="wte1">
            <div>
                <label> Heading </label> <br>
                <input style="width: 230px;" type="text" name="wte_heading" class="form-control @error('wte_heading') is-invalid @enderror" value="{{ old('wte_heading') }}">
                @error('wte_heading')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div>
                <label> Description </label> <br>
                <textarea style="width: 230px; height: 150px;" name="wte_description" class="form-control @error('wte_description') is-invalid @enderror">{{ old('wte_description') }}</textarea>
                @error('wte_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"> Submit </button>
        </div>
        
    </form>

    <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('w_t_e_s') }}">
        @csrf
        <div class="wte2">
            <div>
                <label> Heading </label> <br>
                <input style="width: 230px;" type="text" name="wte_heading" class="form-control @error('wte_heading') is-invalid @enderror" value="{{ old('wte_heading') }}">
                @error('wte_heading')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div>
                <label> Description </label> <br>
                <textarea style="width: 230px; height: 150px;" name="wte_description" class="form-control @error('wte_description') is-invalid @enderror">{{ old('wte_description') }}</textarea>
                @error('wte_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"> Submit </button>
        </div>
        
    </form>

    <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('w_t_e_s') }}">
        @csrf
        <div class="wte3">
            <div>
                <label> Heading </label> <br>
                <input style="width: 230px;" type="text" name="wte_heading" class="form-control @error('wte_heading') is-invalid @enderror" value="{{ old('wte_heading') }}">
                @error('wte_heading')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div>
                <label> Description </label> <br>
                <textarea style="width: 230px; height: 150px;" name="wte_description" class="form-control @error('wte_description') is-invalid @enderror">{{ old('wte_description') }}</textarea>
                @error('wte_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"> Submit </button>
        </div>
        
    </form>

    <!-- End of What to Expect-->

    <!-- Contact Info-->

    <!-- Location-->
    <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('locations') }}">
        @csrf
        <div class="contact1">
            <div>
                <label> Heading </label> <br>
                <input style="width: 260px; height: 30px;" type="text" name="contact_heading" class="form-control @error('contact_heading') is-invalid @enderror" value="{{ old('contact_heading') }}">
                @error('contact_heading')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-top: 10px;">
                <label> Information </label> <br>
                <input style="width: 260px; height: 30px; " type="text" name="contact_information" class="form-control @error('contact_information') is-invalid @enderror" value="{{ old('contact_information') }}" >
                @error('contact_information')
                    <span class="inavlid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-top: 10px;"> 
                <label> Option </label> <br>
                <input style="width: 260px; height: 30px;" type="text" name="contact_option" class="form-control @error('contact_option') is-invalid @enderror" value="{{ old('contact_option') }}" >
                @error('contact_option')
                    <span class="invalid-feeback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button style="margin-top: 10px;" type="submit" class="btn btn-success"> Submit </button>
        </div>
    </form>
<!-- End of Location-->

<!-- Email-->
    <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('contacts') }}">
        @csrf
        <div class="contact2">
            <div>
                <label> Heading </label> <br>
                <input style="width: 260px; height: 30px;" type="text" name="contact_heading" class="form-control @error('contact_heading') is-invalid @enderror" value="{{ old('contact_heading') }}">
                @error('contact_heading')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-top: 10px;">
                <label> Email 1 </label> <br>
                <input style="width: 260px; height: 30px; " type="email" name="contact_email1" class="form-control @error('contact_email1') is-invalid @enderror" value="{{ old('contact_email1') }}" >
                @error('contact_email1')
                    <span class="inavlid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-top: 10px;"> 
                <label> Email 2 </label> <br>
                <input style="width: 260px; height: 30px;" type="email" name="contact_email2" class="form-control @error('contact_email2') is-invalid @enderror" value="{{ old('contact_email2') }}" >
                @error('contact_email2')
                    <span class="invalid-feeback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button style="margin-top: 10px;" type="submit" class="btn btn-success"> Submit </button>
        </div>
    </form>
<!-- End of Email-->

<!-- Number-->
    <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('calls') }}">
        @csrf
        <div class="contact3">
            <div>
                <label> Heading </label> <br>
                <input style="width: 260px; height: 30px;" type="text" name="contact_heading" class="form-control @error('contact_heading') is-invalid @enderror" value="{{ old('contact_heading') }}">
                @error('contact_heading')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-top: 10px;">
                <label> Number 1 </label> <br>
                <input style="width: 260px; height: 30px; " type="number" name="contact_number1" class="form-control @error('contact_number1') is-invalid @enderror" value="{{ old('contact_number1') }}" >
                @error('contact_number1')
                    <span class="inavlid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-top: 10px;"> 
                <label> Number 2 </label> <br>
                <input style="width: 260px; height: 30px;" type="number" name="contact_number2" class="form-control @error('contact_number2') is-invalid @enderror" value="{{ old('contact_number2') }}" >
                @error('contact_number2')
                    <span class="invalid-feeback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button style="margin-top: 10px;" type="submit" class="btn btn-success"> Submit </button>
        </div>
    </form>
<!-- End of Number-->

    <!-- End of Contact Info-->


    <!-- Contact Message-->


    <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('messages') }}">
        @csrf
        <div class="" style="background-color: cadetblue; margin-top: 1200px; margin-left: 300px; width: 300px; height: 320px; padding-top: 10px; padding-left: 10px;">
            <div>
                <label>Name</label> <br>
                <input style="width: 260px;" type="text" name="person_name" class="form-control @error('person_name') is-invalid @enderror" value="{{ old('person_name') }}">
                @error('person_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-top: 10px;">
                <label>Email</label> <br>
                <input style="width:260px;" type="email" name="person_email" class="form-control @error('person_email') is-invalid @enderror" value="{{ old('person_email') }}">
                @error('person_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div style="margin-top: 10px;">
                <label>Message</label>
                <textarea style="width: 260px; height: 100px;" name="person_message" class="form-control @error('person_message') is-invalid @enderror">{{ old('person_message') }}</textarea>
                @error('person_message')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                @enderror
            </div>
            <button style="margin-top: 10px;" type="submit" class="btn btn-success"> Submit </button>
        </div>
    </form>

    <!-- End of Contact Message--> 

    <!-- Footer-->

    <form class="form-control" enctype="multipart/form-data" method="POST" action="{{ route('footers') }}">
        @csrf
        <div style="margin-top: 1500px; margin-left: 300px; position: absolute; background-color: cyan; width: 700px; height: 500px;">
            <table>
                <tr>
                    <td>
                        <div style="margin-top: 10px; margin-left: 10px;">
                            <label> Title </label>
                            <input style="width: 200px;" type="text" name="footer_title" class="form-control @error('footer_title') is-invalid @enderror" value={{ old('footer_title') }}>
                            @error('footer_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </td>

                    <td>
                        <div style="margin-top: 10px; margin-left: -6px;">
                            <label> Title </label>
                            <input style="width: 200px;" type="text" name="footer_title" class="form-control @error('footer_title') is-invalid @enderror" value={{ old('footer_title') }}>
                            @error('footer_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </td>

                    <td>
                        <div style="margin-top: 10px; margin-left: -20px;">
                            <label> Title </label>
                            <input style="width: 200px;" type="text" name="footer_title" class="form-control @error('footer_title') is-invalid @enderror" value={{ old('footer_title') }}>
                            @error('footer_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div style="margin-top: 10px; margin-left: 10px;">
                            <label> Logo </label>
                            <input type="file" name="footer_image">
                        </div>
                    </td>

                    <td>
                        <div style="margin-top: 10px; margin-left: 10px;">
                            <label> Image </label>
                            <input type="file" name="footer_image">
                        </div>
                    </td>
                </tr>
                <tr>                   
                        <div style="margin-top: 10px; margin-left: 10px;">
                            <label> Description </label>
                            <textarea style="width: 660px; height: 120px;" name="footer_description" class="form-control @error('footer_description') is-invalid @enderror"></textarea>
                            @error('footer_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>   
                </tr>
                <tr>
                    <td>
                        <div style="margin-top: 10px; margin-left: 10px;">
                            <label> Address </label>
                            <textarea style="width: 160px; height: 120px;" name="footer_address" class="form-control @error('footer_address') is-invalid @enderror">{{ old('footer_address') }}</textarea>
                            @error('footer_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </td>

                    <td>
                        <div style="margin-top: 10px; margin-left: 10px;">
                            <label> Phone </label>
                            <textarea style="width: 160px; height: 120px;" name="footer_phone" class="form-control @error('footer_phone') is-invalid @enderror">{{ old('footer_phone') }}</textarea>
                            @error('footer_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </td>

                    <td>
                        <div style="margin-top: 10px; margin-left: 10px;"> 
                            <label> Email </label>
                            <textarea style="width: 160px; height: 120px;" name="footer_email" class="form-control @error('footer_email') is-invalid @enderror">{{ old('footer_email') }}</textarea>
                            @error('footer_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </td>
                </tr>
            </table>

            <button style="margin-top: 15px; margin-left: 12px;" type="submit" class="btn btn-success"> Submit </button>
        </div>
    </form>


    <!-- End Of Footer--> 
</section>
@endsection