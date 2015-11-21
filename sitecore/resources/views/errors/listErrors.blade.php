<br/>
<div class="row">
    @if($errors->any())
        @foreach($errors->all() as $e)
        <div class="alert alert-danger alert-important text-center text-capitalize">
            <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
            {{$e}}
        </div>
        @endforeach
    @endif
</div>