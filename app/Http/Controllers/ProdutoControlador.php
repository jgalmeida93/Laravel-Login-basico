<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function index() {
        echo '<h4>Lista de produtos</h4>';
        echo '<ul>';
        echo '<li>Macarrão</li>';
        echo '<li>Feijão</li>';
        echo '<li>Carne bovina</li>';
        echo '<li>Arroz</li>';
        echo '<li>Leite</li>';
        echo '</ul>';
    }
}
