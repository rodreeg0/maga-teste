<?php
namespace MVC;

// require_once __DIR__."\..\..\Database\db_conn_parameters.php";
require_once __DIR__."\..\Database\db_connector.php";
require_once __DIR__ . '\ContatoDAO.php';
use MVC\ContatoDAO;

class ContatoController {

    private $contatoDAO;

    public function __construct() {
        // global $conn, $config;
        $entityManager = getEntityManager();
        $this->contatoDAO = new ContatoDAO($entityManager);
    }

    public function create($pessoa) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tipo = $_POST['tipo'];
            $descricao = $_POST['descricao'];
            $contato = new \Entity\Contato();
            $contato->setTipo($tipo);
            $contato->setDescricao($descricao);
            $contato->setPessoa($pessoa);

            $this->contatoDAO->add($contato);
        }
    }

    public function read($idPessoa) {
        $contatos = $this->contatoDAO->getAll($idPessoa);
        return $contatos;
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['idContato'];
            $tipo = $_POST['tipo'];
            $descricao = $_POST['descricao'];
            $contato = $this->contatoDAO->getById($id);
            $contato->setTipo($tipo);
            $contato->setDescricao($descricao);

            $this->contatoDAO->update($contato);
        }
    }

    public function delete($id) {
        $this->contatoDAO->delete($id);
    }

    public function getPessoa($id){
        return $this->contatoDAO->getById($id)->getPessoa();

    }
}