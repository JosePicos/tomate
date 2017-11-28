<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpleadosController extends Controller
{
	
	public function index(){

		$empleados=Empleado::orderBy('id','ASC')->paginate(5);

		return view('empleado.index',compact('empleados'));
	}

	public function show($id){

		$product = Product::find($id);
		return view('products.show',compact('product'));
	}


	public function destroy($id){

		$product = Product::find($id);
		$product->delete();
		return back()->with('info', 'El producto fue eliminado');

	}
 		public function edit($id)
    {
        $product = Product::find($id);
        
        return view('products.edit', compact('product'));
    }



	    public function create()
    {
      return view('products.create');
    }


    public function store(ProductRequest $request){

			$product = new Product;

        	$product->name =$request->name;
        	$product->short =$request->short;
        	$product->body =$request->body;

        	$product->save();

        	return redirect()->route('products.index')
        					->with('info','El producto fue guardado');

    }

        public function update(ProductRequest $request,$id){

    	
        	$product = Product::find($id);

        	$product->name =$request->name;
        	$product->short =$request->short;
        	$product->body =$request->body;

        	$product->save();

        	return redirect()->route('products.index')
        					->with('info','El producto fue actualizado');

    	return 'producto actualizado'.$id;

    }
    
}
