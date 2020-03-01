<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    public function index() {
        echo '<h4>Lista de categorias</h4>';
        echo '<ul>';
        echo '<li>Alimentos</li>';
        echo '<li>Eletrônicos</li>';
        echo '<li>Móveis</li>';
        echo '<li>Informática</li>';
        echo '</ul>';
        echo '<hr>';

        if(Auth::check()) { // verifica se está logado
            $user = Auth::user(); // retorna o objeto do user (quem é o usuario)
            echo '<h4>Você está logado</h4>';
            echo '<p>' . $user->name . '</p>';
            echo '<p>' . $user->email . '</p>';
            echo '<p>' . $user->id . '</p>';
        } else {
            echo "<h4>Você não está logado!</h4>";
        }
    }
}
