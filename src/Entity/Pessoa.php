<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="pessoas")
 */
class Pessoa
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $nome;

    /**
     * @Column(type="string")
     */
    protected $cpf;

    /**
     * @OneToMany(targetEntity="Contato", mappedBy="pessoa")
     **/
    protected $contatos;

    public function __construct()
    {
        $this->contatos = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getContatos()
    {
        return $this->contatos;
    }

    // getters and setters
}
