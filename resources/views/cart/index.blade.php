@foreach($cart->items as $item)
    <div class="row">
        <div class="col-md-4">
            <h4>{{$item->name}}</h4>
        </div>
        <div class="col-md-4">
            <p>{{$item->getPrice()}}</p>
        </div>
    </div>
@endforeach
