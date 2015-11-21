<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Schema;

class Tareas extends Controller
{


    /*
     * constructor
     * middleware
     */
    public function  __construct()
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
        $data = Tarea::all();
        return view("uson.tareas.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("uson.tareas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Requests\requestTareas $request)
    {

        try {

            Tarea::firstOrCreate(
                [
                    'nom_tarea' => $request->input('nom_tarea')
                ]
            );

            Flash::success("Tarea agregada");
            return Redirect::back();
        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");
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

            $data = Tarea::findOrFail($id);
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

            $data = Tarea::findOrFail($id);
            return view("uson.tareas.edit", compact('data'));

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
    public function update(Requests\requestTareas $request, $id)
    {
        try {

            $Tarea = Tarea::findOrFail($id);
            $Tarea->update(
                [
                    'nom_tarea' => $request->input('nom_tarea')

                ]
            );
            Flash::success("Elemento Actualizado !");
            return Redirect::to('tareas');
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
            Tarea::findOrFail($id)->delete();

        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");
            return Redirect::back();
        }
        return Redirect::back();
    }

    /*
     * inject
     */

    public function all()
    {
        return Tarea::all()->toArray();
    }

}
