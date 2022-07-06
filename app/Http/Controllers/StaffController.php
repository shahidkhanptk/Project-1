<?php

namespace App\Http\Controllers;

use App\Models\Amount;
use Illuminate\Support\Facades\Auth;
use App\Models\Branch;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index(){        
        $staff = Staff::all();
        return view('frontend.staff.app', compact('staff'));
    }
    public function create(){
        return view('frontend.staff.create');
    }
    public function store(Request $request){
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'cnic' => 'required',
            'mobile' => 'required',
            'city' => 'required',
            'image' => 'required',
            'cnic_image' => 'required',
            'd_o_b' => 'required',
            'address' => 'required',
        ]);
        $file = null;
        if ($request->hasFile('image')) {
         $path = $request->file('image');
         $target = 'public/images';
         $file = Storage::putFile($target, $path);
         $file = substr($file, 7, strlen($file) - 7);
     }
     $cnic_file = null;
     if ($request->hasFile('image')) {
      $path = $request->file('image');
      $target = 'public/images';
      $cnic_file = Storage::putFile($target, $path);
      $cnic_file = substr($file, 7, strlen($cnic_file) - 7);
  }
        Staff::create([
            'branch_id' => 1,
            'name' => $request->f_name, $request->l_name,
            'email' => $request->email,
            'cnic' => $request->cnic,
            'd_o_b' => $request->d_o_b,
            'image' => $file,
            'cnic_image' => $cnic_file,
            'mobile' => $request->mobile,
            'city' => $request->city,
            'address' => $request->address
        ]);
        return back();
    }
    public function show(){
        return view('frontend.staff.list');
    }

    public function expenseDonation(){
        return view('frontend.staff.expense');
    }
}
