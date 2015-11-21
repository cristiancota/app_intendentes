<?php

namespace App\Http\Controllers;

use App\Intendente;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Schema;

use Mockery\CountValidator\Exception;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
class Intendentes extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Intendente::orderBy('updated_at', 'desc')
            ->paginate(1000);
        return view("uson.intendentes.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("uson.intendentes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Requests\requestIntendentes $request)
    {

        //dd($request->input('cel'));
        try {

            Intendente::firstOrCreate(
                [
                    'num_inten' => $request->input('num_inten'),
                    'nombre' => $request->input('nombre'),
                    'apellido' => $request->input('apellido'),
                    'cel' => $request->input('cel')
                ]
            );
            Flash::success("Nuevo Intendente Agregado .!");
            return Redirect::back();
        } catch (\Exception $e) {
            Flash::overlay("Error del sistema" . $e);
            return Redirect::back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        try {
            $data = Intendente::findOrFail($id);
            return $data;
        } catch (\Exception $e) {
            Flash::overlay("La pagina que estas solicitando no existe");
            return response()->view('pages.e404')->header('Content-Type', 'text/html');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        try {

            $data = Intendente::findOrFail($id);
            return view("uson.intendentes.edit", compact('data'));

        } catch (\Exception $e) {
            Flash::overlay("La pagina que estas solicitando no existe");
            return response()->view('pages.e404')->header('Content-Type', 'text/html');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Requests\update $request, $id)
    {
        try {

            $intendente = Intendente::findOrFail($id);
            $intendente->update(
                [
                    'num_inten' => $request->input('num_inten'),
                    'nombre' => $request->input('nombre'),
                    'apellido' => $request->input('apellido'),
                    'cel' => $request->input('cel')
                ]
            );
            Flash::success("Elemento Actualizado !");
            return Redirect::to('intendentes');
        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            Intendente::findOrFail($id)->delete();
            Flash::success("Elemento Eliminado !");


        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");

        }
        return Redirect::back();
    }

    public function all()
    {
        return Intendente::all()->toArray();
    }
}
