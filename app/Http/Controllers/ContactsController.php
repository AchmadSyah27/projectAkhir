<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Contact;
use Illuminate\View\View;


class ContactsController extends Controller{
    private $limit = 3;
    private $rules=[
        'name' => ['required', 'min:5'],
        'company' => ['required'],
        'email' => ['Required', 'email']
    ];

    public function index(Request $request){
        if ($group_id = ($request->get('group_id'))){
            $contacts = Contact::where('group_id', $group_id)->orderBy('id', 'desc')->paginate($this->limit);
        }else{
            $contacts = Contact::orderBy('id', 'desc')->paginate($this->limit);
        }
        
        // $contacts = Contact::orderBy('created_at','DESC')->paginate(3);
        return view('contacts.index', compact('contacts'));
    }

    // untuk tambah baru kontak
    public function create(){
        return view("contacts.create");
    }

    // untuk edit kontak
    public function edit(contact $contact):View {
        // $contact = Contact::find($contacts);
        return view("contacts.edit", compact('contact'));
    }

    public function store(Request $request){
        // dirubah pemanggilan class menjadi lokal, dengan cara dibawah ini
        $this-> validate($request, $this->rules);

        $this-> validate($request, $rules);

        // code dibawah ini tadinya untuk menandakan jika form submit client berhasil maka message muncul
        // die('contact berhasil tersimpan');

        // untuk menyimpan submit-an client ke database
        Contact::create($request->all());

        // setelah tersimpan, akan di direct ke halaman index. lalu dibuat message jika berhasil tersimpan
        return redirect('contacts')->with('message', 'Kontak berhasil tersimpan');
    }

    public function update($id, Request $request){

        // dirubah pemanggilan class menjadi lokal, dengan cara dibawah ini
        $this-> validate($request, $this->rules);

        // untuk mengambil data kontak sebelumnya, di variable sementara contact
        $contact = Contact::find($id);

        // code dibawah ini tadinya untuk menandakan jika form submit client berhasil maka message muncul
        // die('contact berhasil tersimpan');

        // untuk mengupdate data kontak lalu disimpan ke database
        $contact->update($request->all());

        // setelah diupdate, akan di direct ke halaman index. lalu dibuat message jika berhasil update
        return redirect('contacts')->with('message', 'Kontak berhasil diperbaharui');
    }
}