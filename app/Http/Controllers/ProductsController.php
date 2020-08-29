<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Category;
use Image;
use App\Product;
use DB;

class ProductsController extends Controller
{

        private $product;


        public function __construct(Product $product)
        {
            $this->product = $product;
            
        }
     public function add (Request $request) {
        $product = new Product();
        $product->nombre = $request->nombre;
        $product->codigo = $request->codigo;
        $product->precio = $request->precio;
        $product->existencia = $request->existencia;
        $product->empaque = $request->empaque;
        $product->save();
        $message = "Producto fue creado exitosamente.";

        return response()->json($message);

    }

    public function view ($id) {
        //$product = Product::find($id);
        $product    = $this->product->find($id);

         return response()->json($product);
    }

    public function edit (Request $request) {
        $product = Product::find($request->id);
        $product->title = $request->title;
        $product->description = $request->description;
        

        $product->save();
        $product->categories()->attach($request->input('category_id'));
        $message = "Categoría fue editada exitosamente.";

        return response()->json($message);
    }

       public function editProduct ($id) {
        //dd($id);
        $categorias = Category::all();
        $productos = Product::all();
        $product    = $this->product->find($id);
        //$categories = Category::get()->pluck('id','title')->sort();
        $categories = DB::table('categories')->pluck('title','id')->sort();
        //dd($categories);

        return view('products.list',compact('categorias','productos','categories','product') );
    }

    public function update (Request $request) {
        $product = Product::find($request->id);
        $product->title = $request->title;
        $product->description = $request->description;
        

        $product->save();
        $product->categories()->sync($request->input('category_id'));
       

        $categorias = Category::all();
        $productos = Product::all();
        $product    = $this->product->find($request->id);
        
        $categories = DB::table('categories')->pluck('title','id')->sort();
        

        return view('products.list',compact('categorias','productos','categories','product') );
    }



    public function remove ($id) {
        $product = Product::find($id);
    
        $product->delete();
        $categorias = Category::all();
        $productos = Product::all();
        $product    = $this->product->all();
        //$categories = Category::get()->pluck('id','title')->sort();
        $categories = DB::table('categories')->pluck('title','id')->sort();
        //dd($categories);

        return view('categories.list',compact('categorias','productos','categories','product') );
    }
}
