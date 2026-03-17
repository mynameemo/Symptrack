@extends('layouts.backend')
@section('content')

<section>

    <div style="margin-top: 200px; margin-left: 350px; background-color: brown;">
       <h1 style="font-size: 20px;" >Frontend Content Management</h1> 
    </div>

    <!-- About Us-->
    <form class="neon-card aboutForm" enctype="multipart/form-data" method="POST" action="{{ route('abouts') }}">
        @csrf
        <h4 class="form-title">About Us</h4>

        <div>
            <label>Title</label>
            <input type="text" name="about_title" class="form-control neon-input @error('about_title') is-invalid @enderror" value="{{ old('about_title') }}">
            @error('about_title')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div>
            <label class="mt-2">Input Image</label>
            <input type="file" name="about_image" class="form-control-file neon-file">
        </div>

        <div>
            <label class="mt-3">Description</label>
            <textarea name="about_description" class="form-control neon-input @error('about_description') is-invalid @enderror" rows="6">{{ old('about_description') }}</textarea>
            @error('about_description')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <button type="submit" class="btn neon-btn mt-3">Submit</button>
    </form>
    <!-- End About Us -->


    <!-- Our Mission -->
    <form class="neon-card missionBox" enctype="multipart/form-data" method="POST" action="{{ route('missions') }}">
        @csrf
        <h4 class="form-title">Our Mission</h4>

        <div>
            <label>Title</label>
            <input type="text" name="mission_title" class="form-control neon-input @error('mission_title') is-invalid @enderror" value="{{ old('mission_title') }}">
            @error('mission_title')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div>
            <label class="mt-2">Image</label>
            <input type="file" name="mission_image" class="form-control-file neon-file">
        </div>

        <div>
            <label class="mt-3">Description</label>
            <textarea name="mission_description" class="form-control neon-input @error('mission_description') is-invalid @enderror" rows="6">{{ old('mission_description') }}</textarea>
            @error('mission_description')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <button type="submit" class="btn neon-btn mt-3">Submit</button>
    </form>
    <!-- End Mission -->


    <!-- Our Values -->
    <form style="margin-top: 600px; margin-left: 300px;" class="neon-card valueBox valueBox" enctype="multipart/form-data" method="POST" action="{{ route('values') }}">
        @csrf
        <h4 class="form-title"> Our Values </h4>

        <div>
            <label>Title</label>
            <input type="text" name="value_title" class="form-control neon-input @error('value_title') is-invalid @enderror" value="{{ old('value_title') }}">
            @error('value_title')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div>
            <label class="mt-2">Description</label>
            <textarea name="value_description" class="form-control neon-input @error('value_description') is-invalid @enderror" rows="4">{{ old('value_description') }}</textarea>
            @error('value_description')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <button type="submit" class="btn neon-btn mt-3">Submit</button>
    </form>
   
    <!-- End Values -->


    <!-- What to Expect (3 boxes) -->
    <form style="margin-top: 600px; margin-left: 800px;" class="neon-card wteBox wte" enctype="multipart/form-data" method="POST" action="{{ route('w_t_e_s') }}">
        @csrf
        <h4 class="form-title">What to Expect</h4>

        <div>
            <label>Heading</label>
            <input type="text" name="wte_heading" class="form-control neon-input @error('wte_heading') is-invalid @enderror" value="{{ old('wte_heading') }}">
            @error('wte_heading')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div>
            <label class="mt-2">Description</label>
            <textarea name="wte_description" class="form-control neon-input @error('wte_description') is-invalid @enderror" rows="4">{{ old('wte_description') }}</textarea>
            @error('wte_description')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <button type="submit" class="btn neon-btn mt-3">Submit</button>
    </form>
    
    <!-- End WTE -->


    <!-- Contact Info (3 boxes: location, email, numbers) -->
    <form class="neon-card contactBox contact1" method="POST" action="{{ route('locations') }}">
        @csrf
        <h4 class="form-title">Location</h4>

        <label>Heading</label>
        <input type="text" name="contact_heading" class="form-control neon-input @error('contact_heading') is-invalid @enderror" value="{{ old('contact_heading') }}">
        @error('contact_heading')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <label>Information</label>
        <input type="text" name="contact_information" class="form-control neon-input @error('contact_information') is-invalid @enderror" value="{{ old('contact_information') }}">
        @error('contact_information')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <label>Option</label>
        <input type="text" name="contact_option" class="form-control neon-input @error('contact_option') is-invalid @enderror" value="{{ old('contact_option') }}">
        @error('contact_option')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <button type="submit" class="btn neon-btn mt-3">Submit</button>
    </form>


    <form class="neon-card contactBox contact2" method="POST" action="{{ route('contacts') }}">
        @csrf
        <h4 class="form-title">Emails</h4>

        <label>Heading</label>
        <input type="text" name="contact_heading" class="form-control neon-input @error('contact_heading') is-invalid @enderror" value="{{ old('contact_heading') }}">
        @error('contact_heading')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <label>Email 1</label>
        <input type="email" name="contact_email1" class="form-control neon-input @error('contact_email1') is-invalid @enderror" value="{{ old('contact_email1') }}">
        @error('contact_email1')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <label>Email 2</label>
        <input type="email" name="contact_email2" class="form-control neon-input @error('contact_email2') is-invalid @enderror" value="{{ old('contact_email2') }}">
        @error('contact_email2')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <button type="submit" class="btn neon-btn mt-3">Submit</button>
    </form>


    <form class="neon-card contactBox contact3" method="POST" action="{{ route('calls') }}">
        @csrf
        <h4 class="form-title">Numbers</h4>

        <label>Heading</label>
        <input type="text" name="contact_heading" class="form-control neon-input @error('contact_heading') is-invalid @enderror" value="{{ old('contact_heading') }}">
        @error('contact_heading')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <label>Number 1</label>
        <input type="number" name="contact_number1" class="form-control neon-input @error('contact_number1') is-invalid @enderror" value="{{ old('contact_number1') }}">
        @error('contact_number1')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <label>Number 2</label>
        <input type="number" name="contact_number2" class="form-control neon-input @error('contact_number2') is-invalid @enderror" value="{{ old('contact_number2') }}">
        @error('contact_number2')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <button type="submit" class="btn neon-btn mt-3">Submit</button>
    </form>
    <!-- End Contact Info -->


    <!-- Contact Message -->
    <form class="neon-card contactMessageBox" method="POST" action="{{ route('messages') }}">
        @csrf
        <h4 class="form-title">Contact Message</h4>

        <label>Name</label>
        <input type="text" name="person_name" class="form-control neon-input @error('person_name') is-invalid @enderror" value="{{ old('person_name') }}">
        @error('person_name')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <label class="mt-2">Email</label>
        <input type="email" name="person_email" class="form-control neon-input @error('person_email') is-invalid @enderror" value="{{ old('person_email') }}">
        @error('person_email')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <label class="mt-2">Message</label>
        <textarea name="person_message" class="form-control neon-input @error('person_message') is-invalid @enderror" rows="4">{{ old('person_message') }}</textarea>
        @error('person_message')
            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
        @enderror

        <button type="submit" class="btn neon-btn mt-3">Submit</button>
    </form>


    <!-- Footer -->
