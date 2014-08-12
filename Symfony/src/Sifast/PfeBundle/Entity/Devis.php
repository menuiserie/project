<?php

namespace Sifast\PfeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 */
class Devis
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $sous_type;

    /**
     * @var string
     */
    private $modele;

    /**
     * @var string
     */
    private $longeur;

    /**
     * @var string
     */
    private $largeur;

    /**
     * @var string
     */
    private $couleur;

    /**
     * @var string
     */
    private $image;


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
     * Set mail
     *
     * @param string $mail
     * @return Devis
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Devis
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set sous_type
     *
     * @param string $sousType
     * @return Devis
     */
    public function setSousType($sousType)
    {
        $this->sous_type = $sousType;

        return $this;
    }

    /**
     * Get sous_type
     *
     * @return string 
     */
    public function getSousType()
    {
        return $this->sous_type;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return Devis
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set longeur
     *
     * @param string $longeur
     * @return Devis
     */
    public function setLongeur($longeur)
    {
        $this->longeur = $longeur;

        return $this;
    }

    /**
     * Get longeur
     *
     * @return string 
     */
    public function getLongeur()
    {
        return $this->longeur;
    }

    /**
     * Set largeur
     *
     * @param string $largeur
     * @return Devis
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return string 
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return Devis
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Devis
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}
