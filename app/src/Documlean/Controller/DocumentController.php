<?php



namespace Documlean\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;



use Documlean\Entity\Document;



class DocumentController extends AbstractController
{
    /**
     * @Route("/document/upload", name="document-upload")
     */
    public function uploadAction()
    {
        // create a task and give it some dummy data for this example
        $doc = new Document();
        $doc->setTitle('BadDoc');
        $doc->setDatetimeDocument(new \DateTime());

        $form = $this->createFormBuilder($doc)
            ->add('title', 'text')
            ->add('datetimeDocument', 'date')
            ->add('save', 'submit', array('label' => 'Upload now!'))
            ->getForm();

        return $this->render('document/upload.html.twig', array(
            'form' => $form->createView(),
        ));
    }



    /**
     * @Route("/document/list", name="document-list")
     */
    public function listAction()
    {
        $documents = $this->getDoctrine()
            ->getRepository('Documlean:Document')
            ->findAll();

        return $this->render('document/list.html.twig', array(
            'documents' => $documents
        ));
    }
}
