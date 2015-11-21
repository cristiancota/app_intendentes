<ul class="list-inline text-center">
    <li>
        <a class=" btn btn-sm btn-info " href="{{ URL::previous() }}">Back</a>
    </li>
    <li>
        <a class=" btn btn-sm btn-success "
           href="{{ url('blog/'.$article->id.'/edit') }}">Edit</a>
    </li>
    <li>
        {!! Form::open(array('method'=>'DELETE', 'action'=>['Articles@destroy',$article->id] ,
        'class'
        => '', 'files'=>true)) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-sm btn-danger')) !!}
        {!! Form::close() !!}
    </li>
</ul>