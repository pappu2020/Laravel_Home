<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\orderItemsModel;
use App\Models\reviewImagesModel;
use Illuminate\Http\Request;
use Image;

class customerReviewController extends Controller
{
    function reviewInsert(Request $req)
    {
        if ($req->reviewImage == "") {
            orderItemsModel::where("customer_id", $req->review_cus_id)->where("product_id", $req->review_product_id)->update([


                'review' => $req->review_des,
                'star' => $req->star,

            ]);

            return back();
        } else {
            $getreviewImages = $req->reviewImage;

            foreach ($getreviewImages as $getreviewImage) {
                $extensionReview = $getreviewImage->getClientOriginalExtension();
                

                $fileNameReview = $req->review_cus_id . '-' . rand(100000, 1999999) . "." . $extensionReview;
                Image::make($getreviewImage)->save(public_path("uploads/review/reviewImg/" . $fileNameReview));


                reviewImagesModel::insert([
                    'customer_id' =>  $req->review_cus_id,
                    'product_id' => $req->review_product_id,
                    'reviewImage' =>$fileNameReview,
                ]);

                orderItemsModel::where("customer_id", $req->review_cus_id)->where("product_id", $req->review_product_id)->update([


                    'review' => $req->review_des,
                    'star' => $req->star,

                ]);
            }


            return back();

            
        }
    }
}
