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
}
