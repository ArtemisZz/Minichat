<?php


class Station
{
    private string $id;
    private float $latitude;
    private float $longitude;
    private string $pop;
    private int $automate24;
    private string $adresse;
    private int $cp;
    private string $ville;
    private $nom;
    private $marque;
    private Prix $prix;
    private $services;

    /**
     * Station constructor.
     * @param $id
     * @param $latitude
     * @param $longitude
     * @param $pop
     * @param $automate24
     * @param $adresse
     * @param $cp
     * @param $ville
     * @param $nom
     * @param $marque
     * @param $prix
     * @param $services
     */
    public function __construct($id, $latitude, $longitude, $pop, $automate24, $adresse, $cp, $ville, $nom = "", $marque = "", $prix, $services)
    {
        $this->id = $id;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->pop = $pop;
        $this->automate24 = $automate24;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->nom = $nom;
        $this->marque = $marque;
        $this->prix = $prix;
        $this->services = $services;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getPop(): string
    {
        return $this->pop;
    }

    /**
     * @param string $pop
     */
    public function setPop(string $pop): void
    {
        $this->pop = $pop;
    }

    /**
     * @return int
     */
    public function getAutomate24(): int
    {
        return $this->automate24;
    }

    /**
     * @param int $automate24
     */
    public function setAutomate24(int $automate24): void
    {
        $this->automate24 = $automate24;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return int
     */
    public function getCp(): int
    {
        return $this->cp;
    }

    /**
     * @param int $cp
     */
    public function setCp(int $cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return Prix
     */
    public function getPrix(): Prix
    {
        return $this->prix;
    }

    /**
     * @param Prix $prix
     */
    public function setPrix(Prix $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param mixed $services
     */
    public function setServices($services): void
    {
        $this->services = $services;
    }



}