<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Tiendas;
use App\Models\Producto;
use App\Models\Nivels;
use App\Request\Validar;


class SistemaController extends Controller
{
    public function usuarios(){
    
        $usuarios_a = Usuarios:: all();
        $usuarios_b= \DB::select ('SELECT * FROM usuario');
        return view ("lista_usuario")
        ->with(['usuarios1' =>$usuarios_a])
        ->with(['usuarios2' =>$usuarios_b]);
}
public function nivels(){
    $niveles_a= Nivels:: all();
    $niveles_b= \DB::select ('SELECT * FROM nivel');
    return view ("lista_nivel")
    ->with(['nivel1' =>$niveles_a])
    ->with(['nivel2' =>$niveles_b]);
}
public function tiendas(){
    $tiendas_a = Tiendas:: all();
    $tiendas_b= \DB::select ('SELECT * FROM tienda');
    return view ("lista_tiendas")
    ->with(['tienda1' =>$tiendas_a])
    ->with(['tienda2' =>$tiendas_b]);
}
public function producto(){
    $productos_a = Producto:: all();
    $productos_b= \DB::select ('SELECT * FROM productos');
    return view ("lista_producto")
    ->with(['producto1' =>$productos_a])
    ->with(['producto2' =>$productos_b]);
}
public function detalle($id_usuario){
    $usuario=Usuarios::find($id_usuario);
    return view ("detalle")
    ->with(['detalle'=> $usuario]);
}
public function altau(){
    $niveles=Nivels::all();
    return view("formu")
    ->with(['nivels' =>$niveles]);
}


public function registro (Request $request){
    $this->validate($request,[
        'matricula' => 'required',
        'nombreu' => 'required',
        'app' => 'required',
        'apm' => 'required',
        'fech_nac' => 'required',
        'genero' => 'required',
        'email' => 'required',
        'pass' => 'required',
        'nivel' => 'required',
        'activo' => '1'

    ]);
    Usuarios::create(array(
'matricula'=> $request->input('matricula'),
'nombreu'=> $request->input('nombreu'),
'app'=> $request->input('app'),
'apm'=> $request->input('apm'),
'fech_nac'=> $request->input('fech_nac'),
'genero'=> $request->input('genero'),
'foto'=> $request->input('foto'),
'email'=> $request->input('email'),
'pass'=> $request->input('pass'),
'nivel'=> $request->input('nivel'),
'activo'=> '1'
    ));
    return redirect()->route('lista_usuario');
}
public function editar (usuarios $id_usuario){
    $niveles=Nivels::all();
    
    return view ("editar")
    ->with(['usuarios' =>$id_usuario])
    ->with(['nivels' =>$niveles]);
}
public function salvar (Usuarios $id_usuario,Request $request){
    //dd($request->all());
    $query =Usuarios::find($id_usuario-> id_usuario);
    $query->matricula=$request->matricula;
    $query->nombreu=trim($request->nombreu);
    $query->app=trim($request->app);
    $query->apm=trim($request->apm);
    $query->fech_nac=$request->fech_nac;
    $query->genero=$request->genero;
    $query->foto=trim($request->foto);
    $query->email=trim($request->email);
    $query->pass=trim($request->pass);
    $query->nivel=$request->nivel;
    $query->activo=$request->activo;
    $query -> save();
    return redirect()->route("editar",['id_usuario'=>$id_usuario->id_usuario]);
}
public function  borrar  (Usuarios $id_usuario){
    \Storage::disk('local')->delete ($id_usuario->foto);

    $id_usuario->delete();
    return redirect()->route("lista_usuario");
}
//--------------------------------NIVEL----------------------------------------------------

public function detalleni($id_nivel){
    $nivel=Nivels::find($id_nivel);
    return view ("detalleni")
    ->with(['detalleni'=> $nivel]);
}
public function altani(){
    $niveles=Nivels::all();
    return view("formni")
    ->with(['nivels' =>$niveles]);
}
public function registroni (Request $request){
    $this->validate($request,[
        'nivel' => 'required',
        'clave' => 'required',
        'nombre' => 'required',
        'activo' => '1'
        

    ]);
    Nivels::create(array(
'nivel'=> $request->input('nivel'),
'clave'=> $request->input('clave'),
'nombre'=> $request->input('nombre'),
'activo'=> '1'
    ));
    return redirect()->route('lista_nivel');
}
public function editarni (nivels $id_nivel){
    $niveles=Nivels::all();
    return view ("editarni")
    ->with(['niveles' =>$id_nivel])
    ->with(['nivels' =>$niveles]);
}
public function salvarni (Nivels $id_nivel,Request $request){
    $query =Nivels::find($id_nivel-> id_nivel);
    $query->nivel=$request->nivel;
    $query->clave=$request->clave;
    $query->nombre=trim($request->nombre);
    $query->activo=$request->activo;
    $query -> save();
    return redirect()->route("editarni",['id_nivel'=>$id_nivel->id_nivel]);
    
}
public function  borrarni  (Nivels $id_nivel){
    \Storage::disk('local')->delete ($id_nivel);

    $id_nivel->delete();
    return redirect()->route("lista_nivel");
}

//-----------------------------------tienda---------------------------------------------------
public function detalletien($id_tienda){
    $tiendas=Tiendas::find($id_tienda);
    return view ("detalletien")
    ->with(['detalletien'=> $tiendas]);
}
public function altati(){
    $tiendas=Tiendas::all();
    return view("formtienda")
    ->with(['tiendas' =>$tiendas]);
}
public function registrotien (Request $request){
    $this->validate($request,[
        'clave' => 'required',
        'nombret' => 'required',
        'activo' => '1'
    ]);
    Nivels::create(array(
'clave'=> $request->input('clave'),
'nombret'=> $request->input('nombret'),
'foto'=> $request->input('foto'),
    ));
    return redirect()->route('lista_tiendas');
}

public function editartien (tiendas $id_tienda){
    $tienda=Tiendas::all();
    return view ("editartien")
    ->with(['tienda' =>$id_tienda])
    ->with(['tiendas' =>$tienda]);
}

public function salvartien (Tiendas $id_tienda,Request $request){
    $query =Tiendas::find($id_tienda-> id_tienda);
    $query->clave=$request->clave;
    $query->nombret=trim($request->nombret);
    $query->foto=trim($request->foto);
    $query -> save();
    return redirect()->route("editartien",['id_tienda'=>$id_tienda->id_tienda]);
}
public function  borrartien  (Tiendas $id_tienda){
    \Storage::disk('local')->delete ($id_tienda->foto);

    $id_tienda->delete();
    return redirect()->route("lista_tiendas");
}

//------------------------PRODUCTOS------------------------------------------
public function detallepro($id_productos){
    $producto=Producto::find($id_productos);
    return view ("detallepro")
    ->with(['detallepro'=> $producto]);
}
public function altap(){
    $tienda=Tiendas::all();
    $niveles=Nivels::all();
    return view("formp")
    ->with(['tienda' =>$tienda])
    ->with(['nivels' =>$niveles]);
}
public function registropro (Request $request){
    $this->validate($request,[
        'codigo' => 'required',
        'nombrep' => 'required',
        'cantidad' => 'required',
        'costo' => 'required',
        'id_tipo' => 'required',
        'id_tienda' => 'required',
        'activo' => '1'
    ]);
    Nivels::create(array(
'codigo'=> $request->input('codigo'),
'nombrep'=> $request->input('nombrep'),
'cantidad'=> $request->input('cantidad'),
'costo'=> $request->input('costo'),
'id_tipo'=> $request->input('id_tipo'),
'id_tienda'=> $request->input('id_tienda'),
'foto'=> $request->input('foto'),
'activo'=> '1'
    ));
    return redirect()->route('lista_producto');
}
public function editarpro (producto $id_productos){
    $tienda=Tiendas::all();
    $niveles=Nivels::all();
    return view ("editarpro")
    ->with(['producto' =>$id_productos])
    ->with(['tienda' =>$tienda])
    ->with(['nivels' =>$niveles]);
}
public function salvarpro (Producto $id_productos,Request $request){
    $query =Producto::find($id_productos-> id_productos);
    $query->codigo=$request->codigo;
    $query->nombrep=trim($request->nombrep);
    $query->cantidad=trim($request->cantidad);
    $query->costo=trim($request->costo);
    $query->id_tipo=trim($request->id_tipo);
    $query->id_tienda=trim($request->id_tienda);
    $query->activo=$request->activo;
    $query->foto=trim($request->foto);
    $query -> save();
    return redirect()->route("editarpro",['id_productos'=>$id_productos->id_productos]);
}
public function  borrarpro (Producto $id_productos){
    \Storage::disk('local')->delete ($id_productos->foto);

    $id_productos->delete();
    return redirect()->route("lista_producto");
}
}