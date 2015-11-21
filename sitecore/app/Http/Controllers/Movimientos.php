<?php

namespace App\Http\Controllers;

use App\Edificio;
use App\Intendente;
use App\Movimiento;
use App\Planta;
use App\Revisione;
use App\Tarea;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class Movimientos extends Controller
{

    public  function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','filter']]);
       // $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Movimiento::orderBy('updated_at', 'desc')
           ->paginate(10);
        return view("uson.movimientos.index", compact("data"));

       // return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("uson.movimientos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Requests\requestMovimientos $request)
    {

       // dd($request->input('tarea_id'));
        try {

         $mov =   Movimiento::firstOrCreate(
                [
                   // 'tarea_id' => $request->input('tarea_id'),
                    'edificio_id' => $request->input('edificio_id'),
                    'planta_id' => $request->input('planta_id'),
                    'intendente_id' => $request->input('intendente_id'),
                    //'dia' => date('Y-m-d', strtotime($request->input('dia'))),
                    'dia'=> $request->input('dia')

                ]
            );

            $mov->tareas()->attach($request->input('tarea_id'));


            Flash::success("Nuevo movimiento Registrado .! $mov->id");
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
            $data = Movimiento::findOrFail($id);
            $rev = Revisione::all();
            return view('uson.movimientos.show', compact('data','rev'));
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

            $data = Movimiento::findOrFail($id);
            $tareasNoSeleccionadas = Tarea::whereNotIn('id',$data->tareas->lists('id')->toArray())->get();

            /*
            $tarea = Tarea::whereNotIn('id',[$data->tareas->id])->get();


            $edificios = Edificio::whereNotIn('id',[$data->edificio->id])->get();
            $plantas = Planta::whereNotIn('id',[$data->planta->id])->get();
           
*/
            return view("uson.movimientos.edit1", compact('data','tareasNoSeleccionadas'));

        } catch (\Exception $e) {
            Flash::overlay("$e");
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
    public function update(Requests\requestMovimientos $request, $id)
    {

        //dd($request->input('tarea_id'));
        try {

            $data = Movimiento::findOrFail($id);

            $data->tareas()->sync($request->input('tarea_id'));

            Flash::success("Elemento Actualizado !");
            return Redirect::to('movimientos');
        } catch (\Exception $e) {
            Flash::overlay("$e");
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Requests\requestMovimientos $request, $id)
    {
        try {
            Movimiento::findOrFail($id)->delete();
            Flash::success("Elemento Eliminado !");


        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");

        }
        return Redirect::back();
    }


    public function desactivar(Requests\requestMovimientos $request, $id)
    {
        try {
            $data = Movimiento::findOrFail($id);
            $data->update(
                [

                    'activa' => $request->input('activa'),

                ]
            );

            Flash::success("Elemento Desactivado !");
        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");

        }
        return Redirect::back();
    }



 public  function revision(Requests\requestRevisiones $request)
 {
  //   dd($request->all());

     try{

         Revisione::create(
             [

                 'rev' => $request->input('rev'),
                 'com' => $request->input('com'),
                 'movimiento_id'=> $request->input('movimiento_id')


             ]
         );




         Flash::success("Revision registrada con exito !");
         return Redirect::back();

     }
    catch(\Exception $e)
    {
        Flash::overlay("Error del sistema" . $e);
        return Redirect::back();
    }

 }


}