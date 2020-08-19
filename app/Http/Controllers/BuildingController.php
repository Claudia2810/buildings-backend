<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        return response()->json([
            'errors' => false,
            'status' => 200,
            'data' => Materials::all(),
        ],200);
    }

    public function store(Request $request)
    {
        $materials = Materials::create($request->all());

        
        return response()->json([
            'errors' => false,
            'status' => 200,
            'message' => 'Successfully saved Address',
            'data' => $materials,
        ],200);
    }

    public function show($id) 
    {
        $materials = Materials::where('id', $id)->first();

        if ($materials){
            return response()->json([
                'errors' => false,
                'status' => 200,
                'data' => $materials,
            ],200);
        }else{
            return response()->json([
                'errors' => true,
                'status' => 404,
                'message' => 'Materials not found',
                'data' => [],
            ],404);
        }
    }

    public function update(Request $request, $id)
    {
        $materials = Materials::where('id', $id)->first();
        $materials->update($request->all());

        return response()->json([
            'errors' => false,
            'status' => 200,
            'message' => 'Materials edited',
            'data' => $materials,
        ],200);

    }

    public function destroy($id)
    {
        $materials = Materials::where('id', $id)->first();
        $materials->delete();

        return response()->json([
            'errors' => false,
            'status' => 200,
            'message' => 'Materials deleted',
            'data' => $materials,
        ],200);
    }
}
