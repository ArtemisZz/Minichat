<?php


class Prix
{
    private int $idCarburant;
    private string $libelleCarburant;
    private float $valeur;
    private string $maj;

    /**
     * Prix constructor.
     * @param int $idCarburant
     * @param string $libelleCarburant
     * @param float $valeur
     * @param string $maj
     */
    public function __construct(int $idCarburant, string $libelleCarburant, float $valeur, string $maj)
    {
        $this->idCarburant = $idCarburant;
        $this->libelleCarburant = $libelleCarburant;
        $this->valeur = $valeur;
        $this->maj = $maj;
    }

    /**
     * @return int
     */
    public function getIdCarburant(): int
    {
        return $this->idCarburant;
    }

    /**
     * @param int $idCarburant
     */
    public function setIdCarburant(int $idCarburant): void
    {
        $this->idCarburant = $idCarburant;
    }

    /**
     * @return string
     */
    public function getLibelleCarburant(): string
    {
        return $this->libelleCarburant;
    }

    /**
     * @param string $libelleCarburant
     */
    public function setLibelleCarburant(string $libelleCarburant): void
    {
        $this->libelleCarburant = $libelleCarburant;
    }

    /**
     * @return float
     */
    public function getValeur(): float
    {
        return $this->valeur;
    }

    /**
     * @param float $valeur
     */
    public function setValeur(float $valeur): void
    {
        $this->valeur = $valeur;
    }

    /**
     * @return DateTime
     */
    public function getMaj(): string
    {
        return $this->maj;
    }

    /**
     * @param string $maj
     */
    public function setMaj(string $maj): void
    {
        $this->maj = $maj;
    }


}