<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class EquipController extends Controller
{
    /**
     * @Route("/llistarTotEquip")
     */
    public function llistarTotEquipAction(Request $request)
    {
		
       $repositori = $this->getDoctrine()->getRepository('AppBundle:Partit');
       $partidos = $repositori->findall();
       $data = array();
       $form = $this->createFormBuilder($data)
                        ->add('Nombre', TextType::class)
                        ->add('Busqueda equip', SubmitType::class, array('label' => 'Busqueda equip'))
                        ->getForm();
                        
                        if($request->isMethod('POST')){
                            
                            $form->handleRequest($request);
                            $data = $form->getData();
                            $nequip = $data["Nombre"];
                            
                            $em = $this->getDoctrine()->getEntityManager();
                            $db = $em->getConnection();
                            
                            $query = "SELECT id FROM equip WHERE nom_equip = '".$nequip."' ;";
                            $stmt =  $db->prepare($query);
                            $params = array();
                            $stmt->execute($params);
                            $id2=$stmt->fetchAll();
                            
                            if(empty($id2)){
								echo "No existeix aquest equip";
								}else{
									$id1 = $id2[0]["id"];
								$query = "SELECT * FROM partit WHERE IDequip_local = '".$id1."' OR IDequip_visitant = '".$id1."'";
                            $stmt = $db->prepare($query);
                            $params = array();
                            $stmt->execute($params);
                            $partit1=$stmt->fetchAll();
                            
                            if($partit1 == null){
                                echo "No existeixen partits per aquest equip";
                            }else{
                                foreach($partit1 as $partit2){
                                    
                                    $query = "SELECT * FROM equip WHERE id = ".$partit2["IDequip_local"].";";
                                    $stmt = $db->prepare($query);
                                    $params = array();
                                    $stmt->execute($params);
                                    $equip1= $stmt->fetchAll();
                                    
                                    $query = "SELECT * FROM equip WHERE id = ".$partit2["IDequip_visitant"].";";
                                    $stmt = $db->prepare($query);
                                    $params = array();
                                    $stmt->execute($params);
                                    $equip2= $stmt->fetchAll();
                                    
                                    
                                    $resultado= $equip1[0]["nom_equip"]." ".$partit2["golslocal"]." - ".$partit2["golsvisitant"]." ".$equip2[0]["nom_equip"];
                                    echo "</br>";
                                    
                                }
                            }
								}
							
							
                            
                            
                        }
        return $this->render('AppBundle:Equip:llistar_tot_equip.html.twig', array(
            // ...
			'form' => $form->createView(),'resultado' => $resultado
        ));
    }

}