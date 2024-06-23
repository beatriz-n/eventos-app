<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
 public function index()
 {
     $nome = "Beatriz";
     $idade = 20;
     $arr = [1, 2, 3, 4, 5];
     $nomes = ['Beatriz', 'Bruno', 'Maria', 'José'];
     return view('welcome', [
         'nome' => $nome,
         'idade' => $idade,
         'arr' => $arr,
         'nomes' => $nomes
     ]);
 }

 public function create()
 {
     return view('events.create');
 }
}
