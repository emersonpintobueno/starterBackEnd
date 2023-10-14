# Desafio Starter Hostgator

## Descrição

Esta Api foi desenvolvida, baseando-se na arquitetura **MVC** (Model-View-Controller), com o 
intuito de prover as funcionalidades solicitadas na documentação dos parâmetros dos 
testes.
Ela irá realizar uma pesquisa da API Fipe, e trazer as marcas encontradas, com base nos dados
informados na (URL), pelo usuário. 
<p>
Foi criado um subdomínio no cPanel de minha hospedagem e uma aplicação Git para comunicar-se
diretamente com o repositório da API e facilitar seu gerenciamento. Sua programação foi 
desenvolvida através da versão estudantil do PHPStorm e xDebug, com PHP 8.1.

## Documentação
Além dos arquivos padrões MVC a API é composta de basicamente 3 arquivos:
- **index.php**: Onde ficaram concentradas as chamadas e retornos a serem passados 
para as pesquisas.
- **MarcaModel.php**: Onde centralizamos a tratativa de obtenção dos dados da API original, 
bem como os erros que por ventura possam ocorrer.
- **MarcaService.php**: Que ficou com a função de receber os dados a serem pesquisados e
repassá-los para consulta. Poderia ser suprimido, porém, optou-se por manter para não fugir
do padrão MVC.

### Endpoint 1

- **Descrição**: Endpoint de pesquisa da marca. A mesma irá pesquisar pela marca informada na 
URL, sem distinção de caracteres maiúsculos ou minúsculos, trazendo resultados parciais inclusos. 
- **Método HTTP**: GET
- **URL**: `https://api.meuimbigo.com.br/public/`
- **Parâmetros**:
    - `marca`: Parâmetro onde deverá ser inserida a marca do veículo a ser pesquisado.
- **Retornos Possíveis**:
    - `200`: Consulta realizada com sucesso.
    - `400`: Parâmetro ausente na consulta, **marca** não informada.
    - `500`: Erro de comunicação com a API de origem.
- **Exemplo de Requisição**:
>CURL -X GET https://api.meuimbigo.com.br/public/?marca=BMW

### Endpoint 2
Não foram configurados outros endpoints.

---
# English Readme
# Starter Hostgator Chalenge

## Description

This API has been developed, based on architecture **MVC** (Model-View-Controller), and has 
been intended to provide the requested functionalities on the project documentation. 
The API will search in the Fipe API, and bring all the markers found, based on the data 
provided by the user. 
<p>
A subdomain has been created on the cPanel from my host plan and a application Git has been
configured to easy the purpose of managing the files from project. The application has been 
developed using a licensed student PHPStorm and xDebug, whit PHP 8.1.

## Documentation
Besides the needed files from MVC, the API has ben composed by the 3 files:
- **index.php**: In this file we concentrate the calls and returns to be passed 
for the search.
- **MarcaModel.php**: Here we will be focused on the rules from business as well in the correct
management of the potentially errors who can came. 
- **MarcaService.php**: This one has been responsible to receive the search data e follow 
these data to the search function. In truth this can be suppressed, but, has been opted to
maintain this file, to keep on the MVC plataform model.

### Endpoint 1

- **Description**: Endpoint to search for the car makers. This will search on the API Fipe
for the desired brand, and bring all the results found. The search has been developed
to ignore sensitive case on the brands name, and will bring partials results too.
- **HTTP Method**: GET
- **URL**: `https://api.meuimbigo.com.br/public/`
- **Parameters**:
  - `marca`: Parameter where the brand of the vehicle to be searched must be entered.
- **Possible Returns**:
  - `200`: Result successfully found.
  - `400`: Parameter missing, **marca** need to be informed.
  - `500`: Communication failure with the source API.
- **Request example**:
>CURL -X GET https://api.meuimbigo.com.br/public/?marca=BMW

### Endpoint 2
There no more endpoints created.