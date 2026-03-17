@extends('layouts.backend')
@section('content')

<!-- AdminLTE expects content inside content-wrapper / content -->
<div class="content-wrapper">
    <!-- optional content header -->
    

    <section class="content" style="background-color: #7c9dffff; margin-top: 100px;">
        <div class="container-fluid">

            <div class="row">

                <!-- PROFILE CARD: stacks on mobile, 4 columns on md+ -->
                <div class="col-12 col-md-4 mb-4">
                    <div class="box box-primary profile-box-bg">
                        <div class="box-header with-border text-center">
                            <h3 class="box-title">My Profile</h3>
                        </div>

                        <div class="box-body box-profile text-center">
                            @guest
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('backend/profile/my_profile.png') }}"
                                    alt="User profile picture">
                            @else
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('backend/profile/'.Auth::user()->profileImage) }}"
                                    alt="User profile picture">
                            @endguest

                            <h3 class="profile-username mt-3">{{ Auth::user()->name ?? 'Guest' }}</h3>
                            <p class="text-muted">{{ Auth::user()->role ?? 'NA' }}</p>

                            <ul class="list-group list-group-unbordered text-start mt-3">
                                <li class="list-group-item d-flex justify-content-between profile-list-item-bg">
                                    <b>Fullname</b> <span>{{ Auth::user()->name ?? 'NA' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between profile-list-item-bg">
                                    <b>Email</b> <span>{{ Auth::user()->email ?? 'NA' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between profile-list-item-bg">
                                    <b>Phone</b> <span>{{ Auth::user()->phonenumber ?? 'NA' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between profile-list-item-bg">
                                    <b>Gender</b> <span>{{ Auth::user()->gender ?? 'NA' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between profile-list-item-bg">
                                    <b>Address</b> <span>{{ Auth::user()->address ?? 'NA' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between profile-list-item-bg">
                                    <b>Role</b> <span>{{ Auth::user()->role ?? 'NA' }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            <!-- PERSONAL INFORMATION-->
                <div class="col-12 col-md-8 mb-4" style=" width: 680px; height: 400px; background-color: #82f1bcff ;">
                    <div class="box box-info form-box-bg">
                        <div class="box-header with-border" style="background: linear-gradient(135deg, #224abe 10%, #a5f6a5ff 35%, #4b9cedff, #1cc88a ); width: 650px;" >
                            <a id="showInfo" style="color: black; cursor: pointer;"> <b> Personal Information </b> </a>
                            <a id="showPass" style="color: black; cursor: pointer; padding-left: 30px;"> <b>Change Password </b> </a>
                            <a id="showImg" style="color: black; cursor: pointer; padding-left: 30px;"> <b> Change Profile Image </b> </a>
                        </div>

                        <form id="infoForm" method="POST" action="{{ route('updatePersonalInformation') }}" class="form-control" style="background: linear-gradient(135deg, #224abe 10%, #a5f6a5ff 35%, #4b9cedff, #1cc88a ); width: 650px; height: 300px;" >
                            @csrf
                            <input type="text" name="id" value="{{ Auth::user()->id }}" hidden="true" >
                            <div class="box-body">

                                <div class="form-group row" id="info">
                                    <label class="col-sm-3 col-form-label"> <b>Full Name</b></label>
                                    <div class="col-sm-9">
                                        <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ Auth::user()->name ?? 'NA' }}">   
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <b>Email</b></label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ Auth::user()->email ?? 'NA' }}">  
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <b>Phone Number</b></label>
                                    <div class="col-sm-9">
                                        <input type="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="{{ Auth::user()->phonenumber ?? 'NA' }}">  
                                        @error('phonenumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <b>Gender</b></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="gender" required>
                                            <option value="" disabled {{ Auth::user()->gender == '' ? 'selected' : '' }}> Select Gender</option>
                                            <!--option value="{{ Auth::user()->gender ?? '' }}"> {{ Auth::user()->gender ?? 'Select gender' }}</option-->
                                            <option value="male" {{ Auth::user()->gender == 'male' ? 'selected' : '' }}> Male </option>
                                            <option value="female" {{ Auth::user()->gender == 'female' ? 'selected' : '' }}> Female </option>
                                            <option value="other" {{ Auth::user()->gender == 'other' ? 'selected' : '' }}> Other </option>
                                            <option value="prefer-not-to-say" {{ Auth::user()->gender == 'prefer-not-to-say' ? 'selected' : '' }}> Prefer Not To Say </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <b>Address</b></label>
                                    <div class="col-sm-9">
                                        <input type="name" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="{{ Auth::user()->address ?? 'NA' }}">  
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success"> Submit </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                 <!-- CHANGE PASSWORD -->
            <div class="col-12 col-md-8 mb-4" id="pass" style="display:none; background: linear-gradient(135deg, #224abe 10%, #a5f6a5ff 35%, #4b9cedff, #1cc88a ); width: 620px;margin-top: -355px; margin-left: 16px;">
                <div class="box box-warning form-box-bg">
                       

                    <form method="POST" action="{{ route('updatePassword') }}" class="p-4">
                        @csrf

                        <!-- OLD PASSWORD -->
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label"><b>Old Password</b></label>
                            <div class="col-sm-9 position-relative">
                                <input type="password" 
                                    class="form-control @error('old_password') is-invalid @enderror" 
                                    name="old_password" 
                                    placeholder="Enter Old Password">

                                @error('old_password')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <!-- NEW PASSWORD -->
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label"><b>New Password</b></label>
                            <div class="col-sm-9 position-relative">
                                <input type="password" 
                                    class="form-control @error('new_password') is-invalid @enderror" 
                                    name="new_password" 
                                    placeholder="Enter New Password">

                                @error('new_password')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <!-- CONFIRM PASSWORD -->
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label"><b>Confirm Password</b></label>
                            <div class="col-sm-9 position-relative">
                                <input type="password" 
                                    class="form-control @error('confirm_new_password') is-invalid @enderror" 
                                    name="confirm_new_password" 
                                    placeholder="Confirm New Password">

                                @error('confirm_new_password')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Update Password</button>
                    </form>
                </div>
            </div>

            <!-- CHANGE PROFILE IMAGE-->
        <div id="img" class="col-12 col-md-8 mb-4" style="width: 650px; display: none; background: linear-gradient(135deg, #224abe 10%, #a5f6a5ff 35%, #4b9cedff, #1cc88a ); margin-top: -355px; margin-left: 16px;">
            <form role="form" method="POST" action="{{ route('updateProfileImage') }}" enctype="multipart/form-data" >
                @csrf
                    <div class="form-group">
                        <label for="profileImage" class="col-sm-3 col-form-label" >Profile Image</label>
                        <div>
                            <input type="file" class="form-control" name="profileImage">
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>        
            </form>
            
        </div>

        
    </section>               
</div>

<script>
    function hideAll() {
    document.getElementById('infoForm').style.display = 'none';
    document.getElementById('pass').style.display = 'none';
    document.getElementById('img').style.display = 'none';
    }

    document.getElementById('showInfo').addEventListener('click', function (e) {
        e.preventDefault();
        hideAll();
        document.getElementById('infoForm').style.display = 'block';
    });

    document.getElementById('showPass').addEventListener('click', function (e) {
        e.preventDefault();
        hideAll();
        document.getElementById('pass').style.display = 'block';
    });

    document.getElementById('showImg').addEventListener('click', function (e) {
        e.preventDefault();
        hideAll();
        document.getElementById('img').style.display = 'block';
    });

</script>

@endsection
