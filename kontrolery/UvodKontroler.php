<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UvodKontroler
 *
 * @author martin
 */
class UvodKontroler extends Kontroler {
    
    public function zpracuj($parametry)
    {
		// Hlavička požadavku
		//header("HTTP/1.0 404 Not Found");
		// Hlavička stránky
		$this->hlavicka['titulek'] = 'Hlavní Stránka';
                $this->hlavicka['url'] = 'uvod';
		// Nastavení šablony
		$this->pohled = 'uvod';
    }
}
