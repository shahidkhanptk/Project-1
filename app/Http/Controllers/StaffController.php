<?php

namespace App\Http\Controllers;

use App\Models\Amount;
use App\Models\Expense;
use App\Models\Donation;

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
     if ($request->hasFile('cnic_image')) {
      $path = $request->file('cnic_image');
      $target = 'public/images';
      $cnic_file = Storage::putFile($target, $path);
      $cnic_file = substr($cnic_file, 7, strlen($cnic_file) - 7);
  }
        Staff::create([
            'branch_id' => 1,
            'name' => $request->f_name.' '.$request->l_name,
            'email' => $request->email,
            'cnic' => $request->cnic,
            'd_o_b' => $request->d_o_b,
            'image' => $file,
            'cnic_image' => $cnic_file,
            'mobile' => $request->mobile,
            'city' => $request->city,
            'address' => $request->address
        ]);
        return redirect()->route('staff.show');
    }
    public function staffUpdate(Request $request, $id){
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'nullable',
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
     if ($request->hasFile('cnic_image')) {
      $path = $request->file('cnic_image');
      $target = 'public/images';
      $cnic_file = Storage::putFile($target, $path);
      $cnic_file = substr($cnic_file, 7, strlen($cnic_file) - 7);
  }
        $staff = Staff::find($id);
            $staff->branch_id = 1;
            $staff->name = $request->f_name.' '.$request->l_name;
            $staff->email = $request->email;
            $staff->cnic = $request->cnic;
            $staff->d_o_b = $request->d_o_b;
            $staff->image = $file;
            $staff->cnic_image = $cnic_file;
            $staff->mobile = $request->mobile;
            $staff->city = $request->city;
            $staff->address = $request->address;
            $staff->update();
        return redirect()->route('staff.show');
    }



    public function staffEdit($id){
        $staff = Staff::find($id);
        return view('frontend.staff.editstaff', compact('staff'));
    }
    public function show(){
        $staffs = Staff::all();
        return view('frontend.staff.list', compact('staffs'));
    }
public function delete($id)
{
    Staff::find($id)->delete();
    return back();
}
    public function expense(){
        $branches = Branch::all();
        return view('frontend.staff.expense', compact('branches'));
    }

    public function storeExpense(Request $request){
        $request->validate([
            'branch_id' => 'required',
            'expense' => 'required'
        ]);
        Expense::create([
            'branch_id' => $request->branch_id,
            'expense' => $request->expense,
        ]);
    return redirect()->route('show.donation');
    }
    public function donation(){
        $branches = Branch::all();
        return view('frontend.staff.donation', compact('branches'));
    }
    public function storeDonation(Request $request){
        $request->validate([
            'branch_id' => 'required',
            'donation' => 'required'
        ]);
        Donation::create([
            'branch_id' => $request->branch_id,
            'donation' => $request->donation,
        ]);
    return redirect()->route('show.donation');
    }
    public function showExpense(){
        $expenses = Expense::all();
        return view('frontend.staff.expenselist', compact('expenses'));
    }    
    public function showDonation(){
        $donations = Donation::all();
        return view('frontend.staff.donationlist', compact('donations'));
    }
}
