<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Product;
use Auth;

class ProductController extends Controller
{
    public function product(){
        return view('product.add-new-product');
    }

    public function addProduct(Request $request){
        $userId = Auth::id();

        $product = Product::create([
           'user_id'=>$userId,
            'product_name'=>$request->product_name,
            'product_sku'=>$request->product_sku,
            'product_quantity'=>$request->product_quantity,
            'product_price'=>$request->product_price,
            'product_description'=>$request->product_description
        ]);
        $product->save();
        $this->addImage($request);
        return response()->json([
            'success'=>true,
            'message'=>'successfully created product'
        ]);
    }

    private function addImage(Request $request){

        $this->validate($request, [
            'image_upload'  => 'image|mimes:jpg,png,gif|max:2048'
        ]);

        $getProductId = $this->getProductsId();

        for($i=0; $i<$request->TotalImages; $i++)
        {
            $destinationPath = public_path('/images/');
            $img=$request->file("images".$i);
            $profileImage =$img->getClientOriginalName();
            $getType = $img->getMimeType();
            $img->move($destinationPath, $profileImage);
            $imageModel= new Image();
            $imageModel->product_id = $getProductId;
            $imageModel->image_name="$profileImage";
            $imageModel->image_type="$getType";
            $imageModel->save();
        }

        return response()->json([
            'success' => true,
            'message' => 'Image successfully added'
        ]);
    }

    private function getProductsId(){
        $product = Product::latest()->first()->id;
        return $product;
    }

    public function showAllProduct(){
        $getAllProduct = Product::all();
        return view('product.show-all-product',compact('getAllProduct'));
    }

    public function openModal($id){
        $product = Product::find($id);
        return json_encode($product);
    }

    public function editProduct(Request $request){
        $editProduct = Product::find($request->input('product_id'))->update($request->all());
        return json_encode($editProduct);
    }

    public function deleteProduct($id){
        $delete = Product::find($id);
        $delete->delete();
        return $delete;
    }
}
