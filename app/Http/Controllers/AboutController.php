<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('about.create');
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
            About::create([
                'title' => $request->input('title'),
                'desc' => $request->input('desc'),
            ]);
            return redirect('/admin/about')->with('success', 'Kayıt ekleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/about/create')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param About $about
     * @return Response
     */
    public function show(About $about)
    {
        return view('about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param About $about
     * @return Response
     */
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param About $about
     * @return JsonResponse
     */
    public function update(Request $request, About $about)
    {
        try {
            $about->title = $request->input('title');
            $about->desc = $request->input('desc');
            $about->update();
            return redirect('/admin/about')->with('success', 'Kayıt güncelleme işlemi başarıyla gerçekleştirildi.');
        } catch (\Exception $exception) {
            return redirect('/admin/about' . $about->id . '/edit')->with('error', 'Ooopss! Hata oluştu.' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param About $about
     * @return Response|string
     */
    public function destroy(About $about)
    {
        try {
            $about->delete();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
