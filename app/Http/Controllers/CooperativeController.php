<?php

namespace App\Http\Controllers;

use App\Cooperative;
use Illuminate\Http\Request;

/**
 * Class CooperativeController
 * @package App\Http\Controllers
 */
class CooperativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperatives = Cooperative::paginate();

        return view('cooperative.index', compact('cooperatives'))
            ->with('i', (request()->input('page', 1) - 1) * $cooperatives->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cooperative = new Cooperative();
        return view('cooperative.create', compact('cooperative'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cooperative::$rules);

        $cooperative = Cooperative::create($request->all());

        return redirect()->route('cooperatives.index')
            ->with('success', 'Cooperative created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cooperative = Cooperative::find($id);

        return view('cooperative.show', compact('cooperative'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cooperative = Cooperative::find($id);

        return view('cooperative.edit', compact('cooperative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cooperative $cooperative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperative $cooperative)
    {
        request()->validate(Cooperative::$rules);

        $cooperative->update($request->all());

        return redirect()->route('cooperatives.index')
            ->with('success', 'Cooperative updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cooperative = Cooperative::find($id)->delete();

        return redirect()->route('cooperatives.index')
            ->with('success', 'Cooperative deleted successfully');
    }
}
