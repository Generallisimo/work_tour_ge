<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function FacebookRender($id){
        
        if($id == 'whatsapp')
            $redirectTo = 'https://api.whatsapp.com/send/?phone=%2B995595201035&text=Добрый+день%21+Подскадите+по+поводу+экскурсии+в+Грузии%21&type=phone_number&app_absent=0';
        elseif($id == 'instagram')
            $redirectTo = 'https://www.instagram.com/georgiain_tour/?igshid=ZDdkNTZiNTM%3D';
        elseif($id == 'telegram')
            $redirectTo = 'https://t.me/georgiaintour';
        
        return view('/tour/facebook_redirect')->with('redirectTo', $redirectTo);
    }
}
