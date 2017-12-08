<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\IssueCategory;
use App\Http\Models\IssueStatus;
use App\Http\Models\IssuePriority;
use App\Http\Models\City;
use App\Http\Models\Street;

class CommonDataController extends Controller
{
    public function getCities(Request $request) {
        $lang = 'ua';
        $cities = City::select('*', 'name_' . $lang . ' as name', 'pic_uri as picUri')->whereNotNull('lat')->whereNotNull('lng')->get();
        foreach ($cities as $city) {
            $city->picUri = $request->getSchemeAndHttpHost() . '/storage/' . $city->picUri;
        }
        return response()->json($cities);
    }
        
    public function getStreets(Request $request, $city_id) {
        $lang = 'ua';
        $streets = Street::select('*', 'name_' . $lang . ' as name')->where('city_id', $city_id)->get();
        return response()->json([
            'streets' => $streets
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
