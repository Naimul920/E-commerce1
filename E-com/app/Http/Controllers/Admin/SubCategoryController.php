<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public $subCategories;
    public $subCategory;
    public function index()
    {
        return view('admin.subcategory.add', ['categories'=>Category::all()]);
    }
    public function create(Request $request)
    {
        SubCategory::newSubCategory($request);

        return redirect()->back()->with('message', 'Sub-Category create successfull');
    }
    public function manage()
    {
        $this->subCategories= SubCategory::orderBy('id' , 'DESC' )->get();

        return view('admin.subcategory.manage',['subcategories'=>$this->subCategories]);
    }
    public function edit($id)
    {
        $this->subCategory= SubCategory::find($id);
        return view('admin.subcategory.edit', ['subcategory'=>$this->subCategory, 'categories'=>Category::all()]);
    }
    public function update(Request $request, $id)
    {
//        return $request->all();
        SubCategory::updateSubCategory($request, $id);
        return redirect('/manage-sub-category')->with('message', 'Sub-Category update successfull');
    }
    public function delete($id)
    {
        SubCategory::deleteCategory($id);
        return redirect('/manage-sub-category')->with('message', 'Sub-Category delete successfull');
    }
}
