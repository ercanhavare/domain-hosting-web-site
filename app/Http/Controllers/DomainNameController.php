<?php

namespace App\Http\Controllers;

use App\DomainName;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DomainNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $domain_names = DomainName::all();
        return view('domain-name.index', compact('domain_names'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('domain-name.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        try {
            DomainName::create([
                'extension' => $request->input('extension'),
                'registration_fee' => $request->input('registration_fee'),
                'renewal_fee' => $request->input('renewal_fee')
            ]);
            return redirect('/admin/domain-name')->with('success', 'Kayıt ekleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/domain-name/create')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param DomainName $domainName
     * @return Response
     */
    public function show(DomainName $domainName)
    {
        return view('domain-name.show', compact('domainName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param DomainName $domainName
     * @return Response
     */
    public function edit(DomainName $domainName)
    {
        return view('domain-name.edit', compact('domainName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param DomainName $domainName
     * @return JsonResponse
     */
    public function update(Request $request, DomainName $domainName)
    {
        try {
            $domainName->extension = $request->input('extension');
            $domainName->registration_fee = $request->input('registration_fee');
            $domainName->renewal_fee = $request->input('renewal_fee');
            $domainName->update();
            return redirect('/admin/domain-name')->with('success', 'Kayıt güncelleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/domain-name/' . $domainName->id . '/edit')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DomainName $domainName
     * @return JsonResponse|string
     */
    public function destroy(DomainName $domainName)
    {
        try {
            $domainName->delete();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
