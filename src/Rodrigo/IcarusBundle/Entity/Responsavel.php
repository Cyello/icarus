<?php

/**
 *
 * TODO: Inserir Marcação de mapeamento!
 *
 **/

namespace Rodrigo\IcarusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsavel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rodrigo\IcarusBundle\Entity\ResponsavelRepository")
 */
class Responsavel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    private $alunos; // Relacionamento OneToMany Aluno[entity] { Responavel( pai ) de um ou mais Alunos Matriculados na Escola }
    
    private $nome; // opcional

    private $rg;

    private $cpf;

    private $endereco;

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

