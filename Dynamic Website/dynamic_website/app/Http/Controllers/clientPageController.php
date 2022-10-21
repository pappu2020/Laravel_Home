<?php

namespace App\Http\Controllers;

use App\Models\homeSecSocialModel;
use App\Models\homeSectionModel;
use Illuminate\Http\Request;

class clientPageController extends Controller
{
    function clientPage(){
        $homeAllDataClient = homeSectionModel::all();
        $homeAllSocialDataClient = homeSecSocialModel::all();
        return view("admin.clientPage.clientPage",[
            'homeAllDataClient' => $homeAllDataClient,
            'homeAllSocialDataClient' => $homeAllSocialDataClient,
        ]);
    }
}
