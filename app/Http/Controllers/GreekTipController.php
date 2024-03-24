<?php

namespace App\Http\Controllers;

use App\Models\GreekTip;
use Illuminate\Http\JsonResponse;



class GreekTipController extends Controller
{

    public function index(): JsonResponse
    {
        $greekTips = GreekTip::all();
        return response()->json(['provers' => $greekTips]);
    }

}
