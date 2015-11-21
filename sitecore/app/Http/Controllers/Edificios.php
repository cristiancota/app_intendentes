<?php

namespace App\Http\Controllers;

use App\Area;
use App\Edificio;

use App\Intendente;
use App\Tarea;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class Edificios extends Controller
{

    /*
     * constructor
     * middleware
     */
    public function __construct()
    {
        $this->middleware('auth');
        //set the middleware and put the exceptios
        // $this->middleware('auth',['except'=>['index','show','filter']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Edificio::all();
        return view("uson.edificios.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("uson.edificios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Requests\requestEdifico $request)
    {

        try {
            $ed = new Edificio;
            $ed->nombre = $request->input('nombre');
            $ed->save();

            if ($request->input('plantas')):
                $ed->areas()->attach($request->input('plantas'));
            endif;
            Flash::success("Edificio agregado");
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

            $data = Edificio::findOrFail($id);
            //$areas = $data->areas->lists('id')->toArray();
            //$noes = Area::whereNotIn('id',$areas)->get();

           // return view("uson.edificios.show", compact("data","noes"));
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

            $data = Edificio::findOrFail($id);


            //$areas = $data->areas->lists('id')->toArray();
            //$noes = Area::whereNotIn('id',$areas)->get();

            return view("uson.edificios.edit", compact("data"));
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
    public function update(Requests\requestEdifico $request, $id)
    {
        try {

            $ed = Edificio::findOrFail($id);
            $ed->update(
                [
                    'nombre' => $request->input('nombre'),
                ]
            );

            /*if($request->input('plantas')):
                $ed->areas()->sync($request->input('plantas'));
            endif;
            */

            Flash::success("Elemento Actualizado !");
            return Redirect::to('edificios');
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
            Edificio::findOrFail($id)->delete();

        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");
            return Redirect::back();
        }
        return Redirect::back();
    }


    public function all()
    {
        return Edificio::all()->toArray();
    }

}
