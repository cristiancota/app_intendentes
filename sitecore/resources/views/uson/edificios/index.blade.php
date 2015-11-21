@extends('uson')
@section('title','')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover">
                <thead class="text-center">

                <tr>

                    <th>
                        Nombre
                    </th>
                    <th>
                        <i class="fa fa-edit"></i>
                    </th>
                    <th>
                        <i class="fa fa-plus"></i>
                    </th>
                </tr>
                </thead>
                <tbody class="text-center">
                @if(isset($data))
                    @forelse($data as $d)
                        <tr>
                            <td>
                                {{$d->nombre}}
                            </td>
                            <td>
                                <a class=" btn btn-sm btn-success "
                                   href="{{ url('edificios/'.$d->id.'/edit') }}">Edit
                                </a>
                            </td>
                            <td>
                                {!! Form::open(array('method'=>'DELETE', 'action'=>['Edificios@destroy',$d->id] ,'class' => '', 'files'=>true)) !!}
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
                        </tr>
                    @endforelse
                @endif
                </tbody>
            </table>

        </div>
    </div>

@endsection