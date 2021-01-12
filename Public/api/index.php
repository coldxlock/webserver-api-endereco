<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once("../../vendor/autoload.php");
use App\Controller\ApiCepController;
use App\Controller\ApiEnderecoController;

$controller = null;
$param1         = null; //Param
$param2         = null; //Param
$param3         = null; //Param
$method     = $_SERVER["REQUEST_METHOD"]; //POST, PUT, DELETE and GET
$uri = $_SERVER["REQUEST_URI"];
$data       = null;
parse_str(file_get_contents('php://input'), $data);


$unsetCount = 3;
//TRATA A URI
$ex = explode("/", $uri);
for($i = 0; $i < $unsetCount; $i++){
  unset($ex[$i]);
}

$ex = array_filter(array_values($ex));
if(isset($ex[0])){
  $controller = $ex[0];
}

if(isset($ex[1])){
  $param1 = $ex[1];
}

if(isset($ex[2])){
  $param2 = $ex[2];
}

if(isset($ex[3])){
  $param3 = $ex[3];
}
     
//FIM TRATA A URI
$apiCepController = new ApiCepController();
$apiEnderecoController = new ApiEnderecoController();

switch($method) {
  case 'GET':
  if ($controller != null && $param1 == null) {
    //nao irei listar todos os endereço 
    echo json_encode(["result" => "invalid"]);
  } elseif ($controller != null && $param1 != null){
    switch ($controller) {
      case 'cep':
        echo $apiCepController->readByCep($param1);
        break;
      case 'endereco':
        echo $apiEnderecoController->readByEndereco($param1,$param2,$param3);
        break;
      default:
        echo json_encode(["result" => "invalid"]);
        break;
    }




  } else {
    echo json_encode(["result" => "invalid"]);
  }
  break;

  case 'POST':
    echo json_encode(["result" => "invalid"]);
  
  break;

  case 'PUT':
    echo json_encode(["result" => "invalid"]);
  
  break;

  case 'DELETE':
   
      echo json_encode(["result" => "invalid"]);
    
  break;

  default:
    echo json_encode(["result" => "invalid resquest"]);
  break;
}

?>
