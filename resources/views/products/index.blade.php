@foreach($products as $product)
    <div>
        <h4>{{$product->name}}</h4>
        <p>{{$product->description}}</p>
        <p>${{$product->getPrice() }}</p>
    </div>
@endforeach
