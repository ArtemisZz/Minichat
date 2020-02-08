<?php


class User
{
    private $id;
    private $login;
    private $password;
    private $sexe;
    private $birthDay;
    private $nom;
    private $avatar;
    private $mimetype;

    /**
     * User constructor.
     * @param $id
     * @param $login
     * @param $password
     * @param $sexe
     * @param $birthDay
     * @param $nom
     */
    public function __construct($id,$login, $password, $sexe, $birthDay, $nom, $avatar, $mimetype)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->sexe = $sexe;
        $this->birthDay = $birthDay;
        $this->nom = $nom;
        $this->avatar = $avatar;
        $this->mimetype = $mimetype;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param mixed $birthDay
     */
    public function setBirthDay($birthDay): void
    {
        $this->birthDay = $birthDay;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar): void
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * @param mixed $mimetype
     */
    public function setMimetype($mimetype): void
    {
        $this->mimetype = $mimetype;
    }


}