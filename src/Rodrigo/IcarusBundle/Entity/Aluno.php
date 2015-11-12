<?php

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

    private $nome;
    private $data_de_nascimento;
    private $idade;
    private $endereco;

    private $responsavel

    /*
     * ESTES CAMPOS FARÃO PARTE DA ENTIDADE RESPONSÁVEL *
     *
      private $nome_do_pai; // opcional
      private $nome_da_mae;
      private $rg_do_pai; // opcional
      private $rg_da_mae;
    */

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
