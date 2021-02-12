<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PratoController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Prato::create([
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'user_id'=>Auth::user()->id,
        ]);

        return redirect('dashboard');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prato  $prato
     * @return \Illuminate\Http\Response
     */
    public function show(Prato $prato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prato  $prato
     * @return \Illuminate\Http\Response
     */
    public function edit(Prato $prato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prato  $prato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prato $prato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prato  $prato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prato $prato)
    {
        $prato->delete();
        
        return redirect('dashboard');
    }
}
