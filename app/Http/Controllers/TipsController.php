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
    public function index(): JsonResponse
    {
        $chinese = ChineseTip::where('proverb', '!=', null)->get();
        $greek = GreekTip::where('proverb', '!=', null)->get();

        $proverb = $greek->merge($chinese);

        return response()->json([
            'proverbs' => $proverb
        ]);
    }

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
