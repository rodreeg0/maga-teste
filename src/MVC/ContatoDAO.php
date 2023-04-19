<?php

namespace MVC;
require_once __DIR__."\..\Database\db_connector.php";

use Doctrine\ORM\EntityManager;
use Entity\Contato;

class ContatoDAO {
    private $entityManager;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

    public function add(Contato $contato) {
        $this->entityManager->persist($contato);
        $this->entityManager->flush();
    }

    public function getAll($idPessoa) {
        
        $contatosRepository = $this->entityManager->getRepository(Contato::class);
        $contatos = $contatosRepository->findBy(array('pessoa' => $idPessoa));

        return $contatos;
    }

    public function getById($id) {
        $contatosRepository = $this->entityManager->getRepository(Contato::class);
        $contato = $contatosRepository->find($id);

        return $contato;
    }

    public function update(Contato $contato) {
        $this->entityManager->flush();
    }

    public function delete($id) {
        $contato = $this->getById($id);
        $this->entityManager->remove($contato);
        $this->entityManager->flush();
    }
}