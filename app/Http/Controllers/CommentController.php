<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CommentController extends Controller
{
    public function commentStore(Request $request){
        $user=Auth::user();
//        return $request->all();
        $this->validate($request,[
            'comment'=>'required',
        ]);
        $data=$request->all();
        $data['user_id']=$user->id;
        $data['blog_id']=$request->blog_id;
        $data['commenter_name']=$user->firstName.' '.$user->lastName;
        $data['commenter_email']=$user->email;
        $data['commenter_image']=$user->image;
        $data['comment']=$request->comment;
        Comment::create($data);
        return back();

    }
    public function commentDelete($id){
        $comment=Comment::find($id);

        if($comment){
            $status=$comment->delete();
            if($status){

                return back()->with('success','comment successfully deleted');
            }
            else{
                return back()->with('errors','Something wrong');
            }
        }else{
            return back()->with('errors','Data not found');
        }
    }
    public function commentUpdate(Request $request,$id){
        $comment=Comment::find($id);
        if($comment){
            $this->validate($request,[
                'comment'=>'required',
            ]);
            $data=$request->all();
            $status=$comment->fill($data)->save();
            if($status){

                return back()->with('success','comment successfully updated');
            }
            else{
                return back()->with('errors','Something wrong');
            }
        }else{
            return back()->with('errors','Data not found');
        }
    }
}
