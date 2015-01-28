<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UcetnictviKontroler
 *
 * @author martin
 */
class UcetnictviKontroler  extends Kontroler {
    
    public function zpracuj($parametry)
    {
		// Hlavička požadavku
		//header("HTTP/1.0 404 Not Found");
		// Hlavička stránky
		$this->hlavicka['titulek'] = 'Účetnictví';
                $this->hlavicka['url'] = 'ucetnictvi';
		// Nastavení šablony
		$this->pohled = 'ucetnictvi';
    }
    //put your code here
}
