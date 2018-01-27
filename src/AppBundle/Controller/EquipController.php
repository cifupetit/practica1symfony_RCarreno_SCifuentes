<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use AppBundle\Entity\Equip;


class EquipController extends Controller
{
    /**
     * @Route("/listPartidosDeEquipoForm",name="partidosDeEquipoForm")
     */
    public function listPartidosDeEquipoFormAction(Request $request)
    {
        $equip = new Equip();
        $equip->setNomEquip('Escribe el nombre de equipo');

        $form = $this->createFormBuilder($equip)
            ->add('nomEquip', TextType::class)
            ->add('busca', SubmitType::class, array('label' => 'Buscar partidos'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $equip = $form->getData();

            $equip = new Equip();
            $equip->setNomEquip($form->get('nomEquip')->getData());

            $em = $this->getDoctrine()->getManager();
            $queryEquip = $em->createQuery(
            'SELECT e.id FROM AppBundle:Equip e 
            WHERE e.nomEquip = :equip'
            )->setParameter('equip', $equip->getNomEquip());
            $idEquip = $queryEquip->getResult();


            if (!$idEquip) {
                $mensajeErr = 'No se ha encontrado ningún equipo con el nombre: '.$form->get('nomEquip')->getData();
                return $this->render('AppBundle:Equip:listPartidosDeEquipoForm.html.twig', array(
                'form' => $form->createView(), 'mensajeErr' => $mensajeErr
                ));
            }

            return $this->redirectToRoute('partidosDeEquipo', array('equip' => $idEquip[0]['id']));
        }

        return $this->render('AppBundle:Equip:listPartidosDeEquipoForm.html.twig', array(
        'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/listPartidosDeEquipo/{equip}",name="partidosDeEquipo")
     */
    public function listPartidosDeEquipoAction($equip)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:Partit p 
            WHERE p.iDequipLocal = :equip 
            OR p.iDequipVisitant = :equip'
        )->setParameter('equip', $equip);
        $partits = $query->getResult();

        $queryX = $em->createQuery(
            'SELECT e.nomEquip FROM AppBundle:Equip e
            WHERE e.id = :equip'
        )->setParameter('equip', $equip);
        $nomEquip = $queryX->getResult();

        $queryJ = $em->createQuery(
            'SELECT j FROM AppBundle:Jugador j
            WHERE j.equip = :equipID'
            )->setParameter('equipID', $equip);
            $jugadors = $queryJ->getResult();

        return $this->render('AppBundle:Equip:listPartidosDeEquipo.html.twig', array(
        'partits'=>$partits, 'nomEquip'=>$nomEquip[0], 'jugadors' => $jugadors
        ));
    }

}