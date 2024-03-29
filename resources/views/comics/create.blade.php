@extends('layout.app')

@section('content')
    <div class="bg-azzurro">
        <div class="container pt-5">
            <div class="row bg-black border-radius d-flex justify-content-between p-5">
                <div class="col-12 text-white text-center">
                    <h1>Aggiungi un nuovo Fumetto</h1>
                </div>
                <div class="col-12">
                    <form action="{{ route('comics.store')}}" method="post" class="text-white">
                        @csrf
                        <div class="py-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Titolo">
                            @error('title')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="py-3">  
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione"></textarea>
                            @error('description')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="thumb" class="form-label">Link immagine copertina</label>
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Link immagine copertina">
                            @error('thumb')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Prezzo ($00.00)">
                            @error('price')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="series" class="form-label">Serie</label>
                            <input type="text" name="series" id="series" class="form-control" placeholder="Serie">
                            @error('series')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="sale_date" class="form-label">Data di uscita</label>
                            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="YYYY-MM-DD" >
                            @error('sale_date')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="type" class="form-label">Tipo</label>
                            <select name="type" id="type" class="form-control">
                                <option value="">Seleziona il tipo</option>
                                <option value="comic book">Comic Book</option>
                                <option value="graphic novel">Graphic Novel</option>
                            </select>
                            @error('type')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="artists" class="form-label">Disegnato da</label>
                            <input type="text" name="artists" id="artists" class="form-control" placeholder="Artists">
                            @error('artists')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="writers" class="form-label">Scritto da</label>
                            <input type="text" name="writers" id="writers" class="form-control" placeholder="Writers">
                            @error('writers')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button class="color-button">Add comic</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection