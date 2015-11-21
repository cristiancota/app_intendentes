@extends('uson')
@section('title','Bienvenidos')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Lista de tareas
            </h1>

                    <table class="table table-striped table-hover">
                        <thead class="text-center">

                        <tr>
                            <th>
                                <i class="fa fa-calendar"></i>
                            </th>
                            <th>
                                <i class="fa fa-user"></i>
                            </th>
                            <th>
                                <i class="fa fa-building"></i>
                            </th>
                            <th>
                                <i class="fa fa-info"></i>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @if(isset($data))
                            @forelse($data as $d)
                                <tr>
                                    <td>
                                        {{$d->dia}}
                                    </td>
                                    <td>
                                        {{"# ".$d->intendente->num_inten."-".$d->intendente->nombre." ".$d->intendente->apellido}}
                                    </td>
                                    <td>
                                        {{$d->edificio->nombre ."-". $d->planta->nombre}}
                                    </td>
                                    <td>
                                        <a class=" btn btn-sm btn-default "
                                           href="{{ url('movimientos/'.$d->id) }}">Ver
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>
                                        -
                                    </td>
                                    <td>
                                        -
                                    </td>
                                    <td>
                                        -
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            @endforelse
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>

        @endsection
@endsection