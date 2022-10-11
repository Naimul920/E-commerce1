<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories;
    public $category;
    public function index()
    {
        return view('admin.category.add');
    }
    public function create(Request $request)
    {
        Category::newCategory($request);

        return redirect()->back()->with('message', 'Category create successfull');
    }
    public function manage()
    {
        $this->categories= Category::orderBy('id' , 'DESC' )->get();

        return view('admin.category.manage',['categories'=>$this->categories]);
    }
    public function edit($id)
    {
        $this->category= Category::find($id);
        return view('admin.category.edit', ['category'=>$this->category]);
    }
    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category update successfull');
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'Category delete successfull');
    }
}
