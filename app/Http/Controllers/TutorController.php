<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutorEmpresa;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = tutorEmpresa::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'empresa'=>'required',
            'nom'=>'required',
            'primer_llinatge'=>'required',
            'segon_llinatge'=>'required',
            'document_identitat'=>'required',
            'pais_document'=>'required',
            'provincia'=>'required',
            'municipi'=>'required',
            'telefon'=>'required',
            'email'=>'required',
            'estat'=>'required'
        ]);

        $contact = new tutorEmpresa([
            'empresa' => $request->get('empresa'),
            'nom' => $request->get('nom'),
            'primer_llinatge' => $request->get('primer_llinatge'),
            'segon_llinatge' => $request->get('segon_llinatge'),
            'document_identitat' => $request->get('document_identitat'),
            'pais_document' => $request->get('pais_document'),
            'provincia' => $request->get('provincia'),
            'municipi' => $request->get('municipi'),
            'telefon'=> $request->get('telefon'),
            'email'=> $request->get('email'),
            'estat'=> $request->get('estat')
        ]);
        $contact->save();
        return redirect('/contacts')->with('success', 'Tutor guardado!');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = tutorEmpresa::find($id);
        return view('contacts.edit', compact('contact'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'empresa'=>'required',
            'nom'=>'required',
            'primer_llinatge'=>'required',
            'segon_llinatge'=>'required',
            'document_identitat'=>'required',
            'pais_document'=>'required',
            'provincia'=>'required',
            'municipi'=>'required',
            'telefon'=>'required',
            'email'=>'required',
            'estat'=>'required'
        ]);

        $contact = tutorEmpresa::find($id);
        $contact->empresa =  $request->get('empresa');
        $contact->nom = $request->get('nom');
        $contact->primer_llinatge = $request->get('primer_llinatge');
        $contact->segon_llinatge = $request->get('segon_llinatge');
        $contact->document_identitat = $request->get('document_identitat');
        $contact->pais_document = $request->get('pais_document');
        $contact->provincia = $request->get('provincia');
        $contact->municipi = $request->get('municipi');
        $contact->telefon = $request->get('telefon');
        $contact->email = $request->get('email');
        $contact->estat = $request->get('estat');
        $contact->save();

        return redirect('/contacts')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = tutorEmpresa::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Contact deleted!');
    }
}
