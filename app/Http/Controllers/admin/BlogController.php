<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::get();
        return view('admin.blog.index',compact('blogs'));
    }
    public function blogStatus(Request $request){
        if($request->mode=='true'){
            DB::table('blogs')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('blogs')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        return view('admin.blog.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getImageUrl($request){
        $imageName=$request->file('image')->getClientOriginalExtension();
        return $request->file('image')->move('images/blog/',$imageName);//save to public -> images\category folder

    }
    public function store(Request $request)
    {
//        return $request->all();
        $this->validate($request,[
            'author'=>'required',
            'title'=>'required',
            'category_id'=>'required',
            'description'=>'required',
        ]);
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image']=$this->getImageUrl($request);
        }
        $status=Blog::create($data);
        if($status){
            return redirect()->route('blog.index')->with('success','Successfully created blog');
        }
        else{
            return back()->with('errors','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        $categories=Category::get();
        return view('admin.blog.edit',compact(['blog','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog=Blog::find($id);
        if($blog){
            $this->validate($request,[
                'author'=>'required',
                'title'=>'required',
                'category_id'=>'required',
                'description'=>'required',
            ]);
            $data=$request->all();
            if($request->hasFile('image')){
                $data['image']=$this->getImageUrl($request);
            }
            $status=$blog->fill($data)->save();
            if($status){
                return redirect()->route('blog.index')->with('success','Successfully update blog');
            }
            else{
                return back()->with('errors','Something went wrong');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);

        if($blog){
            $status=$blog->delete();
            if($status){

                return redirect()->route('blog.index')->with('success','Blog successfully deleted');
            }
            else{
                return back()->with('errors','Something wrong');
            }
        }else{
            return back()->with('errors','Data not found');
        }
    }
}
