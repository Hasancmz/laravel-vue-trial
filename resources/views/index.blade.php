@extends('layouts.app')
@section('content')
    <header-side></header-side>
    <container>
        <div style="margin: 30px 0">
            <h5>Burası Home sayfası aşağıda ürünler bulunmaktadır.</h5>
        </div>
        <card-container>
                @foreach ($cards as $card) 
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($card->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5>{{ $card->title }}</h5>
                            <p class="card-text">{{ $card->description }}</p>
                            <h4>{{ $card->price }} TL</h4>
                        </div>
                    </div>
                @endforeach          
        </card-container>
        <div class="card-body d-flex align-items-center justify-content-center">
            {{ $cards->withQueryString()->links() }}  
        </div>
    </container>
    <footer-side></footer-side>
@endsection