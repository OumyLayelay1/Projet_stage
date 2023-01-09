<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacte;
use App\Models\Resto;
use App\Models\Loger;
use App\Models\GalleriImage;
use App\Models\Slider;
use App\Models\Country;
use App\Models\Divertir;
use App\Models\Cadeau;
use App\Models\Bouger;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::orderBy('id', 'desc')
                    ->get();
        $countries = Country::orderBy('id', 'desc')
                    ->get();  
        $galleri_images = GalleriImage::orderBy('id', 'desc')
                    ->get();           
        return view('frontend.accueil',compact('countries','sliders','galleri_images'));
    }
    public function destination(){
        $countries = Country::orderBy('id', 'desc')
                    ->get(); 
        return view('frontend.destination',compact('countries'));
    }                               
    public function pays(){
        $bougers = Bouger::orderBy('id', 'desc')
                    ->get();
        $countries = Country::orderBy('id', 'desc')
                    ->get();
        $restos = Resto::orderBy('id', 'desc')
                    ->get();
        $logers = Loger::orderBy('id', 'desc')
                    ->get(); 
        $divertirs = Divertir::orderBy('id', 'desc')
                    ->get();       
        $cadeaus = Cadeau::orderBy('id', 'desc')
                    ->get(); 
        $galleri_images = GalleriImage::orderBy('id', 'desc')
                    ->get();                                 
        return view('frontend.pays', compact('restos','logers','countries','divertirs','cadeaus','bougers','galleri_images'));
    }  
    public function contact(){
        return view('frontend.contact');
    }
    public function langue(){
        return view('frontend.langue');
    }
    public function marche(){
        $cadeaus = Cadeau::orderBy('id', 'desc')
                    ->get();  
        return view('frontend.localisation-marche', compact('cadeaus'));
    }
    public function resto(){
        $restos = Resto::orderBy('id', 'desc')
                    ->get();
        return view('frontend.localisation-resto', compact('restos'));
    }
    public function reserve(){
        return view('frontend.reserve');
    }

    public function contactSend(Request $request){
       $message = New Contacte();

       $message->last_name = $request->last_name;
       $message->first_name = $request->first_name;
       $message->email = $request->email;
       $message->message = $request->message;

       $message->save();

       return redirect()->route('contact')->with('status','Merci pour votre commentaire! Il sera bien pris en compte');
    }


    
    
}
