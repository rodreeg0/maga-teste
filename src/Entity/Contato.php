<?php
namespace Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="contatos")
 */
class Contato
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
    protected $tipo;

    /**
     * @Column(type="string")
     */
    protected $descricao;

    /**
     * @ManyToOne(targetEntity="Pessoa", inversedBy="contatos")
     * @JoinColumn(name="idPessoa", referencedColumnName="id")
     **/
    protected $pessoa;

    // getters and setters
}