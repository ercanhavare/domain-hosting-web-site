<?php

namespace App\Http\Controllers;

use App\WebPacket;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class WebPacketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $web_packets = WebPacket::query()->get();

        return view('web-packet.index',compact('web_packets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('web-packet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        try {
            $web_packet = WebPacket::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'desc' => $request->input('desc'),
            ]);
            return redirect('/admin/web-packet')->with('success', 'Kayıt ekleme işlemi başarıyla gerçekleştirildi.');
        } catch (Exception $exception) {
            return redirect('/admin/web-packet/create')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param WebPacket $webPacket
     * @return Response
     */
    public function show(WebPacket $webPacket)
    {
        return view('web-packet.show', compact('webPacket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param WebPacket $webPacket
     * @return Response
     */
    public function edit(WebPacket $webPacket)
    {
        return view('web-packet.edit', compact('webPacket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param WebPacket $webPacket
     * @return Response
     */
    public function update(Request $request, WebPacket $webPacket)
    {
        try {
            $webPacket->name = $request->input('name');
            $webPacket->price = $request->input('price');
            $webPacket->desc = $request->input('desc');
            $webPacket->update();
            return redirect('/admin/web-packet')->with('success', 'Kayıt güncelleme işlemi başarıyla gerçekleştirildi.');
        } catch (Exception $exception) {
            return redirect('/admin/web-packet/' . $webPacket->id . '/edit')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param WebPacket $webPacket
     * @return Response|string
     */
    public function destroy(WebPacket $webPacket)
    {
        try {
            $webPacket->delete();
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}
