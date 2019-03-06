<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Response;
use App\Http\Resources\ContactCollection;
use App\Http\Resources\Contact as ContactResource;
use Validator;
use App\Rules\Phone;


class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        if( $request->ajax() ){
            return new ContactCollection(auth()->user()->contacts()->latest()->paginate($request->length));
        }
        return view('contacts.index');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules());

        if( $validator->fails() ){
            $response_data = ['errors' => $validator->getMessageBag()->toArray() ];       
        } else {
            $attr = $request->all();
            $attr['user_id'] = auth()->id();
            $response_data = Contact::create($attr);
           
        }

        return Response::json( $response_data );       
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return new ContactResource($contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $validator = Validator::make($request->all(), $this->rules());
        
        if( $validator->fails() ){
            $response_data = ['errors' => $validator->getMessageBag()->toArray() ];       
        } else {
            $attr = $request->all();
            $contact->update($attr);            
            $response_data = $contact;           
        }

        return Response::json( $response_data ); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
    }

    private function rules(){
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', new Phone],
            'email' => 'required|email'
        ];
    }
}