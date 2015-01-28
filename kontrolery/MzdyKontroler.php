<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MzdyKontroler
 *
 * @author martin
 */
class MzdyKontroler  extends Kontroler {
    
    public function zpracuj($parametry)
    {
		// Hlavička požadavku
		//header("HTTP/1.0 404 Not Found");
		// Hlavička stránky
		$this->hlavicka['titulek'] = 'Mzdy';
		$this->hlavicka['url'] = 'mzdy';
		// Nastavení šablony
		$this->pohled = 'mzdy';
    }
}
