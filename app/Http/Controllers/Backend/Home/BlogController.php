<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeBlog;
use App\Models\HomeCategory;
use App\Models\HomeChildCategory;
use App\Models\HomeSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**** Show All Blog ****/
    public function all_blog(){


        $category = HomeCategory::where('status', 1)->get();
        $sub_cate = HomeSubCategory::where('sub_cat_status', 1)->get();
        $child_cate = HomeChildCategory::where('child_cat_status', 1)->get();

        $blogs = HomeBlog::orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Blog.All_Blog', compact('category','sub_cate','child_cate','blogs'));

    }

    // subcategory dependent dropdown
	public function getSubCategory($id){

        $subcategory = DB::table("home_sub_categories")
        ->where("cat_id",$id)
        ->get();
        return json_encode($subcategory);
	}
    // child category dependent dropdown
    public function getChildCategory($id){

        $child_category = DB::table("home_child_categories")
        ->where("sub_cat_id",$id)
        ->get();

        return json_encode($child_category);
	}

    /**** Store Blog data ****/

    public function add_blog(Request $request){

        $request->validate([

            'blog_cat_id'=> 'required',
            'blog_sub_cat_id'=> 'required',
            'blog_child_cat_id'=> 'required',
            'blog_title'=> 'required',
            'blog_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'blog_desc'=> 'required',
            'blog_writer'=> 'required'

        ]);

        /**** Blog Image Upload ******/

        $blog = new HomeBlog();

        if($request->blog_image){

            $fileName = time().'.'.request()->blog_image->getClientOriginalExtension();
            request()->blog_image->move(public_path('backend/home/blog'), $fileName);
            $blog->blog_image = $fileName;

        }

        $blog->blog_cat_id = $request->blog_cat_id;
        $blog->blog_sub_cat_id = $request->blog_sub_cat_id;
        $blog->blog_child_cat_id = $request->blog_child_cat_id;
        $blog->blog_title = $request->blog_title;
        $blog->blog_desc = $request->blog_desc;
        $blog->blog_writer = $request->blog_writer;

        $blog->save();

        return redirect()->route('admin.all_blog');

    }

    /**** Edit Blog ****/

    public function edit_blog($id){

        $blog = HomeBlog::find($id);
        $category = HomeCategory::where('status', 1)->get();
        $sub_cate = HomeSubCategory::where('cat_id', $blog->blog_cat_id)->get();
        $child_cate = HomeChildCategory::where('sub_cat_id', $blog->blog_sub_cat_id)->get();

        return view('Backend.pages.Home.Blog.Update_Blog', compact('blog', 'category', 'sub_cate', 'child_cate'));

    }

    /**** Store Blog data ****/

    public function update_blog(Request $request, $id){

        $request->validate([

            'blog_cat_id'=> 'required',
            'blog_sub_cat_id'=> 'required',
            'blog_child_cat_id'=> 'required',
            'blog_title'=> 'required',
            'blog_new_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'blog_desc'=> 'required',
            'blog_writer'=> 'required'

        ]);

        /**** Blog Image Upload ******/

        $blog = HomeBlog::find($id);

        if($request->blog_new_image){

            // unlink old image
            $path = public_path("backend/home/blog/".$blog->blog_image);
            unlink($path);

            // add new image
            $fileName = time().'.'.request()->blog_new_image->getClientOriginalExtension();
            request()->blog_new_image->move(public_path('backend/home/blog'), $fileName);
            $blog->blog_image = $fileName;

        }else {
            $blog->blog_image = $request->blog_image;
        }

        $blog->blog_cat_id = $request->blog_cat_id;
        $blog->blog_sub_cat_id = $request->blog_sub_cat_id;
        $blog->blog_child_cat_id = $request->blog_child_cat_id;
        $blog->blog_title = $request->blog_title;
        $blog->blog_desc = $request->blog_desc;
        $blog->blog_writer = $request->blog_writer;

        $blog->update();

        return redirect()->route('admin.all_blog');

    }

    /******* Blog Delete  **********/

    public function delete_blog(Request $request){

        $blog = HomeBlog::find($request->blog_id);

        $path = public_path("backend/home/blog/".$blog->blog_image);
        unlink($path);

        $blog->delete();

        return redirect()->route('admin.all_blog');
    }



}
