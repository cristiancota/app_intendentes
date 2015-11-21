<?php $n = rand(1, 6); ?>
<ul class="grid effect-{{$n}}" id="grid">
    @forelse($gallerie as $gal)
        <li>
            <a class="fancybox fancybox-thumb"
               href="{{url($gal->img)}}"
               rel="fancybox-thumb" title="{{$gal->title}} ">
                <img class="img-responsive "
                     src="{{url($gal->img)}}">
            </a>
        </li>
    @empty
        <li>
            <h1 class="text-capitalize text-center text-danger">No Images</h1>
        </li>
</ul>
@endforelse
