<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\properti;
use Illuminate\Http\Request;

class propertiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $properti = properti::where('judul_penjualan', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('kecamatan', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('luas_bangunan', 'LIKE', "%$keyword%")
                ->orWhere('harga_permintaan', 'LIKE', "%$keyword%")
                ->orWhere('gambar', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $properti = properti::paginate($perPage);
        }

        return view('properti.index', compact('properti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('properti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        properti::create($requestData);

        return redirect('properti')->with('flash_message', 'properti added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $properti = properti::findOrFail($id);

        return view('properti.show', compact('properti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $properti = properti::findOrFail($id);

        return view('properti.edit', compact('properti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $properti = properti::findOrFail($id);
        $properti->update($requestData);

        return redirect('properti')->with('flash_message', 'properti updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        properti::destroy($id);

        return redirect('properti')->with('flash_message', 'properti deleted!');
    }
}
