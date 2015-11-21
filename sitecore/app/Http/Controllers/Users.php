<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use League\OAuth1\Client\Server\User;

class Users extends Controller
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
        $data = \App\User::all();
        return view("uson.usuarios.index", compact("data"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("uson.usuarios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Requests\requestUser $request)
    {

        //dd($request->input('cel'));
        try {

            \App\User::firstOrCreate(
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' =>  bcrypt($request->input('password'))

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
            $data = \App\User::findOrFail($id);
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

            $data = \App\User::findOrFail($id);
            return view("uson.usuarios.edit", compact('data'));

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
    public function update(Requests\requestUser $request, $id)
    {
        try {

            $u = \App\User::findOrFail($id);

            if($request->input('password')):
                $u->update(
                    [
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'password' =>  bcrypt($request->input('password'))
                    ]
                );
            else:
                $u->update(
                    [
                        'name' => $request->input('name'),
                        'email' => $request->input('email')]
                );
                endif;


            Flash::success("Elemento Actualizado !");
            return Redirect::to('usuarios');
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
            \App\User::findOrFail($id)->delete();
            Flash::success("Usuarop Eliminado !");


        } catch (\Exception $e) {
            Flash::overlay("Error del sistema");

        }
        return Redirect::back();
    }
}
