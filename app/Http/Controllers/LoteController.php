<?php

namespace App\Http\Controllers;

use App\Lote;
use App\Models\Client;
use App\Models\Cooperative;
use Illuminate\Http\Request;

/**
 * Class LoteController
 * @package App\Http\Controllers
 */
class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = Lote::paginate();

        return view('lote.index', compact('lotes'))
            ->with('i', (request()->input('page', 1) - 1) * $lotes->perPage());
             
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lote = new Lote();
        //$cooperatives = Cooperative::pluck('nombrecoop','client_id');
        $clients = Client::pluck('nombreclie','id');
        return view('lote.create', compact('lote','clients'));
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Lote::$rules);

        $lote = Lote::create($request->all());

        return redirect()->route('lotes.index')
            ->with('success', 'Lote created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id2)
    {
        $lote = Lote::find($id);
        //$coop = Cooperative::fing($id2);
        //$cooperatives = Cooperative::pluck('nombrecoop','client_id');
        $clients = Client::pluck('nombreclie','id');
        return view('lote.show', compact('lote','clients'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lote = Lote::find($id);
        $clients = Client::pluck('nombreclie','id');
        return view('lote.edit', compact('lote','clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lote $lote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lote $lote)
    {
        request()->validate(Lote::$rules);

        $lote->update($request->all());

        return redirect()->route('lotes.index')
            ->with('success', 'Lote updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lote = Lote::find($id)->delete();

        return redirect()->route('lotes.index')
            ->with('success', 'Lote deleted successfully');
    }
}
