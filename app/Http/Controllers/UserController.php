<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function userDashboard(){
        $user=Auth::user();
        return view('user.dashboard',compact('user'));
    }
    public function userProfileEdit(){
        $user=Auth::user();
        return view('user.profileEdit',compact('user'));
    }
    public function userProfileUpdate(Request $request,$id){
        $user=User::find($id);
//        return $request;
        if($user){
            $this->validate($request,[
                'firstName'=>'required',
                'lastName'=>'nullable',
                'phone'=>'required',
                'address'=>'required',
            ]);
            $data=$request->all();
            if($request->hasFile('image')){
                $data['image']=User::getImageUrl($request);
            }
            $status=$user->fill($data)->save();
            if($status){
                return redirect()->route('user.dashboard')->with('success','Successfully Updated Profile');
            }
            else{
                return back()->with('errors','Something went wrong');
            }
        }


        return view('user.profileEdit',compact('user'));
    }
    public function registration(){
        return view('user.registration');
    }
    public function registrationSubmit(Request $request){
//        return $request->all();
        $this->validate($request,[
            'firstName'=>'required',
            'lastName'=>'nullable',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:6',
        ]);
        $data=$request->all();
        //Hash password
        $data['password']= Hash::make($data['password']);
        if($request->hasFile('image')){
            $data['image']=User::getImageUrl($request);
        }
        $status=User::create($data);
        if($status){
            return redirect('/')->with('success','Successfully Complete Registration');
        }
        else{
            return back()->with('errors','Something went wrong');
        }
    }
    public function userLogin(Request $request){
        $this->validate($request,[
            'email'=>'email|required|exists:users,email',
            'password'=>'required|min:6'
        ]);

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password,])){

            session()->put('user',$request->email);

            return redirect()->route('user.home')->with('success', 'Successfully logged in');
        }
        else{
            return back()->with('error','invalid Email and password');

        }

    }
    public function userLogout(){
        session()->forget('user');
        Auth::logout();
        return redirect()->route('user.home')->with('success', 'Successfully logged Out');
    }


}
