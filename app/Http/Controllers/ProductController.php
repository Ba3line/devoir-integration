<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product (){
        $titre = 'Blended to Perfection';
        $titre2 = 'Coffees & Teas';
        $text = "We take pride in our work, and it shows. Every time you order a beverage
        from us, we guarantee that it will be an experience worth having. Whether it's our world famous
        Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of
        speciality sourced black coffee, you will be coming back for more.";
        $titres2 = 'Delicious Treats, Good Eats';
        $titre2s2 = 'Bakery & Kitchen';
        $text2 = 'Our seasonal menu features delicious snacks, baked goods, and even full
        meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms
        whenever possible, alongside premium vendors for specialty goods.';
        $titres3 = 'From Around the World';
        $titre2s3 = 'Bulk Speciality Blends';
        $text3 = "Travelling the world for the very best quality coffee is something take
        pride in. When you visit us, you'll always find new blends from around the world, mainly from
        regions in Central and South America. We sell our blends in smaller to large bulk quantities.
        Please visit us in person for more details.";
        return view('product', compact('titre', 'titre2', 'text', 'titres2', 'titre2s2', 'text2', 'titres3', 'titre2s3', 'text3'));
    }
}
