<?php

namespace Pokemon\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokemon\ApiBundle\Form\ObjetsType;
use Pokemon\ApiBundle\Entity\Objets;
use Pokemon\ApiBundle\Controller\RestNpcController;
use Pokemon\ApiBundle\Controller\RestTypeObjetController;
use Pokemon\ApiBundle\Controller\RestSyncController as Controller;

/**
 * Objets Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestObjetsControllerBase extends Controller {

    public function getNewEntity() {
        return new Objets();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string objetsId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Objets",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getObjetsAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokemonApiBundle:Objets')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Objets",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="npcobjetsInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The npcobjetsInternal objets",
     *      },
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom objets",
     *      },
     *      {
     *          "name"="quantite",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The quantite objets",
     *      },
     *      {
     *          "name"="type",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The type objets",
     *      },
     *   }
     * )
     * @return type
     */
    public function createObjetsAction(Request $request) {
        $entity = new Objets();

        $form = $this->createForm(new ObjetsType(), $entity, array(
            'allow_extra_fields' => true
        ));
        $form->submit($request);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entity);
            $entityManager->flush();
            $view = $this->view($entity, 200);
        } else {
            $view = $this->view(array("error" => "Parameters entity isn't valid" . $form->getErrors()), 400);
        }

        return $this->handleView($view);
    }

    /**
     * GET
     *
     * @Rest\Get("")
     * @Rest\QueryParam(name="page", nullable=true, requirements="\d+", default="0", description="Number of the page")
     * @Rest\QueryParam(name="quantity", nullable=true, requirements="\d+", default="0", description="Quantity of entities per page")
     * @param ParamFetcher $paramFetcher
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Objets",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllObjetsAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokemonApiBundle:Objets');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("Objetss" => $data), 200);
        } else {
            $view = $this->view(null, 204);
        }

        return $this->handleView($view);
    }

    /**
     * PUT /{id}
     *
     * @Rest\Put("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Objets",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="npcobjetsInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The npcobjetsInternal objets",
     *      },
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom objets",
     *      },
     *      {
     *          "name"="quantite",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The quantite objets",
     *      },
     *      {
     *          "name"="type",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The type objets",
     *      },
     *   }
     * )
     * @return type
     */
    public function updateObjetsAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokemonApiBundle:Objets')
            ->findOneById($id);

        $form = $this->createForm(new ObjetsType(), $entity, array(
            'allow_extra_fields' => true
        ));

        $form->submit($request, false);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entity);
            $entityManager->flush();
            $view = $this->view($entity, 200);
        } else {
            $view = $this->view(array("error" => "Parameters entity isn't valid"), 400);
        }

        return $this->handleView($view);
    }

    /**
     * DELETE /{id}
     *
     * @Rest\Delete("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Objets",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deleteObjetsAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokemonApiBundle:Objets')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Objets entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>