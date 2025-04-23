<?php

 namespace App\Http\Controllers;

 use App\Models\Users;
 use App\Http\Requests\StoreUsuarioRequest;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\Validator;

 class UsersController extends Controller
 {
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         $usuario = Users::all();
         return view('usuarios.index', compact('usuario'));
     }

     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         return view('usuarios.create');
     }

     /**
      * Store a newly created resource in storage.
      */
     public function store(StoreUsuarioRequest $request)
     {
         $usuario = Users::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'ciudad' => $request->ciudad,
            'estado' => $request->estado,
            'codigo_postal' => $request->codigo_postal,
            'cargo' => $request->cargo
         ]);

         return redirect()->route('usuarios.index')->with('success', 'Usuario registrado correctamente.');
     }

     /**
      * Display the specified resource.
      */
     public function show($id)
     {
         $usuario = Users::findOrFail($id);
         return view('usuarios.show', compact('usuario'));
     }

     /**
      * Show the form for editing the specified resource.
      */
     public function edit($id)
     {
         $usuario = Users::findOrFail($id);
         return view('usuarios.edit', compact('usuario'));
     }

     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, string $id)
     {
         $usuario = Users::where('idUsuario', $id)
         ->update([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'ciudad' => $request->ciudad,
            'estado' => $request->estado,
            'codigo_postal' => $request->codigo_postal,
            'cargo' => $request->cargo
         ]);

         $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $usuario = Users::findOrFail($id);
        $usuario->password = Hash::make($request->password);
        $usuario->save();

         return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
     }

     /**
      * Remove the specified resource from storage.
      */
     public function destroy(string $id)
     {
         $usuario = Users::where('idUsuario', $id)->delete();
         return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
     }
 }

