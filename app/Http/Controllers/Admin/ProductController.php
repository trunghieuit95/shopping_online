<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list' => Product::select('products.*')
            		->join('cate','products.cate_id', '=','cate.id')
                    ->select('products.*', 'cate.name as cate_name')
                    ->get()
        ];
        return view('admin.product.index',$data);
        //die('x');
    }
    // public function create()
    // {
    //     $data = array(
    //         'cate' => Category::select('cate.*')
    //                         ->get()
    //     );
    //     //traverse_backwards();
    //     return view('admin.cate.add',$data);
    // }
    // public function store(Request $request)
    // {
    //     $data = [
    //         'name'         => $request->name,
    //         'parent_id'      => $request->parent_id
    //     ];

    //     $sound = Category::create($data);
    //     return redirect()->route('cate.index');
    // }

    // public function edit($id)
    // {
    //     $detail = Category::find((int)$id);
    //     if(!$detail){
    //         abort(503);
    //     }
    //     $data = [
    //         'detail' => $detail
    //     ];
    //     $data2 = array(
    //         'cate' => Category::select('cate.*')
    //                         ->get()
    //     );
    //     return view('admin.cate.edit',$data,$data2);
    // }
    // public function update(Request $request, $id)
    // {
    //     $detail = Category::find($id);
    //     if(!$detail){
    //         abort(503);
    //     }
    //     $data = [
    //         'name'         => $request->name,
    //         'parent_id'    => $request->parent_id
    //     ];
    //     $detail->update($data);
    //     return redirect()->route('cate.index');
    //     //die($request->name);
    // }
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('cate.index');
    }


}
