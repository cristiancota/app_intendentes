<div class="form-group">
    {!! Form::label('title', 'Nombre:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('body', 'Post') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">
    <input id="" name="{{$file}}" class="file" type="file">
    <br>
</div>

{!! Form::submit($text ,['class' => 'btn btn-info']) !!}