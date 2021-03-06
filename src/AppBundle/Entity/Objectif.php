<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

interface objectifInterface{
}
/**
* @ORM\Entity(repositoryClass="AppBundle\Repository\ObjectifRepository")
* @ORM\Table(name="objectif")
*/

class Objectif   extends EntityRepository   
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    public $id;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $titre;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $libelle;
    /**
    * @ORM\Column(type="string",length=500)
    */
    public $description;

    public function __construct($objectifid=null){
    
    }
    public function saveObjectif()
    {
        return "save";
    }
    protected function deleteObjectif()
    {
        $em->remove($product);
        $em->flush();
    }
    /**
    * Get id
    *
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Set titre
    *
    * @param string $titre
    *
    * @return objectif
    */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
    * Get titre
    *
    * @return string
    */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
    * Set libelle
    *
    * @param string $libelle
    *
    * @return objectif
    */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
    * Get libelle
    *
    * @return string
    */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
    * Set description
    *
    * @param string $description
    *
    * @return objectif
    */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
    * Get description
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->description;
    }
}
