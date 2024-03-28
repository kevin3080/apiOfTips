<?php

namespace App\Http\Controllers;

use App\Models\ChineseTip;
use Illuminate\Http\JsonResponse;

/**
     * @OA\Get(
     *   path="/tips/chinese-tips",
     *   operationId="/tips/chinese-tips",
     *   tags={"tips"},
     *   summary="Retrieve tips in Chinese",
     *   description="Returns a list of all tips, regardless of their language or origin.",
     *   @OA\Response(
     *     response="200",
     *     description="A collection of tips",
     *   
     *   ),
     *   @OA\Response(
     *     response="404",
     *     description="Not Found"
     *   )
     * )
    */

class ChineseTipController extends Controller
{

    public function index(): JsonResponse
    {
        $chineseTips = ChineseTip::where('proverb', '!=', null)->get();
        return response()->json(['proverbs' => $chineseTips]);
    }

}
