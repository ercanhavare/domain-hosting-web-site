<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\DomainName;
use App\ServerPacket;
use App\WebHosting;
use App\WebPacket;

class PageController extends Controller
{
    public function yazilimlarIndex()
    {
        $web_packets = WebPacket::query()->get();
        $count_web_packets = $web_packets->count();

        return view('web-packet',compact('web_packets','count_web_packets'));
    }

    public function hakkimizdaIndex()
    {
        $about = About::all();
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
        return view('contact', compact('contact'));
    }
}
