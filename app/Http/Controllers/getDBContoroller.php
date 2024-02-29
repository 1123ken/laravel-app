<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class getDBContoroller extends Controller{

    protected $contact;

    public function __construct(){
        $this->contact = new Contact();
    }
    
    public function admin(){
        $contacts = $this->contact->findAllContacts();
        dump($contacts);
        return view('admin', compact('contacts'));
    }

    public function contactBody(){
        $data = $this->contact->find('email');
        dump($data);
        return view('contactBody');
    }
}
