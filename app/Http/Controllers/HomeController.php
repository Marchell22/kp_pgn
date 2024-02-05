<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as Validator;

class HomeController extends Controller
{
    public function userDashboard(){
        return view('pegawai.dashboard');
    }   
    public function dashboard(){
        return view('dashboard');
    }
    public function landing(){
        return view('landing');
    }
    public function index(){
        $data=User::get();
        return view('index', compact('data'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['name'] =$request->name;
        $data['email'] =$request->email;
        $data['password'] =Hash::make($request->password);

        $data['role'] = 'user';

        User::create($data);
        return redirect()->route('admin.index');

    }
    public function edit(Request $request, $id){
        $data = User::find($id);
        return view('edit',compact('data'));

    }
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable'
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['name'] =$request->name;
        $data['email'] =$request->email;

        if($request->password){
            $data['password'] =Hash::make($request->password);
        }
        User::whereId($id)->update($data);
        return redirect()->route('admin.index');
        
    }
     public function cancelEdit()
    {
        // Logika untuk pembatalan edit
        return redirect()->route('admin.index'); // Ganti 'index' dengan nama rute yang sesuai
    }
    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin.index')->with('error', 'User not found');
        }

        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User deleted successfully');
    }
}
