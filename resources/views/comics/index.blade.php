@extends('layout.app')

@section('content')   
    
    <div>
        <span class="current">current series</span>
    </div>
    <div class="fumetti">
        <div class="container">
            <div class="row py-5">
                @foreach ($comics as $comic)  
                    <div class="col-2 d-flex mt-4" >
                        <div style="width: 18rem;">
                            <a href="{{ route('comics.show', ['comic' => $comic->id])}}">
                                <img class="img-fumetti" src="{{ $comic['thumb'] }}" alt="">
                                <div class="distanza">
                                    <h6 class="titolo-fumetto">{{ $comic['title']}}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center ">
            <button class="color-button">load more</button>
            <a href="{{ route('comics.create')}}"><button class="color-button">Add comic</button></a>
        </div>
    </div>

@endsection


  