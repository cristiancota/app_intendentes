<div class="row">
    <div class="col-lg-6">
        <ul class="list-unstyled">
            <li>
                <a href="{{url("/blog")}}">Nuevas Publicaciones</a>
            </li>
            @inject('cat','App\Http\Controllers\Articles')


            @foreach($cat->categoriesArticles() as $ca)
                <li>
                    <a href="{{url("/blog/categorie/".$ca['name'])}}">{{$ca['name']}}</a>
                </li>
            @endforeach
            @if(Auth::check())
                <li role="separator" class="divider"></li>
                <li><a href="{{url("/blog/create")}}">Publica</a></li>
            @endif
        </ul>
    </div>
    <div class="col-lg-6">
        <ul class="list-unstyled">
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
        </ul>
    </div>
</div>