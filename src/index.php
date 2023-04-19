<?php
require_once '../vendor/autoload.php';

require_once './MVC/PessoaController.php';
require_once './MVC/ContatoController.php';
use MVC\PessoaController;
use MVC\ContatoController;
$pessoaController = new PessoaController();
$contatoController = new ContatoController();

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
        
        include 'MVC/pessoaView.php';
        break;
    case 'createPessoa':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pessoaController->create();
        }
        
        header("Location:index.php");
        break;
    case 'updatePessoa':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pessoaController->update();
        }
        header("Location:index.php");
        // $pessoas = $pessoaController->read();
        // include 'MVC/Pessoa/pessoaView.php';
        break;
    case 'deletePessoa':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $contatos = $contatoController->read($id); //Gets all contatos from pessoa
        foreach ($contatos as $contato){
            $contatoController->delete($contato->getId());
        }
        $pessoaController->delete($id);
        header("Location:index.php");
        break;

    case 'createContato':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pessoa = $pessoaController->getById($_POST['pessoaID']);
            $contatoController->create($pessoa);
        }

        header("Location:index.php?action=listContatos&idPessoa={$pessoa->getId()}");
        break;
    case 'updateContato':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $contatoController->update();
        }
        
        header("Location:index.php?action=listContatos&idPessoa={$_POST['pessoaID']}");
        break;
    case 'deleteContato':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $pessoa = $contatoController->getPessoa($id); //Save the idPessoa to later load the updated list
        $contatoController->delete($id);
        $contatos = $contatoController->read($pessoa->getId()); //Loading the updated list after deleting one element

        // $pessoa = $contatoController->getById($_POST['pessoaID']);
        header("Location:index.php?action=listContatos&idPessoa={$pessoa->getId()}");
        break;

    case 'listContatos':
        $pessoas = $pessoaController->read();
        $contatos = $contatoController->read($_GET['idPessoa']);
        include 'MVC/pessoaView.php';
        break;

    default:
        $pessoas = $pessoaController->read();
        include 'MVC/pessoaView.php';
        break;
}