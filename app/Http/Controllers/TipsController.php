<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChineseTip;
use App\Models\JapaneseTip;
use App\Models\GreekTip;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class TipsController extends Controller
{
    /**
     * @OA\Get(
     *   path="/tips/all",
     *   operationId="/tips/all",
     *   tags={"tips"},
     *   summary="Retrieve all tips",
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

    public function index(): JsonResponse
    {
        $chinese = ChineseTip::where('proverb', '!=', null)->get();
        $greek = GreekTip::where('proverb', '!=', null)->get();

        $proverb = $greek->merge($chinese);

        return response()->json([
            'proverbs' => $proverb
        ]);
    }

    /**
     * @OA\Get(
     *   path="/tips/{id}",
     *   operationId="/tips/{id}",
     *   tags={"tips"},
     *   summary="Retrieve a specific tip",
     *   description="Returns a specific tip, regardless of its language or origin.",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="The id of the tip",
     *     required=true,
     *     @OA\Schema(
     *       type="integer",
     *       format="int64"
     *     )
     *   ),
     *   @OA\Response(
     *     response="200",
     *     description="The requested tip",
     *   ),
     *   @OA\Response( 
     *     response="404",
     *     description="Not Found"
     *   )
     * )
     )
    */

    public function show($id): JsonResponse
    {
        $chinese = ChineseTip::where('proverb', '!=', null)->get();
        $greek = GreekTip::where('proverb', '!=', null)->get();

        $tips = $chinese->merge($greek);

        $res = $tips->where('id', $id)->first();

        if (!$res) {
            return response()->json([
                'message' => 'proverb not found'
            ], 404);
        }
        return response()->json([
            'proverb' => $res
        ]);
    }

    public function redirectTips(): RedirectResponse
    {
        return redirect('api/v1/tips/all');
    }

    public function redirectDocs(): RedirectResponse
    {
        return redirect('api/v1/docs');
    }

    public function docs()
    {
        return response()->json('docs');
    }
}
