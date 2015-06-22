<?php

abstract class Kontroler
{

	// Pole, jehož indexy jsou poté viditelné v šabloně jako běžné proměnné
    protected $data = array();
	// Název šablony bez přípony
    protected $pohled = "";
	// Hlavička HTML stránky
	protected $hlavicka = array('titulek' => '', 'url' => '', 'popis' => '');

	// Vyrenderuje pohled
    public function vypisPohled()
    {
        if ($this->pohled)
        {
            extract($this->data);
            require("pohledy/" . $this->pohled . ".phtml");
        }
    }
	
	// Přesměruje na dané URL
	public function presmeruj($url)
	{
                
		header("Location: /$url");
		header("Connection: close");
        exit;
	}

	// Hlavní metoda controlleru
    abstract function zpracuj($parametry);

	public function flashMessage(DateTime $toDate, $message=NULL)
	{
		$now = new DateTime();

		if($now >= $toDate)
			return FALSE;

		$body = '<div class="alert-danger">';
		$body .= $message;
		$body .= '</div><br /><br />';

		return $body;
	}

}