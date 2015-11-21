<div class="form-group">
    {!! Form::label('title', 'Titulo:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('body', 'Contenido') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
    <input id="" name="{{$file}}" class="file" type="file" multiple data-min-file-count="1">
    <br>
</div>
{!! Form::submit($submit ,['class' => 'btn btn-info']) !!}