{!! Form::open(['url'=>'blog/search', 'method'=>'POST' ,'id'=>'form']) !!}
<div class="input-group">
    <input name="word" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button  class="btn btn-default" type="submit">

                                <span class="glyphicon glyphicon-search">

                                </span>
                            </button >
                        </span>
</div>
{!! Form::close() !!}
        <!-- /.input-group -->