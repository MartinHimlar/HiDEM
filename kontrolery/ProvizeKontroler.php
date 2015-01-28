<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProvizeKontroler
 *
 * @author martin
 */
class ProvizeKontroler extends Kontroler {
    
    public function zpracuj($parametry)
    {
		// Hlavička požadavku
		//header("HTTP/1.0 404 Not Found");
		// Hlavička stránky
		$this->hlavicka['titulek'] = 'Provize';
		$this->hlavicka['url'] = 'provize';
		// Nastavení šablony
		$this->pohled = 'provize';
    }
}
