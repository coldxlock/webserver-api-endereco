# API em PHP para consultas de CEPs e endereços

## Instalação

``` bash
git clone https://github.com/priscocleyton/webserver-api-endereco.git

```

```
1 - Clona o projeto dentro do seu apache (exemplo: pasta htdocs) .
2 - Utilize o postman para testar.
```

## Como funciona

Há depois modo de consulta, você pode utilizar a buscar por cep ou utilizar parte de um endereço e a API retornará o conteúdo
completo caso exista, caso não, retornará uma mensagem de erro. 

Essa API utiliza como fonte de dados o viacep para mais praticidade.

## EndPoint
```
GET    = /cep/:param1 						|	Retorna o Endereço pelo CEP   
GET    = /endereco/:param1/:param2/:param3 	| 	Retorna o Endereço Completo pelo UF, Cidade, Rua    
```

## Retornos:
```
{
    "cep": "91420-270",
    "logradouro": "Rua São Domingos",
    "complemento": "",
    "bairro": "Bom Jesus",
    "localidade": "Porto Alegre",
    "uf": "RS",
    "ibge": "4314902",
    "gia": "",
    "ddd": "51",
    "siafi": "8801"
}
```

## Exemplos de uso

Utilize o postman com a seguinte url para consultar endereço pelo CEP. 
Exemplo: 
```http://localhost/webserver-api-endereco/api/cep/64002690```

Utilize o postman com a seguinte url para consultar endereço completo usando parte do mesmo (Estado/Cidade/Rua respectivamente). 
Exemplo: 
```http://localhost/webserver-api-endereco/api/endereco/pi/teresina/artur+passos```


## Autor

Prisco Cleyton 
