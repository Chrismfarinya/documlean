<?php



namespace Documlean\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;



use Documlean\Entity\Document;



class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }



    /**
     * @Route("/tags-create", name="tags-create")
     */
    public function tagsCreateAction()
    {
        // create your entity
        $doc = new Document();
        $doc->setTitle('foo');
        $doc->setPublicId('foo');
        $doc->setDescription('foo');
        $doc->setMediaType('foo');
        $doc->setDatetimeDocument(new \DateTime());
        $doc->setDatetimeFiled(new \DateTime());

        $tagManager = $this->get('fpn_tag.tag_manager');

        // ask the tag manager to create a Tag object
        $fooTag = $tagManager->loadOrCreateTag('foo');

        // assign the foo tag to the post
        $tagManager->addTag($fooTag, $doc);

        $em = $this->getDoctrine()->getEntityManager();

        // persist and flush the new post
        $em->persist($doc);
        $em->flush();

        // after flushing the post, tell the tag manager to actually save the tags
        $tagManager->saveTagging($doc);

        // ...

        // Load tagging ...
        $tagManager->loadTagging($doc);

        return $this->render('default/index.html.twig');
    }



}
