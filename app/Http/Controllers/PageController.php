<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\DomainName;
use App\ServerPacket;
use App\WebHosting;

class PageController extends Controller
{
    public function yazilimlarIndex()
    {
        return view('web-packet');
    }

    public function hakkimizdaIndex()
    {
        $about = About::query()->firstOrFail();
        return view('about', compact('about'));
    }

    public function alanAdiIndex()
    {
        $domain_names = DomainName::all();
        return view('domain-name', compact('domain_names'));
    }

    public function webHostingIndex()
    {
        $web_hostings = WebHosting::all();
        return view('web-hosting', compact('web_hostings'));
    }

    public function serverPacketIndex()
    {
        $server_packets = ServerPacket::all();
        return view('server-packet', compact('server_packets'));
    }

    public function contactIndex()
    {
        $contact = Contact::query()->first();
        return view('contact',compact('contact'));
    }
}
