<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadFile;
use App\Http\Requests;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;


class ContactsController extends Controller{
    private $limit = 3;

    // validasi pada form
    private $rules=[
        'name' => ['required', 'min:5'],
        'company' => ['required'],
        'email' => ['Required', 'email'],
        'photo' => ['mimes:jpg,jpeg,png,gif,bmp']
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

    // Request $request adalah object
    public function store(Request $request){
        // dirubah pemanggilan class menjadi lokal, dengan cara dibawah ini
        $this-> validate($request, $this->rules);

        $data = $this->getRequest($request);

        // untuk menyimpan submit-an client ke database, lalu arahkan variable $data ke dalam methode create
        Contact::create($data);

        // setelah tersimpan, akan di direct ke halaman index. lalu dibuat message jika berhasil tersimpan
        return redirect('contacts')->with('message', 'Kontak berhasil tersimpan');

    }

    private function getRequest(Request $request){

                $data = $request->all();

                //mengecek apakah ada file yang diupload pada method request
                //jika ada maka lakukan upload file
                if($request->hasFile('photo')){
                    // dibawah ini code untuk menampung variable sementara 
                    $photo = $request->file('photo');
                    $fileName = $photo->getClientOriginalName();
                    // menentukan foto disimpan
                    $destination = base_path() . '/public/uploads';
                    // ubah dari folder temporary ke folder yang sudah dibuat
                    $photo -> move($destination, $fileName);

                    // tampung semua request kedalam variable, supaya nanti bisa disimpan ke dalam database
                    $data['photo'] = $fileName;
                }

                // code dibawah ini tadinya untuk menandakan jika form submit client berhasil maka message muncul
                // die('contact berhasil tersimpan');

                return $data;
    }

    public function update($id, Request $request){

        // dirubah pemanggilan class menjadi lokal, dengan cara dibawah ini
        $this-> validate($request, $this->rules);

        // untuk mengambil data kontak sebelumnya, di variable sementara contact
        $data = $this->getRequest($request);
        $contact = Contact::find($id);
        $contact->update($data);

        // code dibawah ini tadinya untuk menandakan jika form submit client berhasil maka message muncul
        // die('contact berhasil tersimpan');

        // untuk mengupdate data kontak lalu disimpan ke database
        // $contact->update($request->all());

        // setelah diupdate, akan di direct ke halaman index. lalu dibuat message jika berhasil update
        return redirect('contacts')->with('message', 'Kontak berhasil diperbaharui');
    }
}