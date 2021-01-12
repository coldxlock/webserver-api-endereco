<?php
namespace App\Controller;


class ApiEnderecoController{


  public function __construct(){
  }
  //POST - Cria um novo 
  function create($data = null){
  
    return json_encode(["result" => "invalid"]);
  }

  //PUT - Altera 
  function update($id = 0, $data = null){

    return json_encode(["result" => "invalid"]);
  }

  //DELETE - Remove 
  function delete($id = 0){
   	return json_encode(["result" => "invalid"]);
  }

  //GET - Retorna 
  function readByEndereco($uf = null, $cidade = null, $rua){
   
    if($uf == null || $cidade == null || $rua == null)
      return json_encode(["result" => "invalid id"]);

  	
  	$json = file_get_contents('https://viacep.com.br/ws/'.$uf.'/'.$cidade.'/'.$rua.'/json/');

  	return $json;

  }

  //GET - Retorna todos 
  function readAll(){
    return json_encode(["result" => "invalid"]);
  }

 
}
