<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contacts()  
    {
        $contacts = Contact::all();
        return response()->json([
            'status' => 200,
            'message' => 'Contacts retrieved successfully',
            'data' => $contacts,
        ]);
    }
    public function createContact(Request $request)
    {
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
 }