<form style="margin-top: 2300px; margin-left: 500px; margin-bottom: 70px; width: 900px;" class="neon-card footerBox" enctype="multipart/form-data" method="POST" action="{{ route('footers') }}">
    @csrf
    <h4 class="form-title">Footer Section</h4>

    <div class="footer-grid">

        <!-- Row 1: All Titles -->
        <div class="footer-title-row">
            <div>
                <label>Title</label>
                <input type="text" name="footer_title" class="form-control neon-input @error('footer_title') is-invalid @enderror" value="{{ old('footer_title') }}">
                @error('footer_title')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

        <!-- Row 2: Description full width -->
        <div class="footer-description-row">
            <label>Description</label>
            <textarea name="footer_description" rows="5" class="form-control neon-input @error('footer_description') is-invalid @enderror">{{ old('footer_description') }}</textarea>
            @error('footer_description')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <!-- Row 3: Logo + Image -->
        <div class="footer-row">
            <div>
                <label>Logo</label>
                <input type="file" name="footer_image" class="form-control neon-input">
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="footer_image2" class="form-control neon-input">
            </div>
        </div>

        <!-- Row 4: Address, Phone, Email -->
        <div class="footer-row">
            <div>
                <label>Address</label>
                <textarea name="footer_address" rows="4" class="form-control neon-input @error('footer_address') is-invalid @enderror">{{ old('footer_address') }}</textarea>
                @error('footer_address')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div>
                <label>Phone</label>
                <textarea name="footer_phone" rows="4" class="form-control neon-input @error('footer_phone') is-invalid @enderror">{{ old('footer_phone') }}</textarea>
                @error('footer_phone')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div>
                <label>Email</label>
                <textarea name="footer_email" rows="4" class="form-control neon-input @error('footer_email') is-invalid @enderror">{{ old('footer_email') }}</textarea>
                @error('footer_email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

    </div>

    <button type="submit" class="neon-btn mt-3">Submit</button>
</form>
</section>

@endsection