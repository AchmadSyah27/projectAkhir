<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Contact;
use Illuminate\View\View;


class ContactsController extends Controller{
    private $limit = 3;
    public function index(Request $request){
        if ($group_id = ($request->get('group_id'))){
            $contacts = Contact::where('group_id', $group_id)->paginate($this->limit);
        }else{
            $contacts = Contact::paginate($this->limit);
        }
        
        // $contacts = Contact::orderBy('created_at','DESC')->paginate(3);
        return view('contacts.index', compact('contacts'));
    }

    public function create(){
        return view("contacts.create");
    }
}