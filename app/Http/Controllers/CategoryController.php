<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CategoryController extends Controller
{
    //
    public function create(){
        return view('Categoryform');
    }
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|max:255',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'sometimes'
            
           ]);
        //    The thumbnail we use below is the name='thumbnail' in the form //
           $imageName = time().'.'.$request->thumbnail->extension();  
           $request->thumbnail->move(public_path('images'), $imageName);
           
        //    The Category we use below is model //
            $Category=new Category;
            $Category->name = $request->name;
            $Category->thumbnail= $imageName;
            $Category->status= $request->status;
       
           $Category->save();
           return redirect('categories')->with('status','Category Added');

    }
    public function index(){
     // The categories we write inside compact is the $categories variable but we don't write $ here//////
        $categories = Category::all();
        return view('Categories', compact('categories'));
    }
    public function edit($id){
        $category= Category::where('id',$id)->first();

        return view('Editform', compact('category'));
    }
    public function update( Request $request ,$id){
        $request->validate([
            'name' => 'required|max:255',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'=>'sometimes',
        ]);
    
        $category = Category::findOrFail($id); // Find the category by ID
        $category->name = $request->name;
        $category->status = $request->status;
    
        // Check if a thumbnail is uploaded
        if ($request->hasFile('thumbnail')) {
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $category->thumbnail = $imageName;
        }
    
        $category->save(); // Save the changes
        return redirect('categories')->with('status','Category Updated');
    }
    
    public function destroy($id){
        $category= Category::where('id',$id)->first();
        $category->delete(); 
        return redirect('categories');
    }
}
