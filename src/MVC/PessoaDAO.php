<?php

namespace MVC;
require_once __DIR__."\..\Database\db_connector.php";

use Doctrine\ORM\EntityManager;
use Entity\Pessoa;

class PessoaDAO {
    private $entityManager;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

    public function add(Pessoa $pessoa) {
        $this->entityManager->persist($pessoa);
        $this->entityManager->flush();
    }

    public function getAll() {
        $pessoasRepository = $this->entityManager->getRepository(Pessoa::class);
        $pessoas = $pessoasRepository->findAll();

        return $pessoas;
    }

    public function getById($id) {
        $pessoasRepository = $this->entityManager->getRepository(Pessoa::class);
        $pessoa = $pessoasRepository->find($id);

        return $pessoa;
    }

    public function getByNome($nome) {

        $pessoasRepository = $this->entityManager->getRepository(Pessoa::class);
        $pessoas = $pessoasRepository->findBy(array('nome' => $nome));
        return $pessoas;
    }

    public function update(Pessoa $pessoa) {
        $this->entityManager->flush();
    }

    public function delete($id) {
        $pessoa = $this->getById($id);

        $this->entityManager->remove($pessoa);
        $this->entityManager->flush();
    }
}