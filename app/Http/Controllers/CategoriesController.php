<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(CategoryRepository $repository)
    {
        $categories = $repository->paginate(5);
        return view('admin.categories.index',['categories' => $categories]);
    }
}
