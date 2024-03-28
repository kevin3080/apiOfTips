<?php

namespace App\Http\Controllers;

use App\Models\GreekTip;
use Illuminate\Http\JsonResponse;

 /**
     * @OA\Get(
     *   path="/tips/greek-tips",
     *   operationId="/tips/greek-tips",
     *   tags={"tips"},
     *   summary="Retrieve tips in Greek",
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

class GreekTipController extends Controller
{

    public function index(): JsonResponse
    {
        $greekTips = GreekTip::all();
        return response()->json(['provers' => $greekTips]);
    }

}
