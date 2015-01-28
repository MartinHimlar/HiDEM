<?php

class VchodKontroler extends Kontroler {

    public function zpracuj($params)
    {
        header("HTTP/1.1 200 ok");
        header("Location: http://89.29.52.230");
        header("Connection: close");
    }
}
