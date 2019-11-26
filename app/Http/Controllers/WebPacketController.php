<?php

namespace App\Http\Controllers;

use App\PacketName;
use App\WebPacket;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\File;

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
        return view('web-packet.index', compact('web_packets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $packet_names = PacketName::query()->get();
        return view('web-packet.create',compact('packet_names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'file_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = "";

        if ($files = $request->file('file_image')) {
            $destination_path = 'image/';
            $webImage = date('YmdHis') . '.' . $files->getClientOriginalExtension();
            $files->move($destination_path, $webImage);
            $path = '/' . $destination_path . $webImage;
        }

        try {
            WebPacket::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'desc' => $request->input('desc'),
                'file_image' => $path
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
        $request->validate([
            'file_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = "";

        if ($files = $request->file('file_image')) {
            $destination_path = 'image/';
            $webImage = date('YmdHis') . '.' . $files->getClientOriginalExtension();
            $files->move($destination_path, $webImage);
            $path = '/' . $destination_path . $webImage;
        } else {
            $path = $webPacket->file_image;
        }

        try {
            $webPacket->name = $request->input('name');
            $webPacket->price = $request->input('price');
            $webPacket->desc = $request->input('desc');
            $webPacket->file_image = $path;
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
            // remove the '/' from the path
            $path = substr($webPacket->file_image, '1');

            if (file_exists($path)) {
                unlink($path);
            }
            $webPacket->delete();
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}
