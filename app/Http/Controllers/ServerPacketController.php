<?php

namespace App\Http\Controllers;

use App\ServerPacket;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServerPacketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $server_packets = ServerPacket::all();
        return view('server-packet.index',compact('server_packets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('server-packet.create');
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
            ServerPacket::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'cpu' => $request->input('cpu'),
                'ram' => $request->input('ram'),
                'hdd' => $request->input('hdd'),
                'internet' => $request->input('internet'),
                'traffic' => $request->input('traffic')
            ]);
            return redirect('/admin/server-packet')->with('success', 'Kayıt ekleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/server-packet/create')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param ServerPacket $serverPacket
     * @return Response
     */
    public function show(ServerPacket $serverPacket)
    {
        return view('server-packet.show', compact('serverPacket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ServerPacket $serverPacket
     * @return Response
     */
    public function edit(ServerPacket $serverPacket)
    {
        return view('server-packet.edit', compact('serverPacket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ServerPacket $serverPacket
     * @return JsonResponse
     */
    public function update(Request $request, ServerPacket $serverPacket)
    {
        try {
            $serverPacket->name = $request->input('name');
            $serverPacket->price = $request->input('price');
            $serverPacket->cpu = $request->input('cpu');
            $serverPacket->ram = $request->input('ram');
            $serverPacket->hdd = $request->input('hdd');
            $serverPacket->internet = $request->input('internet');
            $serverPacket->traffic = $request->input('traffic');
            $serverPacket->update();
            return redirect('/admin/server-packet')->with('success', 'Kayıt güncelleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/server-packet/' . $serverPacket->id . '/edit')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ServerPacket $serverPacket
     * @return Response|string
     */
    public function destroy(ServerPacket $serverPacket)
    {
        try {
            $serverPacket->delete();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
