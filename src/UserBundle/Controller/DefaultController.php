<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function GetAuthAction(equipement, badge)
    {
		$cleAccess = 0;
		$cleUser = 0;
		
		$response = new Response(json_encode(array('clé:accès' => $cleAccess, 'clé:user' => $cleUser)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
	
	public function writeloginAction(equipement, user)
    {
		$userId = 0;
		$response = new Response(json_encode(array('user' => $userId)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
	
	public function writelogoutAction(equipement, user)
    {
		$userId = 0;
		$response = new Response(json_encode(array('user' => $userId)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
	
	public function GetAccessAction(badge)
    {
		$cleUser = 0;
		$response = new Response(json_encode(array('clé:user' => $cleUSer)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
	
	public function GetUserAction(userId)
    {
		$nom = " ";
		$prenom ="";
		$email ="";
		$role = 0;
		$idBadge = 0;
		$present = 0;
		$response = new Response(json_encode(array('nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'role' => $role, 'idBadge' => $idBadge, 'present' => $present)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
	
	public function writeUserAction()
    {
		$numBadge = 0;
		$numEquipement = 0;
		$response = new Response(json_encode(array('badge' => $numBadge, 'equipement' => $numEquipement)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
	
	public function createBadgeAction(userId)
    {
		$numBadge = 0;
		$numEquipement = 0;
		$response = new Response(json_encode(array('badge' => $numBadge, 'equipement' => $numEquipement)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
	
	public function writequipAction(userId)
    {
		$numBadge = 0;
		$numEquipement = 0;
		$response = new Response(json_encode(array('badge' => $numBadge, 'equipement' => $numEquipement)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
	
	public function boitierquipAction(userId)
    {
		$numBadge = 0;
		$numEquipement = 0;
		$response = new Response(json_encode(array('badge' => $numBadge, 'equipement' => $numEquipement)));
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
}
