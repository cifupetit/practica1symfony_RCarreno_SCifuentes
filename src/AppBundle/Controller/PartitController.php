<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\Partit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class PartitController extends Controller
{
    /**
     * @Route("/addPartit",name="addPartit")
     */
     public function addPartitAction(Request $request)
    {
		$partit =new Partit();
		$partit->setCompeticio('Competicio');
		$partit->setTemporada('Temporada');
		$partit->setIDequipLocal('IDequip_local');
		$partit->setGolslocal('gols equip Local');
		$partit->setIDequipVisitant('iDequipVisitant');
		$partit->setGolsvisitant('gols equip visitant');

		
		
		$form=$this->createFormBuilder($partit)
			->add('Competicio', TextType::class)
            ->add('Temporada', TextType::class)
			->add('Golslocal', TextType::class)
            ->add('Golsvisitant', TextType::class)
			->add('IDequipLocal', TextType::class)
	->add('IDequipVisitant', TextType::class)
			->add('save', SubmitType::class, array('label' => 'Afegir Partit'))
            ->getForm();
			$form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
		
		$partit->setCompeticio($form->get('Competicio')->getData());
		$partit->setTemporada($form->get('Temporada')->getData());
		$partit->setIDequipLocal($form->get('IDequipLocal')->getData());
		$partit->setGolslocal($form->get('Golslocal')->getData());
		$partit->setIDequipVisitant($form->get('IDequipVisitant')->getData());
		$partit->setGolsvisitant($form->get('Golsvisitant')->getData());
        //$partit -> $form->getData();
		var_dump($partit);


         $em = $this->getDoctrine()->getManager();
         $em->persist($partit);
         $em->flush();

        return $this->redirectToRoute('AppBundle:Partit:listPartidosDeEquipoForm.html.twig');
    }
        return $this->render('AppBundle:Partit:add_partit.html.twig', array(
			'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/updatePartit",name="updatePartit")
     */
    public function updatePartitAction(Request $request)
    {
		$partit =new Partit();
		$partit->setCompeticio('Competicio');
		$partit->setTemporada('Temporada');
		$partit->setIDequipLocal('IDequip_local');
		$partit->setGolslocal('Golslocal');
		$partit->setIDequipVisitant('iDequipVisitant');
		$partit->setGolsvisitant('Golsvisitant');
		
        $form=$this->createFormBuilder($partit)
			->add('Competicio', TextType::class)
            ->add('Temporada', TextType::class)
			->add('IDequipLocal', TextType::class)
			->add('IDequipVisitant',  TextType::class)
			->add('Golslocal', TextType::class)
            ->add('Golsvisitant', TextType::class)
			->add('save', SubmitType::class, array('label' => 'Modificar Partit'))
            ->getForm();
			$form->handleRequest($request);
			
			if ($form->isSubmitted() && $form->isValid()) {
					$competicio=$form->get('Competicio')->getData();
		$Temporada=$form->get('Temporada')->getData();
		$idEquiplocal=$form->get('IDequipLocal')->getData();
		$idEquipvisitant=$form->get('IDequipVisitant')->getData();
		$golslocal=$form->get('Golslocal')->getData();
		$golsvisitant=$form->get('Golsvisitant')->getData();
		
		$sql = "UPDATE partit SET partit.golslocal = :golslocal, partit.golsvisitant = :golsvisitant where partit.IDequip_local = :idEquiplocal and partit.IDequip_visitant = :idEquipvisitant and partit.competicio = :competicio and partit.temporada= :Temporada";
		
		$params = array('idEquiplocal'=>$idEquiplocal, 'idEquipvisitant'=>$idEquipvisitant, 'competicio'=>$competicio, 'Temporada'=>$Temporada, 'golslocal'=>$golslocal, 'golsvisitant'=>$golsvisitant);

		$em = $this->getDoctrine()->getManager();
		$stmt = $em->getConnection()->prepare($sql);
		$stmt->execute($params);
			}
        return $this->render('AppBundle:Partit:update_partit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/deletePartit",name="deletePartit")
     */
    public function deletePartitAction(Request $request)
    {
		$partit =new Partit();
		$partit->setCompeticio('Competicio');
		$partit->setTemporada('Temporada');
		$partit->setIDequipLocal('IDequip_local');
		$partit->setIDequipVisitant('iDequipVisitant');
		
        $form=$this->createFormBuilder($partit)
			->add('Competicio', TextType::class)
            ->add('Temporada', TextType::class)
			->add('IDequipLocal', TextType::class)
			->add('IDequipVisitant',  TextType::class)
			->add('save', SubmitType::class, array('label' => 'Eliminar Partit'))
            ->getForm();
			$form->handleRequest($request);
			if ($form->isSubmitted() && $form->isValid()) {
		
		$competicio=$form->get('Competicio')->getData();
		$Temporada=$form->get('Temporada')->getData();
		$idEquiplocal=$form->get('IDequipLocal')->getData();
		$idEquipvisitant=$form->get('IDequipVisitant')->getData();

		
        $sql = "delete from partit where partit.IDequip_local = :idEquiplocal and partit.IDequip_visitant = :idEquipvisitant and partit.competicio = :competicio and partit.temporada= :Temporada";
		$params = array('idEquiplocal'=>$idEquiplocal, 'idEquipvisitant'=>$idEquipvisitant, 'competicio'=>$competicio, 'Temporada'=>$Temporada);

		$em = $this->getDoctrine()->getManager();
		$stmt = $em->getConnection()->prepare($sql);
		$stmt->execute($params);

    }
		
        return $this->render('AppBundle:Partit:delete_partit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/listCompeticiones",name="competiciones")
     */
    public function listCompeticiones()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT DISTINCT p.competicio
            FROM AppBundle:Partit p');
        $partits = $query->getResult();

        return $this->render('AppBundle:Partit:listCompeticiones.html.twig', array('partits'=>$partits));
    }

    /**
     * @Route("/listTemporadas/{competicio}",name="temporadas")
     */
    public function listTemporadasAction($competicio)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT DISTINCT p.competicio, p.temporada
            FROM AppBundle:Partit p
            WHERE p.competicio LIKE :competicio'
        )->setParameter('competicio', $competicio);
        $partits = $query->getResult();

        return $this->render('AppBundle:Partit:listTemporadas.html.twig', array('partits'=>$partits, 'comp'=>$competicio));
    }

    /**
     * @Route("/listPartidos/{competicio}/{temporada}",name="partidos")
     */
    public function listPartidosAction($competicio, $temporada)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p FROM AppBundle:Partit p 
            WHERE p.competicio LIKE :competicio 
            AND p.temporada = :temporada'
        )->setParameter('competicio', $competicio);
        $query->setParameter('temporada', $temporada);
        $partits = $query->getResult();

        return $this->render('AppBundle:Partit:listPartidos.html.twig', array(
        'partits'=>$partits,'comp'=>$competicio,'temp'=>$temporada
        ));
    }

}
