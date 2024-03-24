<?php

namespace App\Http\Controllers;

use App\Models\JapaneseTip;
use Illuminate\Http\JsonResponse;

class JapaneseTipController extends Controller
{
    public function index(): JsonResponse
    {
        /* $japaneseTips = JapaneseTip::all();
        return $japaneseTips; */
        return response()->json(['message' => 'japanese tips']);
    }
}
