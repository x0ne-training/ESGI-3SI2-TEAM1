<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Afficher le formulaire de contact.
     */
    public function index()
    {
        return view('contact');
    }

}