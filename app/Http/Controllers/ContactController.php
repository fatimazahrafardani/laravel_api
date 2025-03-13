<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return response()->json([
            'status' => 200,
            'message' => 'Contacts retrieved successfully',
            'data' => $contacts,
        ]);
    }
    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->designation = $request->input('designation');
        $contact->contact_no = $request->input('contact_no');
        $contact->save();
        return response()->json([
            'status' => 201,
            'message' => 'Contact created successfully',
            'data' => $contact,
            ]);

    }
    public function show($id){
    }
     public function edit($id){
                $contact = Contact::find($id);
                return response()->json([
                    'status' => 200,
                    'message' => 'Contact retrieved successfully',
                    'data' => $contact,
                    ]);

    }
    public function update(Request $request, $id){
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->designation = $request->input('designation');
        $contact->contact_no = $request->input('contact_no');
        $contact->save();
        return response()->json([
            'status' => 200,
            'message' => 'Contact updated successfully',
            'data' => $contact,
            ]);
            

    }
    public function destroy($id){

        $contact = Contact::find($id);
        $contact->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Contact deleted successfully',
            ]);
            
    }
    
 }
