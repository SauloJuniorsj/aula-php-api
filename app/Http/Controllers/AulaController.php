<?php

namespace App\Http\Controllers;

class AulaController extends Controller{
    public function show($id = null){
        echo 'Retorno do método ';
    }

    public function create(){
        echo 'Cria um recurso';
    }

    public function update($id){
        echo 'update o id : ' . $id;
    }

    public function destroy($id){
        echo 'destuir o id : ' . $id;
    }
}