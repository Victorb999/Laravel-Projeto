<?php

namespace App\Http\Controllers\Api;
use App\Noticia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticiaController extends Controller
{
    //
    private $noticia;

    public function __construct(Noticia $noticia){
        $this->noticia = $noticia;  
    }

    public function index(){
        $data = ['data'=> $this->noticia->all()];
        return  response()->json($data);
        //return $this->noticia::all();
    }

    public function show($id){
        //return $id;
        $noticia = $this->noticia->find($id);
        if(!$noticia){
            return response()->json(['msg'=> 'Produto não encontrado.'],404);
        }
        $data = ['data'=> $id];
        return  response()->json($data);
    }

    public function store(Request $request){
        //dd($request->all());
        try{            
            $noticiasData = $request->all();
            $this->noticia->create($noticiasData);
            return  response()->json(['msg'=> 'Notícia cadastrada com sucesso.'],201);
        } catch(\Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao tentar cadastrar.'],101);
            
        }
    }
    public function update(Request $request,$id){
        //dd($request->all());
        try{            
            $noticiasData = $request->all();
            $noticia = $this->noticia->find($id);
            $noticia->update($noticiasData);
            return  response()->json(['msg'=> 'Notícia atualizada com sucesso.'],200);
        } catch(\Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao tentar editar.'],1011);
            
        }
    }

    public function delete(Noticia $id){
        try{
            $id->delete();
            return  response()->json(['msg'=> 'Deletado com sucesso.'],200);
        }catch(\Exception $e){
                           
            return response()->json(['msg'=> 'Houve um erro ao remover.'],1012);
            
        }
        
    }
}
