<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{
    public function category()
    {
        $cat= ProjectCategory::all();

        return view('pages.portfolio',compact('cat'));
    }
}