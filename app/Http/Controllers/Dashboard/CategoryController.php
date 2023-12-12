<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Repository\CategoryRepository;
use App\Repository\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;

    Public function __construct( CategoryRepositoryInterface $categories)
    {
     $this->categories=$categories;
    }

    public function index()
    {
       return $this->categories->index();

    }


    public function create()
    {
       return $this->categories->create();
    }


    public function store(StoreCategoryRequest $request)
    {
        return $this->categories->store($request);

    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        return $this->categories->edit($id);
    }


    public function update(StoreCategoryRequest $request)
    {
        return $this->categories->update($request);
    }



    public function destroy(string $id)
    {
       return $this->categories->destroy($id);
    }
}
