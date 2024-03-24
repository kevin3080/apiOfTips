<?php

namespace App\Http\Controllers;

use App\Models\ChineseTip;
use Illuminate\Http\JsonResponse;

class ChineseTipController extends Controller
{

    public function index(): JsonResponse
    {
        $chineseTips = ChineseTip::where('proverb', '!=', null)->get();
        return response()->json(['proverbs' => $chineseTips]);
    }

}
