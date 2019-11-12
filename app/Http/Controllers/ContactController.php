<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        try {
            Contact::create([
                'address' => $request->input('address'),
                'telephone' => $request->input('telephone'),
                'email' => $request->input('email'),
            ]);
            return redirect('/admin/contact')->with('success', 'Kayıt ekleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/contact/create')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return void
     */
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $contact
     * @return void
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Contact $contact
     * @return JsonResponse
     */
    public function update(Request $request, Contact $contact)
    {
        try {
            $contact->address = $request->input('address');
            $contact->telephone = $request->input('telephone');
            $contact->email = $request->input('email');
            $contact->update();
            return redirect('/admin/contact')->with('success', 'Kayıt güncelleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/contact' . $contact->id . '/edit')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $contact
     * @return JsonResponse|string
     */
    public function destroy(Contact $contact)
    {
        try {
            $contact->delete();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

    }
}
