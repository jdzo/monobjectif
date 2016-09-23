<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

interface ProgrammeInterface{
    public function is_open();   
}
  /**
* @ORM\Entity(repositoryClass="AppBundle\Repository\ProgrammeRepository")
* @ORM\Table(name="programmes")
*/
class Programme{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $code;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $libelle;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $description;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $prix;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $prerequis;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $centre;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $date_debut;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $date_fin;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $nb_place;
    /**
    * @ORM\Column(type="string",length=100)
    */
    protected $is_active;



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
     * Set code
     *
     * @param string $code
     *
     * @return Programme
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Programme
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
     * @return Programme
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

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Programme
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set prerequis
     *
     * @param string $prerequis
     *
     * @return Programme
     */
    public function setPrerequis($prerequis)
    {
        $this->prerequis = $prerequis;

        return $this;
    }

    /**
     * Get prerequis
     *
     * @return string
     */
    public function getPrerequis()
    {
        return $this->prerequis;
    }

    /**
     * Set centre
     *
     * @param string $centre
     *
     * @return Programme
     */
    public function setCentre($centre)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Get centre
     *
     * @return string
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Programme
     */
    public function setDateDebut($dateDebut)
    {
        $this->date_debut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return Programme
     */
    public function setDateFin($dateFin)
    {
        $this->date_fin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set nbPlace
     *
     * @param string $nbPlace
     *
     * @return Programme
     */
    public function setNbPlace($nbPlace)
    {
        $this->nb_place = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return string
     */
    public function getNbPlace()
    {
        return $this->nb_place;
    }

    /**
     * Set isActive
     *
     * @param string $isActive
     *
     * @return Programme
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return string
     */
    public function getIsActive()
    {
        return $this->is_active;
    }
}
