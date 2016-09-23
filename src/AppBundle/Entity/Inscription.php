<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
/**
* @ORM\Entity(repositoryClass="AppBundle\Repository\InscriptionRepository")
* @ORM\Table(name="inscription")
*/
  class Inscription{  
      /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
     /**
    * @ORM\OneToOne(targetEntity="Programme")
    * @ORM\JoinColumn(name="programme_id", referencedColumnName="id")
    */
    protected $programme;
    /**
    * @ORM\OneToOne(targetEntity="User")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;
     /**
    * @ORM\Column(type="string",length=100)
    */
    protected $annee_universitaire;
     /**
    * @ORM\Column(type="string",length=100)
    */
    protected $statut;
  
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
     * Set anneeUniversitaire
     *
     * @param string $anneeUniversitaire
     *
     * @return Inscription
     */
    public function setAnneeUniversitaire($anneeUniversitaire)
    {
        $this->annee_universitaire = $anneeUniversitaire;

        return $this;
    }

    /**
     * Get anneeUniversitaire
     *
     * @return string
     */
    public function getAnneeUniversitaire()
    {
        return $this->annee_universitaire;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Inscription
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set programme
     *
     * @param \AppBundle\Entity\Programme $programme
     *
     * @return Inscription
     */
    public function setProgramme(\AppBundle\Entity\Programme $programme = null)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return \AppBundle\Entity\Programme
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Inscription
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
