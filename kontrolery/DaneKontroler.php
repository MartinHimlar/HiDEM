<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PoradenstviKontroler
 *
 * @author martin
 */
class DaneKontroler extends Kontroler {
    
    public function zpracuj($parametry)
    {
		// Hlavička požadavku
		//header("HTTP/1.0 404 Not Found");
		// Hlavička stránky
		$this->hlavicka['titulek'] = 'Daňe';
		$this->hlavicka['url'] = 'dane';
		// Nastavení šablony
		$this->pohled = 'poradenstvi';
    }
}
