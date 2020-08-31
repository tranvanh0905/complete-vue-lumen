<?php

namespace App\Http\Controllers;

use App\News;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Routing\Controller;
use Throwable;

class NewsController extends Controller {

    /**
     * @return JsonResponse
     */
    public function all() {
        $model = News::all();
        if ($model !== null) {
            return response()->json([
                'data' => $model,
            ], 200);
        }
        return response()->json([
            'message' => 'Not have value',
        ], 200);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     * @throws Throwable
     */
    public function create(Request $request) {
        $this->validate($request, [
            'title'       => 'required|string',
            'content'     => 'required|string',
            'category_id' => 'required',
        ]);
        $model = new News();
        DB::beginTransaction();
        try {
            $model->title       = $request->input('title');
            $model->content     = $request->input('content');
            $model->category_id = $request->input(['category_id']);
            $model->save();
            DB::commit();
            return response()->json([
                'data'    => $model,
                'message' => 'CREATED',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Something error',
            ], 500);
        }
    }

    /**
     * @param Request $request
     * @param         $id
     *
     * @return JsonResponse
     * @throws Throwable
     * @throws ValidationException
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'title'       => 'required|string',
            'content'     => 'required|string',
            'category_id' => 'required',
        ]);
        $model = News::whereId($id);
        if ($model !== null) {
            DB::beginTransaction();
            try {
                $model->update([
                    'title'       => $request->input('title'),
                    'content'     => $request->input('content'),
                    'category_id' => $request->input('category_id'),
                ]);
                DB::commit();
                return response()->json([
                    'data'    => $model,
                    'message' => 'UPDATED',
                ], 200);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json([
                    'message' => 'Something error',
                ], 500);
            }
        }
        return response()->json([
            'message' => 'Not have value',
        ], 200);
    }

    /**
     * @param $id
     *
     * @return JsonResponse
     */
    public function getOne($id) {
        $model = News::whereId($id);
        if ($model !== null) {
            return response()->json([
                'data'    => $model,
                'message' => 'GET',
            ], 200);
        }
        return response()->json([
            'message' => 'Not have value',
        ], 200);
    }
}
