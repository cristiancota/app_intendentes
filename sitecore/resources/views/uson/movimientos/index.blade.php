@extends('uson')
@section('title','Movimientos')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
                <thead class="text-center">

                <tr>
                    <th>
                        Creeada
                    </th>
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
                    <th>
                        <i class="fa fa-edit"></i>
                    </th>
                    <th>
                        <i class="fa fa-lock"></i>
                    </th>
                    <th>
                        <i class="fa fa-times"></i>
                    </th>
                </tr>
                </thead>
                <tbody class="text-center">
                @if(isset($data))
                    @forelse($data as $d)
                        <tr>
                            <td>
                                {{date('j/m/Y', strtotime($d->updated_at))}}
                            </td>
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
                            <td>
                                <a class=" btn btn-sm btn-info "
                                   href="{{ url('movimientos/'.$d->id.'/edit') }}">Edit
                                </a>
                            </td>

                            <td>
                                {!! Form::open(['action'=>['Movimientos@desactivar',$d->id], 'method'=>'POST', 'class'=>'tab-pane active', 'id'=>'home' ]) !!}
                                <input type="hidden" name="activa" value="0">
                                {!! Form::submit('Desactivar', array('class' => 'btn btn-sm btn-warning')) !!}
                                {!! Form::close() !!}
                            </td>

                            <td>
                                {!! Form::open(array('method'=>'DELETE', 'action'=>['Movimientos@destroy',$d->id] ,'class' => '', 'files'=>true)) !!}
                                {!! Form::submit('Eliminar', array('class' => 'btn btn-sm btn-danger')) !!}
                                {!! Form::close() !!}
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