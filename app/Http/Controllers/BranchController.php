<?php

namespace App\Http\Controllers;

use App\Models\Amount;
use App\Models\Branch;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function create()
    {
        $user = Auth::user();
        return view('frontend.branch.create', compact('user'));
    }

    public function store(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'branch_name' => 'required',
            'branch_address' => 'required',
        ]);

        Branch::create([
            'admin_id' => $request->id,
            'email' => $request->email,
            'Password' => Hash::make($request->password),
            'branch_name' => $request->branch_name,
            'branch_address' => $request->branch_address
        ]);
        return redirect()->route('branch.show');
    }
    public function edit($id){
        $branch = Branch::find($id);
        return view('frontend.branch.edit', compact('branch'));
    }
    public function update(Request $request, $id){   
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'branch_name' => 'required',
            'branch_address' => 'required',
        ]);
            $branch = Branch::find($id);
            $branch->email = $request->email;
            $branch->Password = $request->password;
            $branch->branch_nam = $request->branch_name;
            $branch->branch_address = $request->branch_address;
            $branch->save();
        return redirect()->route('branch.show');
    }
    public function show()
    {
        $branchs = Branch::all();
        return view('frontend.branch.list', compact('branchs'));
    }
    public function amount(){
        $branchs = Branch::all();
        $amounts = Amount::all();
        return view('frontend.branch.amount', compact('branchs', 'amounts'));
    }
    public function amountStore(Request $request){
        $request->validate([
            'branch_id' => 'required',
            'amount' => 'required'
        ]);
        Amount::create([
            'branch_id' => $request->branch_id,
            'amount' => $request->amount,
        ]);
        return back();
    }
    
    public function delete($id){
        Branch::find($id)->delete();
        return back();
    }
    public function expensesDonation(){
        $branchs = Branch::all();
        return view('frontend.branch.expense', compact('branchs'));
    }
    public function login(){
            return view('frontend.branch.login');
    }
    public function loginStore(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
// dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $user = Branch::where('email', '=', $email)->first();
        // dd($user->toArray());
        
        if (!$user) {
           return redirect()->route('branch.login')->with(['error', 'Login Fail, please check email id']);
        }
        if (!Hash::check($password, $user->password)) {
           return redirect()->route('branch.login')->with(['error', 'Login Fail, pls check password']);
        }
           return view('frontend.app', compact('user'));
    }
    public function amountShow(Request $request){
        $branchs = Branch::all();
        $amounts = Amount::where('branch_id', $request->branch_id);
        return view('frontend.branch.amountlist', compact('branchs', 'amounts'));
    }
    public function amountshow(){
        return view('frontend.branch.amountlist');
    }
}