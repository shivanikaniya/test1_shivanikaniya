@extends('admin.master');
@section('content')

    <div class="container">
    <button class="btn btn-success mb-3 mt-4" onclick="window.location='{{ url("/list")}}'" style="margin-left:250px">Show User</button>
    <form action="{{url('update')}}" method="POST" style="margin-left:250px" id="first_form"enctype="multipart/form-data">
    <h1>Update User</h1>
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-3">
            <label  class="form-label">Enter First Name</label>
            <input type="text" name="firstname" id="first_name" class="form-control" value="{{$data['firstname']}}">
            <span id="err1"class="text-danger">@error('firstname'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Last Name</label>
            <input type="text" name="lastname" id="last_name" class="form-control" value="{{$data['lastname']}}">
            <span id="err2"class="text-danger">@error('lastname'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Email</label>
            <input type="text" name="email"  class="form-control" value="{{$data['email']}}"id=
            "email">
            <span id="err3"class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Phone Number</label>
            <input type="tel" name="phone"  class="form-control" id="phone"value="{{$data['phone']}}">
            <span id="err4" class="text-danger">@error('phone'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter City</label>
            <input type="text" name="city"  class="form-control" id="city" value="{{$data['city']}}">
            <span id="err5" class="text-danger">@error('city'){{$message}}@enderror</span>
        </div>
        <label class="form-label"id="gender" >Gender</label>
        <div class="mb-3 form-check from-check-inline">
            <input type="radio" name="gender" id="male" class="form-check-input"value="Male" onclick="yesnoCheck(this)">
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
            <input type="file" name="image" class="form-control"id="image"value="{{$data['image']}}">
            <span id="err7"class="text-danger">@error('image'){{$message}}@enderror</span>
        </div>
        <label class="form-label"id="checkRadio" >status</label>
        <div class="mb-3 form-check from-check-inline">
            <input type="radio" name="status" id="active" class="form-check-input" value="Active">
            <label class="form-check-label">Active</label>
            <span class="text-danger">@error('status'){{$message}}@enderror</span>
        </div>
        <div class="mb-3 form-check from-check-inline"> 
            <input type="radio" name="status" id="inactive" class="form-check-input" value="Inactive">
            <label class="form-check-label">Inactive</label>
            <span class="text-danger">@error('status'){{$message}}@enderror</span>
        </div>
        <br><span id="err8" class="text-danger"></span>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
 @endsection