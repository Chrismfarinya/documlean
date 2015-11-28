<?php


namespace Documlean\Entity;

use Doctrine\ORM\Mapping as ORM;
#use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class DocumentText
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $documentId;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="datetimetz")
     */
    private $datetimeRowCreated;

    /**
     * @ORM\Column(type="datetimetz")
     */
    private $datetimeRowUpdated;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->datetimeFiled = new \DateTime();
    }

    // getters and setters ...

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
     * Set documentId
     *
     * @param integer $documentId
     * @return DocumentText
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * Get documentId
     *
     * @return integer 
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return DocumentText
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set datetimeRowCreated
     *
     * @param \DateTime $datetimeRowCreated
     * @return DocumentText
     */
    public function setDatetimeRowCreated($datetimeRowCreated)
    {
        $this->datetimeRowCreated = $datetimeRowCreated;

        return $this;
    }

    /**
     * Get datetimeRowCreated
     *
     * @return \DateTime 
     */
    public function getDatetimeRowCreated()
    {
        return $this->datetimeRowCreated;
    }

    /**
     * Set datetimeRowUpdated
     *
     * @param \DateTime $datetimeRowUpdated
     * @return DocumentText
     */
    public function setDatetimeRowUpdated($datetimeRowUpdated)
    {
        $this->datetimeRowUpdated = $datetimeRowUpdated;

        return $this;
    }

    /**
     * Get datetimeRowUpdated
     *
     * @return \DateTime 
     */
    public function getDatetimeRowUpdated()
    {
        return $this->datetimeRowUpdated;
    }
}
