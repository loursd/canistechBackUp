<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='CANISTECH'; //nombre de la pestaña
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal_view');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo']='Quiénes Somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo']='Acerca De';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    public function servicios()
    {
        $data['titulo']='Servicios';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/servicios');
        echo view('front/footer_view');
    }

  
}
