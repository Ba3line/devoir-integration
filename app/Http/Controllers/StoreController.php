<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    function store (){
        $titre = 'Strong Coffee, Strong Roots';
        $titre2 = 'About Our Cafe';
        $text = 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee
        sourced from artisan farmers in various regions of South and Central America. We are
        dedicated to travelling the world, finding the best coffee, and bringing back to you here in
        our cafe.';
        $text2 = 'We guarantee that you will fall in lust with our decadent
        blends the moment you walk inside until you finish your last sip. Join us for your daily
        routine, an outing with friends, or simply just to enjoy some alone time.';
        $titres1 = '';
        $titres2 = '';
        $jourSemaines = [
            (object)['jour' => 'Sunday', 'heure' => 'Closed'],
            (object)['jour' => 'Monday', 'heure' => '7:00 AM to 8:00 PM'],
            (object)['jour' => 'Tuesday', 'heure' => '7:00 AM to 8:00 PM'],
            (object)['jour' => 'Wednesday', 'heure' => '7:00 AM to 8:00 PM'],
            (object)['jour' => 'Thursday', 'heure' => '7:00 AM to 8:00 PM'],
            (object)['jour' => 'Friday', 'heure' => '7:00 AM to 8:00 PM'],
            (object)['jour' => 'Saturday', 'heure' => '9:00 AM to 5:00 PM'],
        ];
        $codePostale = '1116 Orchard Street';
        $adresse = 'Golden Valley, Minnesota';
        $appel = 'Call Anytime';
        $numero = '(317) 585-8468';
        return view('store', compact('titre', 'titre2', 'text', 'text2', 'jourSemaines', 'codePostale', 'adresse', 'appel', 'numero'));
    }
}
