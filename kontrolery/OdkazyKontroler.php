<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OdkazyKontroler
 *
 * @author martin
 */
class OdkazyKontroler extends Kontroler {
    public function zpracuj($parametry)
    {
		// Hlavička požadavku
		//header("HTTP/1.0 404 Not Found");
		// Hlavička stránky
		$this->hlavicka['titulek'] = 'Odkazy';
		$this->hlavicka['url'] = 'odkazy';
		// Nastavení šablony
		$this->pohled = 'odkazy';
    }
}
