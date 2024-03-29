<?php

namespace App\Http\Controllers;

use App\Models\addColorModel;
use App\Models\addInventoryModel;
use App\Models\addSizeModel;
use Illuminate\Support\Str;
use App\Models\category;
use App\Models\productModel;
use App\Models\productThumbsnailModel;
use App\Models\subCategoryModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class productController extends Controller
{
    function productPage()
    {
        $categoryAllData = category::all();
        $subCategoryAllData = subCategoryModel::all();
        return view("admin.product.productPage", [
            'categoryAllData' => $categoryAllData,
            'subCategoryAllData' => $subCategoryAllData,
        ]);
    }




    function ProductPageCatESubInfo(Request $req)
    {

        $option =  '<option value="">--Select the Sub-Category--</option>';

        $subCategoriesAll_info = subCategoryModel::where("category_id", $req->category_id)->get();


        foreach ($subCategoriesAll_info as $subCategories_info) {
            $option .= '<option value="' . $subCategories_info->id . '">' . $subCategories_info->subCategoryName . '</option>';
        }

        echo $option;
    }


    function productInsert(Request $req)
    {
        $product_id = productModel::insertGetId([
            'product_name' => $req->product_name,
            'category_id' => $req->category_name,
            'Subcategory_id' => $req->Subcategory_name,
            'product_Price' => $req->product_Price,
            'product_Discount' => $req->product_Discount,
            'After_discount' => ($req->product_Price - ($req->product_Price * ($req->product_Discount / 100))),
            'product_Brand' => $req->product_Brand,
            'product_Short_desp' => $req->product_Short_desp,
            'product_Long_desp' => $req->product_Long_desp,

            'slug' => str_replace(" ", "-", Str::lower($req->product_name)) . '-' . rand(100000, 1999999),
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),

        ]);


        $getImage = $req->product_preview_img;

        $extension = $getImage->getClientOriginalExtension();

        $afterName = str_replace(" ", "-", $req->product_name);

        $fileName = Str::lower($afterName) . '-' . rand(100000, 1999999) . "." . $extension;
        Image::make($getImage)->save(public_path("uploads/products/preview/" . $fileName));


        productModel::find($product_id)->update([
            'product_preview_img' => $fileName,
        ]);



        $getThumbImages = $req->product_Thumbnails_img;

        foreach ($getThumbImages as $getThumbImage) {
            $extensionThumb = $getThumbImage->getClientOriginalExtension();
            $afterNameThumbs = str_replace(" ", "-", $req->product_name);

            $fileNameThumbs = Str::lower($afterNameThumbs) . '-' . rand(100000, 1999999) . "." . $extensionThumb;
            Image::make($getThumbImage)->save(public_path("uploads/products/thumbnails/" . $fileNameThumbs));


            productThumbsnailModel::insert([
                'product_id' =>  $product_id,
                'thumbs_images' => $fileNameThumbs,
            ]);
        }



        return back()->with("productInsertSuccess", "Insert Success");
    }






    function productViewPage()
    {


        
        $allProductsInfo = productModel::all();
        return view("admin.product.productViewPage", [
            'allProductsInfo' => $allProductsInfo,
        ]);
    }




    //inventory

    function addInventoryPage($product_id)
    {
        $productInfo = productModel::find($product_id);
        $colorInfo = addColorModel::all();
        $sizeInfo = addSizeModel::all();
        $inventoryInfo = addInventoryModel::where("product_id", $product_id)->get();


        return view("admin.inventory.addInventoryPage", [
            'productInfo' => $productInfo,
            'colorInfo' => $colorInfo,
            'sizeInfo' => $sizeInfo,
            'inventoryInfo' => $inventoryInfo,
        ]);
    }


    function inventoryInsert(Request $req)
    {

        if (addInventoryModel::where("product_id", $req->product_id)->where("Color_id", $req->selectcolor)->where("size_id", $req->selectSize)->where("size_id", $req->selectSize)->exists()) {
            addInventoryModel::where("product_id", $req->product_id)->where("Color_id", $req->selectcolor)->where("size_id", $req->selectSize)->where("size_id", $req->selectSize)->increment("Quantity", $req->quantity);
            return back();
        } else {
            addInventoryModel::insert([
                'product_id' => $req->product_id,
                'Color_id' => $req->selectcolor,
                'size_id' => $req->selectSize,
                'Quantity' => $req->quantity,
                'created_at' => Carbon::now(),
            ]);
            return back()->with("insertInventorySuccess", "Insert Success!!");
        }
    }














    //Delete

    function productDelete($productDeleteId)
    {

        $getProductImg = productModel::where("id", $productDeleteId)->first()->product_preview_img;
        $deleteProductFromFolder = public_path("uploads/products/preview/" . $getProductImg);

        unlink($deleteProductFromFolder);

        productModel::find($productDeleteId)->delete();


        $getThumbsId = productThumbsnailModel::where("product_id", $productDeleteId)->get();

        foreach ($getThumbsId as $getThumbId) {
            $deletethumbImgFromFolder = public_path("uploads/products/thumbnails/" . $getThumbId->thumbs_images);

            unlink($deletethumbImgFromFolder);

            productThumbsnailModel::find($getThumbId->id)->delete();
        }


        $getAllInventoryId = addInventoryModel::where("product_id", $productDeleteId)->get();

        foreach ($getAllInventoryId as $getInventoryId) {
            addInventoryModel::find($getInventoryId->id)->delete();
        }

        return back();
    }
}
