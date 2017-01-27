<?php
namespace MIM;

class facture{
	public function calcul($params){
		$prix=0;

		foreach ($params as $value) {
			$prix=$prix+$value['prix'];
		}
		return $prix;
	}
}

?>