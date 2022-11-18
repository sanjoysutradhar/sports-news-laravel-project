<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $blog= Blog::query();
        $cricketCategory=Category::where('name','cricket')->first();
        $cricketBlogs=Blog::where(['category_id'=>$cricketCategory->id,'status'=>'active'])->limit(4)->get();

        $footballCategory=Category::where('name','football')->first();
        $footballBlogs=Blog::where('category_id',$footballCategory->id)->orderBy('id','DESC')->limit(4)->get();

        $blog->orderBy('id','DESC')->limit(10)->get();

        $blogs=$blog->orderBy('id','ASC')->get();
//        return $blogs;
        return view('user.home',compact(['cricketBlogs','footballBlogs','blogs']));
    }
    public function detail($id){
        $blog=Blog::find($id);
        $comments=Comment::where('blog_id',$blog->id)->get();
        return view('user.detail',compact(['blog','comments']));
    }


}
