<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getImageUrl($request){
        $imageName=$request->input('name').time().'.'.$request->file('image')->getClientOriginalExtension();
        return $request->file('image')->move('images\category',$imageName);//save to public -> images\category folder

    }
    public function store(Request $request)
    {
//        $image=$request->file('image');
//         dd(request()->input('name'));
//         dd($request->file('image')->getClientOriginalExtension());
        $this->validate($request,[
            'name'=>'required',
        ]);
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image']=$this->getImageUrl($request);
            }
        $status=Category::create($data);
        if($status){
            return redirect()->route('category.index')->with('success','Successfully created category');
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
//        dd($id);
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
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
        $category=Category::find($id);
        if($category){
            $this->validate($request,[
                'name'=>'required',
            ]);
            $data=$request->all();
            if($request->hasFile('image')){
                $data['image']=$this->getImageUrl($request);
            }
            $status=$category->fill($data)->save();
            if($status){
                return redirect()->route('category.index')->with('success','Successfully updated category');
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
        $category=Category::find($id);

        if($category){
            $status=$category->delete();
            if($status){

                return redirect()->route('category.index')->with('success','Category successfully deleted');
            }
            else{
                return back()->with('errors','Something wrong');
            }
        }else{
            return back()->with('errors','Data not found');
        }
    }
}
