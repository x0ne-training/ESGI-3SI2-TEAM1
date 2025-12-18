<?php

namespace App\Http\Controllers;

class NotesController extends Controller
{
    /**
     * Afficher la page des notes de l'année.
     */
    public function index()
    {
        return view('notes');
    }
}