<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function lista(){
        $noticias = array();
        $noticias[] = array(
            "id" => 1,
            "titulo" => "Descubren cura del cancer",
            "fecha" => "10/01/2021");
        $noticias[] = array(
            "id" => 2,
            "titulo" => "Vuelven clases precensiales",
            "fecha" => "11/01/2021");

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias/lista", $argumentos);
    }

    public function detalles($noticia) {
        //sistema dew simulacion de detalles de noticia
        $detalles_noticia = array();
        $detalles_noticia["titulo"] = "Noticia #". $noticia;
        $detalles_noticia["autor"] = "Autor de la noticia #" . $noticia;
        $detalles_noticia["fecha"] = "28/20/2020";
        $detalles_noticia["cuerpo"] = "Este es el texto de la noticia #". $noticia;
        $detalles_noticia["foto"] = "https://i.pinimg.com/originals/70/fa/97/70fa97bac09e524bae4c006a1ead5512.jpg";

        $argumentos = array();
        $argumentos["noticia"] = $detalles_noticia;

        return view('noticias.detalles', $argumentos);
    }
}
