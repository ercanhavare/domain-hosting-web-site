<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DomainAvaibilityController extends Controller
{
    public function searchDomain(Request $request)
    {
        $domain_name = $request->input('domain_name');
        $result = '';
        try {
            $client = new Client();
            $response = $client->get('http://api.whoapi.com/?apikey=5a4e198eaa62e01e59fe5f9101698de4&r=taken&domain=' . $domain_name);

            if ($response->getReasonPhrase() == 'OK') {
                $body = json_decode($response->getBody());
                if ($body->taken == '1') {
                    $result = 'Alan adı kullanımdadır.';
                } else if ($body->taken == '0') {
                    $result = 'Alan adı alınabilir.';
                } else {
                    $result = 'Bilinmeyen sonuç!';
                }
                return view('search-domain', compact('domain_name', 'result'));
            } else {
                $result = 'Hatalı sonuç!';
                return view('search-domain', compact('domain_name', 'result'));
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
