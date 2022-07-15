<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Amount;
use App\Models\Branch;
use App\Models\Expense;
use App\Models\Donation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class BranchController extends Controller
{
    //
    public function create()
    {
        return view('frontend.branch.create');
    }

    public function store(Request $request, $id)
    {
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

            $branch = Branch::find($id);
            $branch->admin_id = Auth::User()->id;
            $branch->email = $request->email;
            $branch->branch_name = $request->branch_name;
            $branch->branch_address = $request->branch_address;
            $branch->password = $request->password;
            $branch->update();
            return redirect()->route('branch.show');
    }

    public function show()
    {
        $users = User::all();
        $branches = Branch::all();
        return view('frontend.branch.list', compact('branches','users'));
    }

    public function amount(){
        $branches = Branch::all();
        return view('frontend.branch.addamount', compact('branches'));
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
        return redirect()->route('amount.show');
    }

    public function amountEdit($id){
        $amount = Amount::find($id);
        return view('frontend.branch.editamount', compact('amount'));    
    }
    
    public function amountDelete($id){
        Amount::find($id)->delete();
        return redirect()->back();
    }

    public function delete($id){
        Branch::find($id)->delete();
        return redirect()->back();
    }

    public function expense(){
        $expenses = Expense::all();
        return view('frontend.branch.expense', compact('expenses'));
    }
    public function donation(){
        $donations = Donation::all();
        return view('frontend.branch.donation', compact('donations'));
    }

    public function login(){
            return view('frontend.branch.login');
    }
    
    public function loginStore(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = Branch::where('email', '=', $email)->first();
        
        if (!$user) {
           return redirect()->route('branch.login');
        }
        if (!Hash::check($password, $user->password)) {
           return redirect()->route('branch.login');
        }
           return view('frontend.staff.app', compact('user'));
    }

    public function amountShow(){
        $amounts = Amount::all();
        return view('frontend.branch.amountlist', compact('amounts'));
    }

    public function staff(){
        return view('frontend.branch.stafflist');
    }
    
    public function amountUpdate(Request $request, $id){
        $amount = Amount::find($id);
        $amount->branch_id = $request->branch_id;
        $amount->amount = $request->amount;
        $amount->update();
        return redirect()->route('amount.show');       
    }
}