<?php

namespace App\Http\Controllers;

use App\Planta;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class Plantas extends Controller
{
    

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
        $data = Planta::all();

        //dd($data);
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
    public function store(Requests\requestPlanta $request)
    {

      //  dd($request->input('nombre'));

        try {

            Planta::firstOrCreate(
                [
                    'nombre' => $request->input('nombre'),

                ]
            );
            Flash::success("Nueva Planta Agregada .!");
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
            $data = Planta::findOrFail($id);
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

            $data = Planta::findOrFail($id);
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
    public function update(Requests\requestPlanta $request, $id)
    {
        try {

            $data = Planta::findOrFail($id);
            $data->update(
                [
                    'nombre' => $request->input('nombre')

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
            Planta::findOrFail($id)->delete();
            Flash::success("Elemento Eliminado !");


        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");

        }
        return Redirect::back();
    }

    public function all(){
        $data =  Planta::all()
            ->toArray();
        return $data;
    }
}
