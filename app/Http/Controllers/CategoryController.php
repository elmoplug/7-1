<?php

namespace App\Models;
use App\Models\Category;

public function index(Category $category)
{
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
}