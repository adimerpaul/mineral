<?php

namespace App\Http\Controllers;

use App\Quincena;
use Illuminate\Http\Request;
use Carbon\Carbon;

/**
 * Class QuincenaController
 * @package App\Http\Controllers
 */
class QuincenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quincenas = Quincena::paginate();
        $now= Carbon::now();
        $now->format('d-m-Y');
        return view('quincena.index', compact('quincenas','now'))
            ->with('i', (request()->input('page', 1) - 1) * $quincenas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quincena = new Quincena();
        $now= Carbon::now();
        $now->format('d-m-Y');
        return view('quincena.create', compact('quincena','now'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Quincena::$rules);

        $quincena = Quincena::create($request->all());
        
        return redirect()->route('quincenas.index')
            ->with('success', 'Quincena introducida correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quincena = Quincena::find($id);

        return view('quincena.show', compact('quincena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quincena = Quincena::find($id);

        return view('quincena.edit', compact('quincena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Quincena $quincena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quincena $quincena)
    {
        request()->validate(Quincena::$rules);

        $quincena->update($request->all());
      

        return redirect()->route('quincenas.index')
            ->with('success', 'Quincena actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $quincena = Quincena::find($id)->delete();

        return redirect()->route('quincenas.index')
            ->with('success', 'Quincena borrada correctamente');
    }
}
