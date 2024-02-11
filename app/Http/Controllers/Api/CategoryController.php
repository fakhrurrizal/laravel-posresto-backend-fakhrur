<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        //get all category
        $category = Category::all();
        // $category = Category::paginate(10);
        return response()->json([
            'status' => 'success',
            'data' => $category
        ], 200);
    }
}
