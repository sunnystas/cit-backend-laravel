<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Http\Controllers\Controller;
use App\Http\Models\IssueCategory;
use App\Http\Models\IssueStatus;
use App\Http\Models\IssuePriority;

class CommonDataController extends Controller
{
    public function getCityInfo() {
        // @todo extract city ID and active lang from the session, and extract localized city data
        return response()->json([
            "cityInfo" => [
                "name" => "City Name",
                "lat" => "47.884309",
                "lng" => "33.385954",
                "picUri" => "http://dnipro.cityonline.com.ua/media/dnipro.cityonline.com.ua/img/gerb.png",
            ]
        ]);
    }

    public function getStreets() {
        return response()->json([
            "streets" => [
                [
                    "id" => 1, 
                    "name" => "test1"
                ],
                [
                    "id" => 2, 
                    "name" => "test2"
                ],
                [
                    "id" => 3, 
                    "name" => "test3"
                ],
                [
                    "id" => 4, 
                    "name" => "test4"
                ],
                [
                    "id" => 5, 
                    "name" => "test5"
                ],
            ]
        ]);
    }

    public function getIssueCategories() {
        $lang = 'ua';
        $resultArr = [];
        $issueCategories = IssueCategory::select('*', 'name_' . $lang . ' as name')->get();
        foreach ($issueCategories as $k => $ic) {
            $arr = [];
            foreach ($issueCategories as $j => $icInner) {
                if ($icInner->parent_id == $ic->id) {
                    $arr[] = $icInner;
                    unset($issueCategories[$j]);
                }
                unset($ic->parent_id);
            }
            if (count($arr) > 0) {
                $ic->subCategories = $arr;
            }
            $resultArr[] = $ic;
        }
        
        return response()->json($issueCategories);
    }

    public function getIssueStatuses() {
        $lang = 'ua';
        $issueStatuses = IssueStatus::select('*', 'name_' . $lang . ' as name')->get();
        return response()->json($issueStatuses);
    }

    public function getIssuePriorities() {
        $lang = 'ua';
        $issuePriorities = IssuePriority::select('*', 'name_' . $lang . ' as name')->get();
        return response()->json($issuePriorities);
    }

}
