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

    /**
     * Traiter l'envoi du formulaire de contact.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'category' => 'required|in:personnel,webmaster',
            'message' => 'required|string|max:1000',
        ]);

        return redirect()->route('contact.index')->with('success', 'Votre demande a été prise en compte, nous vous recontacterons sous peu.');
    }

}