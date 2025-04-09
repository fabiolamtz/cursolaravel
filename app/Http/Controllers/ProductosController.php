<?php

 namespace App\Http\Controllers;

 use App\Models\Productos;
 use Illuminate\Http\Request;

 class ProductosController extends Controller
 {
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         $productos = Productos::all();
         return view('productos.index', compact('productos'));
     }

     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         return view('productos.create');
     }

     /**
      * Store a newly created resource in storage.
      */
     public function store(Request $request)
     {
         $producto = Productos::create([
             'nombre' => $request->nombre,
             'descripcion' => $request->descripcion,
             'precio' => $request->precio,
             'stock' => $request->stock
         ]);

         return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
     }

     /**
      * Display the specified resource.
      */
     public function show($id)
     {
         $producto = Productos::findOrFail($id);
         return view('productos.show', compact('producto'));
     }

     /**
      * Show the form for editing the specified resource.
      */
     public function edit($id)
     {
         $producto = Productos::findOrFail($id);
         return view('productos.edit', compact('producto'));
     }

     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, string $id)
     {
         $producto = Productos::where('idProducto', $id)
         ->update([
             'nombre' => $request->nombre,
             'descripcion' => $request->descripcion,
             'precio' => $request->precio,
             'stock' => $request->stock
         ]);

         return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
     }

     /**
      * Remove the specified resource from storage.
      */
     public function destroy(string $id)
     {
         $producto = Productos::where('idProducto', $id)->delete();
         return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
     }
 }
