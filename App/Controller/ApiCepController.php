<?php
namespace App\Controller;

class ApiCepController{



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

  //GET - Retorna um game pelo ID
  function readByCep($cep = 0){
    $cep = filter_var($cep, FILTER_SANITIZE_NUMBER_INT);

    if($cep <= 0)
      return json_encode(["result" => "invalid id"]);

  	$cep = str_replace("-", "", $cep);
  	$json = file_get_contents('https://viacep.com.br/ws/'. $cep . '/json/');

  	return $json;

  }

  //GET - Retorna todos 
  function readAll(){
    return json_encode(["result" => "invalid"]);
  }

}
