<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Contact;
use Illuminate\View\View;


class ContactsController extends Controller{
    public function index(){
        $contacts = Contact::paginate(3);
        // $contacts = Contact::orderBy('created_at','DESC')->paginate(3);
        return view('contacts.index', compact('contacts'));
    }
}