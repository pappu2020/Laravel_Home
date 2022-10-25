<?php

namespace App\Http\Controllers;

use App\Models\aboutMeSectionDesModel;
use App\Models\aboutMeSectionModel;
use App\Models\customerQuotesModel;
use App\Models\homeSecSocialModel;
use App\Models\homeSectionModel;
use App\Models\recentWorkModel;
use App\Models\recentWorkNumberModel;
use App\Models\serviceSectionModel;
use Illuminate\Http\Request;

class clientPageController extends Controller
{
    function clientPage(){
        $homeAllDataClient = homeSectionModel::all();
        $homeAllSocialDataClient = homeSecSocialModel::all();
        $AllaboutSecData = aboutMeSectionModel::all();
        $AllaboutSecDescriptionData = aboutMeSectionDesModel::all();
        $AllServiceSectionData = serviceSectionModel::all();
        $AllrecentData = recentWorkModel::all();
        $AllrecentWorkData = recentWorkNumberModel::all();
        $AllcustomerData = customerQuotesModel::all();
        return view("admin.clientPage.clientPage",[
            'homeAllDataClient' => $homeAllDataClient,
            'homeAllSocialDataClient' => $homeAllSocialDataClient,
            'AllaboutSecData' => $AllaboutSecData,
            'AllaboutSecDescriptionData' => $AllaboutSecDescriptionData,
            'AllServiceSectionData' => $AllServiceSectionData,
            'AllrecentData' => $AllrecentData,
            'AllrecentWorkData' => $AllrecentWorkData,
            'AllcustomerData' => $AllcustomerData,
        ]);
    }
}
