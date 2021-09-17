<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Useraccount;

class UserController extends Controller
{
    function index()
    {
        $user = Useraccount::all();
        return view('user', ['useraccount' => $user]);
    }
    function store(Request $req)
    {
        $req->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|max:255|unique:useraccount',
            'city' => 'required',
            'phone' => 'required|max:14',
            'gender' => 'required',
            'age' => 'sometimes|nullable|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
        $data = new Useraccount();
        $data->firstname = $req->firstname;
        $data->lastname = $req->lastname;
        $data->email = $req->email;
        $data->city = $req->city;
        $data->phone = $req->phone;
        $data->gender = $req->gender;
        $data->age = $req->age;
        $data->status = $req->status;
        if ($image = $req->file('image')) {
            $destinationPath = 'MyImages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = $profileImage;
        }
        $data->save();
        return redirect('list');
    }
    function show()
    {
        $record = Useraccount::all();
        return view('list', ['useraccount' => $record]);
    }
    function delete($id)
    {
        $data = Useraccount::find($id);
        $data->delete();
        return redirect('list');
    }
    function edit($id)
    {
        $data = Useraccount::find($id);
        $user = Useraccount::all();
        return view('update', ['data' => $data, 'useraccount' => $user]);
    }

    function updateStore(Request $req)
    {
        $data = Useraccount::find($req->id);
        $req->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|max:255|',
            'city' => 'required',
            'phone' => 'required|max:14',
            'gender' => 'required',
            'age' => 'sometimes|nullable|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);
        $data->firstname = $req->firstname;
        $data->lastname = $req->lastname;
        $data->email = $req->email;
        $data->city = $req->city;
        $data->phone = $req->phone;
        $data->gender = $req->gender;
        $data->age = $req->age;
        $data->image = $req->image;
        $data->status = $req->status;
        if ($image = $req->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        } else {
            unset($data['image']);
        }
        $data->save();
        return redirect('list');
    }
}
