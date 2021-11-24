<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateContactRequest;
use App\Models\Contact;

class AjaxController extends Controller
{
    public function storeContact(CreateContactRequest $request)
    {
        $validated = $request->validated();

        Contact::create($validated);

        return response()->json(['success'=>'Správa bola úspešne odoslaná!']);
    }
}
