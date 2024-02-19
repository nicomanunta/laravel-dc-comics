@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi un nuovo Fumetto</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('comics.store')}}" method="post">
                    @csrf
                    
                </form>
            </div>
        </div>
    </div>
@endsection