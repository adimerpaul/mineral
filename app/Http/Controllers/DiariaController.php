<?php

namespace App\Http\Controllers;

use App\Diaria;
use Illuminate\Http\Request;

/**
 * Class DiariaController
 * @package App\Http\Controllers
 */
class DiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diarias = Diaria::paginate();

        return view('diaria.index', compact('diarias'))
            ->with('i', (request()->input('page', 1) - 1) * $diarias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diaria = new Diaria();
        return view('diaria.create', compact('diaria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Diaria::$rules);

        $diaria = Diaria::create($request->all());

        return redirect()->route('diarias.index')
            ->with('success', 'Diaria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diaria = Diaria::find($id);

        return view('diaria.show', compact('diaria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diaria = Diaria::find($id);

        return view('diaria.edit', compact('diaria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Diaria $diaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diaria $diaria)
    {
        request()->validate(Diaria::$rules);

        $diaria->update($request->all());

        return redirect()->route('diarias.index')
            ->with('success', 'Diaria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $diaria = Diaria::find($id)->delete();

        return redirect()->route('diarias.index')
            ->with('success', 'Diaria deleted successfully');
    }
}
