<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Afficher le formulaire de signalement d'absence.
     */
    public function index()
    {
        return view('absence');
    }

    /**
     * Traiter l'envoi du formulaire de signalement d'absence.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_prenom' => 'required|string|max:255',
            'classe' => 'required|string|max:255',
            'date_cours' => 'required|date',
            'motif' => 'required|string|max:1000',
        ]);

        return redirect()->route('absences.index')->with('success', 'Votre absence a été prise en compte.');
    }
}