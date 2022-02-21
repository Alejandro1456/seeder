<?php

namespace App\Http\Controllers;

use App\Models\Bibliotecario;
use Illuminate\Http\Request;

/**
 * Class BibliotecarioController
 * @package App\Http\Controllers
 */
class BibliotecarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bibliotecarios = Bibliotecario::paginate();

        return view('bibliotecario.index', compact('bibliotecarios'))
            ->with('i', (request()->input('page', 1) - 1) * $bibliotecarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bibliotecario = new Bibliotecario();
        return view('bibliotecario.create', compact('bibliotecario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bibliotecario::$rules);

        $bibliotecario = Bibliotecario::create($request->all());

        return redirect()->route('bibliotecarios.index')
            ->with('success', 'Bibliotecario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bibliotecario = Bibliotecario::find($id);

        return view('bibliotecario.show', compact('bibliotecario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bibliotecario = Bibliotecario::find($id);

        return view('bibliotecario.edit', compact('bibliotecario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bibliotecario $bibliotecario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bibliotecario $bibliotecario)
    {
        request()->validate(Bibliotecario::$rules);

        $bibliotecario->update($request->all());

        return redirect()->route('bibliotecarios.index')
            ->with('success', 'Bibliotecario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bibliotecario = Bibliotecario::find($id)->delete();

        return redirect()->route('bibliotecarios.index')
            ->with('success', 'Bibliotecario deleted successfully');
    }
}
