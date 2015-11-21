<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class Areas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Area::all();
        return view("uson.plantas.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("uson.plantas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Requests\requestArea $request)
    {

        //dd($request->input('cel'));
        try {

            Area::firstOrCreate(
                [
                    'nombre' => $request->input('nombre'),

                ]
            );
            Flash::success("Nueva Area Agregada .!");
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
            $data = Area::findOrFail($id);
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

            $data = Area::findOrFail($id);
            return view("uson.plantas.edit", compact('data'));

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
    public function update(Requests\requestArea $request, $id)
    {
        try {

            $areas = Area::findOrFail($id);
            $areas->update(
                [
                    'nombre' => $request->input('nom_edf')

                ]
            );
            Flash::success("Elemento Actualizado !");
            return Redirect::to('plantas');
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
            Area::findOrFail($id)->delete();
            Flash::success("Elemento Eliminado !");


        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");

        }
        return Redirect::back();
    }

    public function all(){
        $data =  Area::all()
            ->toArray();
        return $data;
    }
}
