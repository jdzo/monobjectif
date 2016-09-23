<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Objectif;

/**
* @ORM\Entity(repositoryClass="AppBundle\Repository\EtapeRepository")
* @ORM\Table(name="etape")
*/
class Etape{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $libelle_etape;
    /**
    * @ORM\Column(type="string",length=255)
    */
    protected $description_etape;
    /**
    * @ORM\Column(type="date")
    */
    protected $date_debut_etape;
    /**
    * @ORM\Column(type="date")
    */
    protected $date_fin_etape;
    /**
    * @ORM\OneToOne(targetEntity="Objectif")
    * @ORM\JoinColumn(name="objectif_id", referencedColumnName="id")
    */
    protected $objectif;

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
     * Set libelleEtape
     *
     * @param string $libelleEtape
     *
     * @return Etape
     */
    public function setLibelleEtape($libelleEtape)
    {
        $this->libelle_etape = $libelleEtape;

        return $this;
    }

    /**
     * Get libelleEtape
     *
     * @return string
     */
    public function getLibelleEtape()
    {
        return $this->libelle_etape;
    }

    /**
     * Set descriptionEtape
     *
     * @param string $descriptionEtape
     *
     * @return Etape
     */
    public function setDescriptionEtape($descriptionEtape)
    {
        $this->description_etape = $descriptionEtape;

        return $this;
    }

    /**
     * Get descriptionEtape
     *
     * @return string
     */
    public function getDescriptionEtape()
    {
        return $this->description_etape;
    }

    /**
     * Set dateDebutEtape
     *
     * @param \DateTime $dateDebutEtape
     *
     * @return Etape
     */
    public function setDateDebutEtape($dateDebutEtape)
    {
        $this->date_debut_etape = $dateDebutEtape;

        return $this;
    }

    /**
     * Get dateDebutEtape
     *
     * @return \DateTime
     */
    public function getDateDebutEtape()
    {
        return $this->date_debut_etape;
    }

    /**
     * Set dateFinEtape
     *
     * @param \DateTime $dateFinEtape
     *
     * @return Etape
     */
    public function setDateFinEtape($dateFinEtape)
    {
        $this->date_fin_etape = $dateFinEtape;

        return $this;
    }

    /**
     * Get dateFinEtape
     *
     * @return \DateTime
     */
    public function getDateFinEtape()
    {
        return $this->date_fin_etape;
    }

    /**
     * Set objectif
     *
     * @param \AppBundle\Entity\Objectif $objectif
     *
     * @return Etape
     */
    public function setObjectif(\AppBundle\Entity\Objectif $objectif = null)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return \AppBundle\Entity\Objectif
     */
    public function getObjectif()
    {
        return $this->objectif;
    }
}
