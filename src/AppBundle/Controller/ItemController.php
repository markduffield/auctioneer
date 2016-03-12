<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ItemController
 * @package AppBundle\Controller
 */
class ItemController extends Controller
{
    /**
     * @Route("/item/create/{name}", name="new_item")
     * @param $name
     * @return Response
     */
    public function createAction($name)
    {
        // replace this example code with whatever you need
        $item = new Item();
        $item->setName($name);

        $em = $this->getDoctrine()->getManager();

        $em->persist($item);
        $em->flush();

        return new Response('Created item id ' .$item->getId());
    }

    /**
     * @param $name
     * @return Response
     */
    public function removeAction($name)
    {
        // replace this example code with whatever you need
        $item = new Item();
        $item->setName($name);

        $em = $this->getDoctrine()->getManager();

        $em->persist($item);
        $em->flush();

        return new Response('Created item id ' .$item->getId());
    }
}
