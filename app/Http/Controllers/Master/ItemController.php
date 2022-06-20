<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $datas = MItem::get();

        return response()->json([
            'status' => 'success',
            'data' => $datas
        ], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = new MItem();
            $data->name = $request->name;
            $data->save();
            
            DB::commit();
            Log::debug('store item success');
            return response()->json([
                'status' => 'success',
                'data' => $data
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function show(Request $request)
    {
        try {
            $data = MItem::findOrFail($request->id);

            Log::debug('get item success');
            return response()->json([
                'status' => 'success',
                'data' => $data
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = MItem::findOrFail($request->id);
            $data->name = $request->name;
            $data->save();

            DB::commit();
            Log::debug('update item success');
            return response()->json([
                'status' => 'success',
                'data' => $data
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function delete(Request $request)
    {
        DB::beginTransaction();
        try {
            MItem::findOrFail($request->id)->delete();

            DB::commit();
            Log::debug('delete item success');
            return response()->json([
                'status' => 'success'
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }        
    }
}
