<?php
require_once '../vendor/autoload.php';

require_once './MVC/Pessoa/PessoaController.php';
use MVC\Pessoa\PessoaController;
$pessoaController = new PessoaController();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'search':
        $pessoas;
        if (isset($_GET['nome'])){
            $nome = $_GET['nome'];
            $pessoas = $pessoaController->getByNome($nome);
        }else{
            $pessoas = $pessoaController->read();
        }
        
        include 'MVC/Pessoa/pessoaView.php';
        break;
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pessoaController->create($_POST);
        }
        
        
        // $pessoas = $pessoaController->read();
        // var_dump($pessoas);
        header("Location:index.php");
        break;
    case 'update':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pessoaController->update($_POST);
        }
        header("Location:index.php");
        // $pessoas = $pessoaController->read();
        // include 'MVC/Pessoa/pessoaView.php';
        break;
    case 'delete':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $pessoaController->delete($id);
        header("Location:index.php");
        break;
    default:
        $pessoas = $pessoaController->read();
        include 'MVC/Pessoa/pessoaView.php';
        break;
}