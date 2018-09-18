<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create() {
        
        return view('registration.create');
        
    }
    
    public function store(RegistrationForm $form){
        
        $form->persits();
        
        session()->flash('Thanks for sigining up!');
        
        return redirect()->home();
        
    }
}
