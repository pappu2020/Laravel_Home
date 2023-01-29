<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class categoryController extends Controller
{
    function categoryPage()
    {
        $allCategoryInfo = categoryModel::all();
        $allCategoryCount = categoryModel::count();
        return view("admin.category.categoryPage", [
            'allCategoryInfo' => $allCategoryInfo,
            'allCategoryCount' => $allCategoryCount,
        ]);
    }


    function catagoryInsert(Request $req)
    {
        $req->validate([
            'categoryName' => 'required',
            'categoryImg' => 'mimes:jpg,bmp,png',
            'categoryImg' => 'file|max:5000',
            'categoryImg' => 'required',
        ], [
            'categoryName.required' => "Please, Enter the Category Name",
            'categoryImg.required' => "Please, Select the Category Image",
        ]);





        $category_id = categoryModel::insertGetId([
            'categoryName' => $req->categoryName,
            'added_by' => Auth::id(),
            'created_at' => Carbon::now(),
        ]);

        $category_img = $req->categoryImg;
        $extention = $category_img->getClientOriginalExtension();
        // $fileName = $category_id.".".$extention;

        $after_replace = str_replace('', '-', $req->categoryName);
        $fileName = Str::lower($after_replace) . "-" . rand(1000000, 199999) . "." . $extention;
        Image::make($category_img)->save(public_path('uploads/category/' . $fileName));

        categoryModel::find($category_id)->update([
            'categoryImg' => $fileName,
        ]);





        return back()->with('CategoryinsertSuccess', "Insert Success");
    }


    function categoryEditPage($cataId)
    {

        $allCategoryInfo = categoryModel::where("id", $cataId)->get();
        return view("admin.category.categoryEditPage", [
            'allCategoryInfo' => $allCategoryInfo,
        ]);
    }



    function categoryUpdate(Request $req)
    {
        $getImg = $req->categoryImg;

        if ($getImg == "") {
            categoryModel::find($req->catId)->update([
                'categoryName' => $req->categoryName,
                'added_by' => Auth::id(),
                'created_at' => Carbon::now(),
            ]);

            return back();
        } else {


            if (categoryModel::where("id", $req->catId)->first()->categoryImg == null) {


                $category_img = $req->categoryImg;
                $extention = $category_img->getClientOriginalExtension();
                // $fileName = $category_id.".".$extention;

                $after_replace = str_replace('', '-', $req->categoryName);
                $fileName = Str::lower($after_replace) . "-" . rand(1000000, 199999) . "." . $extention;
                Image::make($category_img)->save(public_path('uploads/category/' . $fileName));


                categoryModel::find($req->catId)->update([
                    'categoryName' => $req->categoryName,
                    'added_by' => Auth::id(),
                    'created_at' => Carbon::now(),
                    'categoryImg' => $fileName,
                    
                ]);

                return back()->with("CategoryUpdate", "Update Success!!");
            } else {

                $delete_pic = public_path('uploads/category/' . categoryModel::where("id", $req->catId)->first()->categoryImg);
                unlink($delete_pic);

                $category_img = $req->categoryImg;
                $extention = $category_img->getClientOriginalExtension();
                // $fileName = $category_id.".".$extention;

                $after_replace = str_replace('', '-', $req->categoryName);
                $fileName = Str::lower($after_replace) . "-" . rand(1000000, 199999) . "." . $extention;
                Image::make($category_img)->save(public_path('uploads/category/' . $fileName));
                


                categoryModel::find($req->catId)->update([
                    'categoryName' => $req->categoryName,
                    'added_by' => Auth::id(),
                    'created_at' => Carbon::now(),
                    'categoryImg' => $fileName,
                ]);

                return back()->with("CategoryUpdate", "Update Success!!");
            }
        }
    }
}
