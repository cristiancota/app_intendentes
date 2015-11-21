@extends('uson')
@section('title','Intendentes')
@section('main')
    <div class="row">
        <div class="col-lg-12 table-responsive">
            <table class="table table-striped table-hover">
                <thead class="text-center">

                <tr>
                    <th>
                        Número Intendente
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellidos
                    </th>
                    <th>
                        Celular
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
                    @forelse(array_chunk($data->all() , 4) as $da)
                        @foreach($da as $d)
                        <tr>
                            <td>
                                {{$d->num_inten}}
                            </td>
                            <td>
                                {{$d->nombre}}
                            </td>
                            <td>
                                {{$d->apellido}}
                            </td>
                            <td>
                                {{$d->cel}}
                            </td>

                            <td>
                                <a class=" btn btn-sm btn-success "
                                   href="{{ url('intendentes/'.$d->id.'/edit') }}">Editar
                                </a>
                            </td>
                            <td>
                                {!! Form::open(array('method'=>'DELETE', 'action'=>['Intendentes@destroy',$d->id] ,'class' => '', 'files'=>true)) !!}
                                {!! Form::submit('Eliminar', array('class' => 'btn btn-sm btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
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
                        </tr>
                    @endforelse
                @endif
                </tbody>
            </table>
            <div class="text-center">
                {!! $data->render() !!}
            </div>
        </div>
    </div>

@endsection