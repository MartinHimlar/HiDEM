<?php

// Router je speciální typ controlleru, který podle URL adresy zavolá
// správný controller a jím vytvořený pohled vloží do šablony stránky

class SmerovacKontroler extends Kontroler
{
    // Instance controlleru
    protected $kontroler;

    // Metoda převede pomlčkovou variantu controlleru na název třídy
    private function pomlckyDoVelbloudiNotace($text)
    {
        $veta = str_replace('-', ' ', $text);
        $veta = ucwords($veta);
        $veta = str_replace(' ', '', $veta);
        return $veta;
    }

    private function parsujURL($url)
    {
        $newUrl = parse_url($url);
        $newUrl["path"] = ltrim($newUrl["path"], "/");
        $newUrl["path"] = trim($newUrl["path"]);
        $path = explode("/", $newUrl["path"]);
        return $path;
    }

    public function zpracuj($parametry)
    {
        $url = $this->parsujURL($parametry[0]);

        if($url === 'vchod'){
            header("Location: http://89.29.52.230");
            header("Connection: close");
        }

        if (empty($url[0]))
            $this->presmeruj('uvod');

        $controler = $this->pomlckyDoVelbloudiNotace(array_shift($url)) . 'Kontroler';

        if (file_exists('kontrolery/' . $controler . '.php'))
            $this->kontroler = new $controler;
        else
            $this->presmeruj('chyba');

        $this->kontroler->zpracuj($url);


        $this->data['titulek'] = $this->kontroler->hlavicka['titulek'];
        $this->data['popis'] = $this->kontroler->hlavicka['popis'];
        $this->data['url'] = $this->kontroler->hlavicka['url'];


        $this->pohled = 'rozlozeni';
    }

}
