<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return $this->category->all();
    }
    public function show($id)
    {
        return $this->category->find($id);
    }
    public function store(Request $request)
    {
        return $this->category->create($request->all());
    }
    public function update(Request $request, $id)
    {
        return $this->category->update($request->all(), $id);
    }
    public function destroy($id)
    {
        return $this->category->delete($id);
    }
}
