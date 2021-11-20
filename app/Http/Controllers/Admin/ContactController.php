<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\UpdateAccountRequest;
use App\Http\Requests\CreateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function viewAll()
    {
        $contacts = Contact::all()->sortBy('date_created');

        return view('admin.contact.view-all', ['contacts' => $contacts]);
    }

    public function view($contactId)
    {
        $contact = Contact::findOrFail($contactId);

        return view('admin.contact.view', ['contact' => $contact]);
    }

    public function solve($contactId)
    {
        $contact = Contact::findOrFail($contactId);
        $contact->solved = true;
        $contact->update();
        return $this->viewAll();
    }

    public function destroy($contactId)
    {
        $contact = Contact::findOrFail($contactId);
        $contact->delete();
        return redirect('/admin');
    }

    public function store(CreateContactRequest $request)
    {
        $validated = $request->validated();

        Contact::create($validated);

        return redirect("/contact")->with('success', 'Správa bola úspešne odoslaná!');
    }

    
}
