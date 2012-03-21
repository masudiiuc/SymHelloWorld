<?php

namespace test\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Test\TaskBundle\Entity\Task;
use Test\TaskBundle\Entity\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $task = new Task;
        $task->setTask("This is my blog");
        $task->setDuedate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
                     ->add('Task',          'text',   array('label'  => 'Task Title'))
                     ->add('dueDate',       'date',   array('label'  => 'Due Date'))
                     ->add('assignTo',      'text',   array('label'  => 'Assign To'))
                     ->add('availablity',   'choice', array('choices' => array( 'morning'   => 'Morning',
                                                                                'afternoon' => 'Afternoon',
                                                                                'evening'   => 'Evening',
                                                                             ),
                                                            'multiple'  => true,
                                                            'label'     => 'Availability'
                          ))
                     ->add('email',         'text',   array('label'  => 'Email Address'))
                     ->getForm();

        //check for form validation
        if( $request->getMethod() == 'POST' ){
            $form->bindRequest($request);

            if( $form->isValid() ){
                $formData = $form->getData();

                echo '<pre/>'; print_r($formData); die;
            }
        }

        return $this->render('testTaskBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    public function databaseAction(){
        $conn = $this->get('database_connection');
        $result = $conn->fetchAll("select * from users");
        var_dump($result);


        $product = new Products();
        $product->setName('Alu');
        $product->setDescription('Besi kore alu khao, bhater upor jor komao');
        $product->setPrice('100.00');
        $product->setQuantity('500');

        $em = $this->get('doctrine')->getEntityManager();
        $em->persist($product);
        $em->flush();
        echo PHP_EOL . $product->getId() . PHP_EOL;
        die('hello');
    }
}