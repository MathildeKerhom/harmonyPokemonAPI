<?php

namespace Pokemon\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokemon\ApiBundle\Form\NpcType;
use Pokemon\ApiBundle\Entity\Npc;
use Pokemon\ApiBundle\Controller\RestObjetsController;
use Pokemon\ApiBundle\Controller\RestPokemonsController;
use Pokemon\ApiBundle\Controller\RestBadgesController;
use Pokemon\ApiBundle\Controller\RestPositionsController;
use Pokemon\ApiBundle\Controller\RestSyncController as Controller;

/**
 * Npc Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestNpcControllerBase extends Controller {

    public function getNewEntity() {
        return new Npc();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string npcId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Npc",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getNpcAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokemonApiBundle:Npc')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD Npc",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom npc",
     *      },
     *      {
     *          "name"="profession",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The profession npc",
     *      },
     *      {
     *          "name"="texte",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The texte npc",
     *      },
     *      {
     *          "name"="objets",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The objets npc",
     *      },
     *      {
     *          "name"="pokemons",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokemons npc",
     *      },
     *      {
     *          "name"="badges",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The badges npc",
     *      },
     *      {
     *          "name"="position",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The position npc",
     *      },
     *   }
     * )
     * @return type
     */
    public function createNpcAction(Request $request) {
        $entity = new Npc();

        $form = $this->createForm(new NpcType(), $entity, array(
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
     *   section="Rest CRUD Npc",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllNpcAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokemonApiBundle:Npc');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("Npcs" => $data), 200);
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
     *   section="Rest CRUD Npc",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom npc",
     *      },
     *      {
     *          "name"="profession",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The profession npc",
     *      },
     *      {
     *          "name"="texte",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The texte npc",
     *      },
     *      {
     *          "name"="objets",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The objets npc",
     *      },
     *      {
     *          "name"="pokemons",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokemons npc",
     *      },
     *      {
     *          "name"="badges",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The badges npc",
     *      },
     *      {
     *          "name"="position",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The position npc",
     *      },
     *   }
     * )
     * @return type
     */
    public function updateNpcAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokemonApiBundle:Npc')
            ->findOneById($id);

        $form = $this->createForm(new NpcType(), $entity, array(
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
     *   section="Rest CRUD Npc",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deleteNpcAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokemonApiBundle:Npc')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Npc entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>