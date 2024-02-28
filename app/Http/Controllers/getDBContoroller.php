<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class getDBContoroller extends Controller
{
    public function __construct(){
        $this->contact = new Contact();
    }
    public function admin(){
        $contacts = $this->contact->findAllContacts();
        return view('admin', compact('contacts'));
    }
}
