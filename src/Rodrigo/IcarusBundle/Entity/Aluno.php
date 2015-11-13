<?php

/**
 *
 * TODO: Inserir Marcação de mapeamento!
 *
 **/

namespace Rodrigo\IcarusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aluno
 *
 * @ORM\Table(name="alunos")
 * @ORM\Entity(repositoryClass="Rodrigo\IcarusBundle\Entity\AlunoRepository")
 */
class Aluno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100)
     */
    private $nome;

    /**
     * @var date
     *
     * @ORM\Column(name="data_de_nascimento", type="date")
     */
    private $data_de_nascimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idade", type="integer")
     */
    private $idade;

    /**
     * @var Responsavel
     *
     * @ORM\ManyToOne() // <= Setar valores da função!
     */
    private $responsavel // Relacionamento ManyToOne -> Responsavel [entity]


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
