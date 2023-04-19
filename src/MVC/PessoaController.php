<?php
namespace MVC;

require_once __DIR__."\..\Database\db_connector.php";
require_once __DIR__ . '\PessoaDAO.php';
use MVC\PessoaDAO;

class PessoaController {

    private $pessoaDAO;

    public function __construct() {
        // global $conn, $config;
        $entityManager = getEntityManager();
        $this->pessoaDAO = new PessoaDAO($entityManager);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];

            $pessoa = new \Entity\Pessoa();
            $pessoa->setNome($nome);
            $pessoa->setCpf($cpf);

            $this->pessoaDAO->add($pessoa);
        }
    }

    public function getById($id)
    {
        return $this->pessoaDAO->getById($id);
    }

    public function getByNome($nome) {
        $pessoas = $this->pessoaDAO->getByNome($nome);
        return $pessoas;
    }

    public function read() {
        $pessoas = $this->pessoaDAO->getAll();
        return $pessoas;
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['idPessoa'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];

            $pessoa = $this->pessoaDAO->getById($id);
            $pessoa->setNome($nome);
            $pessoa->setCpf($cpf);

            $this->pessoaDAO->update($pessoa);
        }
    }

    public function delete($id) {
        
        $this->pessoaDAO->delete($id);
    }
}