@foreach($products as $product)

    <div class="col-3">
        <figure>
            <a href="{{$product->image}}" data-lightbox="0" data-group="all"
               data-title="{{$product->shortname}}"
               data-description="{{$product->description}}"
               data-image="{{$product->image}}" class="wrapper lightbox-trigger">
                <img src="{{base_path($product->image)}}">
                <div class="overlay">
                </div>
                <div class="title">{{$product->longname}}</div>
            </a>
        </figure>
    </div>

@endforeach