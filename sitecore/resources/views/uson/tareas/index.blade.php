@extends('uson')
@section('title','Tareas')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
                <thead class="text-center">

                <tr>
                    <th>
                        Tarea
                    </th>
                    <th>
                        Creada
                    </th>
                    <th>
                        Actualizada
                    </th>
                    <th>
                        <i class="fa fa-edit"></i>
                    </th>
                    <th>
                        <i class="fa fa-remove"></i>
                    </th>
                </tr>
                </thead>
                <tbody class="text-center">
                @if(isset($data))
                    @forelse($data as $d)
                        <tr>
                            <td>
                                {{$d->nom_tarea}}
                            </td>
                            <td>
                                {{$d->created_at}}
                            </td>
                            <td>
                                {{$d->updated_at}}
                            </td>
                            <td>
                                <a class=" btn btn-sm btn-success "
                                   href="{{ url('tareas/'.$d->id.'/edit') }}">Edit
                                </a>
                            </td>
                            <td>
                                {!! Form::open(array('method'=>'DELETE', 'action'=>['Tareas@destroy',$d->id] ,'class' => '', 'files'=>true)) !!}
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
                        </tr>
                    @endforelse
                @endif
                </tbody>
            </table>

        </div>
    </div>

@endsection