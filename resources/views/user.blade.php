@extends('admin.master');
@section('content')
    <h1 style="text-align:center;">User Registration</h1>
    <div class="container">
    <form action="/save" method='POST'style="margin-left:200px" id="first_form"enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Enter First Name</label>
            <input type="text" name="firstname"  class="form-control" id="first_name">
            <span id="err1" class="text-danger">@error('firstname'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Last Name</label>
            <input type="text" name="lastname"  class="form-control" id="last_name">
            <span id="err2" class="text-danger">@error('lastname'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Email</label>
            <input type="text" name="email"  class="form-control" id="email">
            <span id="err3" class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Phone Number</label>
            <input type="tel" name="phone"  class="form-control" id="phone">
            <span id="err4" class="text-danger">@error('phone'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter City</label>
            <input type="text" name="city"  class="form-control" id="city">
            <span id="err5" class="text-danger">@error('city'){{$message}}@enderror</span>
        </div>
        <label class="form-label"id="gender" >Gender</label>
        <div class="mb-3 form-check from-check-inline">
            <input type="radio" name="gender" id="male" class="form-check-input" value="Male" onclick="yesnoCheck(this)"  >
            <label class="form-check-label">Male</label>
            <span class="text-danger">@error('gender'){{$message}}@enderror</span>
        </div>
        <div class="mb-3 form-check from-check-inline"> 
            <input type="radio" name="gender" id="female" class="form-check-input" value="Female">
            <label class="form-check-label">Female</label>
            <span class="text-danger">@error('gender'){{$message}}@enderror</span>
        </div>
        <br><span id="err6" class="text-danger"></span>
        <div class="mb-3"style="display: none;" id="agefield">
            <label class="form-label">Enter  Age</label>
            <input type="number" name="age" class="form-control"id="age" >
            <span id="err9"class="text-danger">@error('age'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter  Profile_Image</label>
            <input type="file" name="image" class="form-control"id="image">
            <span id="err7"class="text-danger">@error('image'){{$message}}@enderror</span>
        </div>
        <label class="form-label"id="checkRadio" >status</label>
        <div class="mb-3 form-check from-check-inline">
            <input type="radio" name="status" id="active" class="form-check-input" value="Active"   >
            <label class="form-check-label">Active</label>
            <span class="text-danger">@error('status'){{$message}}@enderror</span>
        </div>
        <div class="mb-3 form-check from-check-inline"> 
            <input type="radio" name="status" id="inactive" class="form-check-input" value="Inactive">
            <label class="form-check-label">Inactive</label>
            <span class="text-danger">@error('status'){{$message}}@enderror</span>
        </div>
        <br><span id="err8" class="text-danger"></span>
        <br><br>
        <button type="submit" class="btn btn-success">Add User</button>
    </form>
    </div>
@endsection
