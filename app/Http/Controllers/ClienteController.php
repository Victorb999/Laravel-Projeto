<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $clientes = Cliente::all();
        //return view('clientes.index')->with(['clientes' => $clientes]);
        $paginar = 4;
        
        if(request()->has('paginar')){
            $paginar= request('paginar');
        }
        if(request()->has('busca') && request('busca')!= ''){
            $busca = request('busca');
            $clientes = DB::table('clientes')->where('nome','like','%'.$busca.'%')->paginate($paginar);
        }else{
            $clientes = DB::table('clientes')->paginate($paginar);
        }

        return view('clientes.index', ['clientes' => $clientes]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         Cliente::create($request -> all());
        
         return redirect()->route('cliente.index');
       
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     /**
     * Update the specified resource in storage.
     *    
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reprova($id){
        
        $cliente = Cliente::find($id);
        //echo $cliente->status;
        $cliente->status = 'reprovado';
        $cliente->dataStatus = date_create()->format('Y-m-d H:i:s');
        $cliente->save();
        return redirect()->route('cliente.index');
    }
    /**
     * Update the specified resource in storage.
     *    
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aprova($id){
        
        $cliente = Cliente::find($id);
        //echo $cliente->status;
        $cliente->status = 'aprovado';
        $cliente->dataStatus = date_create()->format('Y-m-d H:i:s');
        $cliente->save();
        return redirect()->route('cliente.index');
    }
}
