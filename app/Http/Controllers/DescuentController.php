<?php

namespace App\Http\Controllers;

use App\Descuent;
use App\Models\Cooperative;
use Illuminate\Http\Request;

/**
 * Class DescuentController
 * @package App\Http\Controllers
 */
class DescuentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descuents = Descuent::paginate();

        return view('descuent.index', compact('descuents'))
            ->with('i', (request()->input('page', 1) - 1) * $descuents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $descuent = new Descuent();
        $cooperatives = Cooperative::pluck('nombreCoop','id');
        return view('descuent.create', compact('descuent','cooperatives'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Descuent::$rules);

        $descuent = Descuent::create($request->all());

        return redirect()->route('descuents.index')
            ->with('success', 'Descuent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $descuent = Descuent::find($id);
        $cooperatives = Cooperative::pluck('nombreCoop','id');
        return view('descuent.show', compact('descuent','cooperatives'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $descuent = Descuent::find($id);
        $cooperatives = Cooperative::pluck('nombrecoop','id');
        return view('descuent.edit', compact('descuent','cooperatives'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Descuent $descuent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descuent $descuent)
    {
        request()->validate(Descuent::$rules);

        $descuent->update($request->all());

        return redirect()->route('descuents.index')
            ->with('success', 'Descuent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $descuent = Descuent::find($id)->delete();

        return redirect()->route('descuents.index')
            ->with('success', 'Descuent deleted successfully');
    }
}
