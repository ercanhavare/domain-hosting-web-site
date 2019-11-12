<?php

namespace App\Http\Controllers;

use App\WebHosting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WebHostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $webHosting = WebHosting::all();
        return view('web-hosting.index',compact('webHosting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('web-hosting.create');
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
            WebHosting::create([
                'host_os' => $request->input('host_os'),
                'title' => $request->input('title'),
                'web_space' => $request->input('web_space'),
                'web_permission' => $request->input('web_permission'),
                'traffic' => $request->input('traffic'),
                'e_mail' => $request->input('e_mail'),
                'sub_domain' => $request->input('sub_domain'),
                'domain_redirect' => $request->input('domain_redirect'),
                'database' => $request->input('database'),
                'panel' => $request->input('panel'),
                'support' => $request->input('support'),
                'ftp' => $request->input('ftp'),
                'reseller' => $request->input('reseller'),
            ]);
            return redirect('/admin/web-hosting')->with('success', 'Kayıt ekleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/web-hosting/create')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param WebHosting $webHosting
     * @return Response
     */
    public function show(WebHosting $webHosting)
    {
        return view('web-hosting.show', compact('webHosting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param WebHosting $webHosting
     * @return Response
     */
    public function edit(WebHosting $webHosting)
    {
        return view('web-hosting.edit', compact('webHosting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param WebHosting $webHosting
     * @return JsonResponse
     */
    public function update(Request $request, WebHosting $webHosting)
    {
        try {
            $webHosting->host_os = $request->input('host_os');
            $webHosting->title = $request->input('title');
            $webHosting->web_space = $request->input('web_space');
            $webHosting->web_permission = $request->input('web_permission');
            $webHosting->traffic = $request->input('traffic');
            $webHosting->e_mail = $request->input('e_mail');
            $webHosting->sub_domain = $request->input('sub_domain');
            $webHosting->domain_redirect = $request->input('domain_redirect');
            $webHosting->database = $request->input('database');
            $webHosting->panel = $request->input('panel');
            $webHosting->support = $request->input('support');
            $webHosting->ftp = $request->input('ftp');
            $webHosting->reseller = $request->input('reseller');
            $webHosting->update();
            return redirect('/admin/web-hosting')->with('success', 'Kayıt güncelleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/web-hosting/' . $webHosting->id . '/edit')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param WebHosting $webHosting
     * @return Response|string
     */
    public function destroy(WebHosting $webHosting)
    {
        try {
            $webHosting->delete();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
