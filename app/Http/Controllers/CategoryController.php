<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct(Request $request)
    {
       if($request->is('category')){
            echo 'xin chào';
       }
       // Nếu là trang danh sách chuyên mục sẽ hiển thị ra dòng chữ xin chào unicode
    }
    // hiển thị danh sách chuyên mục pt get
    public function index(Request $request){
        return view('clients/category/list');
    }
    
    // phương thức get
    public function getCategory($id){
        return view('clients/category/edit');
    }
    // cập nhật chuyên mục phương thức post
    public function updateCategory($id){
        return 'Submit sửa chuyên mục'.$id;
    }
    public function showCategory(){
    return 'submit chyueen mục';
    }
    // Thêm dữ liệu vào chuyên mục phương thức post
    public function addCategory(Request $request){
        if($request->has('category_name')){
            $request->flash();
            // dd($cateName);
          return  redirect(route('category.add'));
        }
        else {
            return 'Không có category name';
        }
        $old = $request->old('category_name');
        return view('clients/category/add');
    }
    // Xóa dữ liệu bằng pt delete
    public function deleteCategory($id){
    }
    public function getFile(){
        return view('clients/category/file');
    }
    public function Handlefile(Request $request){
       // $file = $request->file();
       
        // dd($file);
        if ($request->hasFile('photo')){
            $file = $request->file();
        }
        else{
            return "chọn file";
        }
    }

}