<?php 



namespace Documlean\Entity;



use Doctrine\ORM\Mapping as ORM;
use DoctrineExtensions\Taggable\Taggable;
use Doctrine\Common\Collections\ArrayCollection;



/**
 * @ORM\Entity(repositoryClass="Documlean\Entity\DocumentRepository")
 */
class Document implements Taggable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $publicId;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $mediaType;

    /**
     * @ORM\Column(type="datetimetz")
     */
    private $datetimeDocument;

    /**
     * @ORM\Column(type="datetimetz")
     */
    private $datetimeFiled;



    private $tags;

    public function getTags()
    {
        $this->tags = $this->tags ?: new ArrayCollection();

        return $this->tags;
    }

    public function getTaggableType()
    {
        return 'Document';
    }

    public function getTaggableId()
    {
        return $this->getId();
    }



    /**
     * asdf@OneToOne(targetEntity="DocumentText")
     * asdf@JoinColumn(name="documentId", referencedColumnName="id")
     **/
//    private $text

    /**
     * Constructor
     */
//    public function __construct()
//    {
//        $this->datetimeFiled = new \DateTime();
//    }

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
     * Set publicId
     *
     * @param string $publicId
     * @return Document
     */
    public function setPublicId($publicId)
    {
        $this->publicId = $publicId;

        return $this;
    }

    /**
     * Get publicId
     *
     * @return string 
     */
    public function getPublicId()
    {
        return $this->publicId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Document
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Document
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
     * Set mediaType
     *
     * @param string $mediaType
     * @return Document
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * Get mediaType
     *
     * @return string 
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set datetimeDocument
     *
     * @param \DateTime $datetimeDocument
     * @return Document
     */
    public function setDatetimeDocument($datetimeDocument)
    {
        $this->datetimeDocument = $datetimeDocument;

        return $this;
    }

    /**
     * Get datetimeDocument
     *
     * @return \DateTime 
     */
    public function getDatetimeDocument()
    {
        return $this->datetimeDocument;
    }

    /**
     * Set datetimeFiled
     *
     * @param \DateTime $datetimeFiled
     * @return Document
     */
    public function setDatetimeFiled($datetimeFiled)
    {
        $this->datetimeFiled = $datetimeFiled;

        return $this;
    }

    /**
     * Get datetimeFiled
     *
     * @return \DateTime 
     */
    public function getDatetimeFiled()
    {
        return $this->datetimeFiled;
    }
}
