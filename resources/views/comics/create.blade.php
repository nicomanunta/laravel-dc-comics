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
                        </div>
                        <div class="py-3">  
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrizione"></textarea>
                        </div>
                        <div class="py-3">
                            <label for="thumb" class="form-label">Link immagine copertina</label>
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Link immagine copertina">
                        </div>
                        <div class="py-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Prezzo ($00.00)">
                        </div>
                        <div class="py-3">
                            <label for="series" class="form-label">Serie</label>
                            <input type="text" name="series" id="series" class="form-control" placeholder="Serie">
                        </div>
                        <div class="py-3">
                            <label for="sale_date" class="form-label">Data di uscita</label>
                            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Data di uscita">
                        </div>
                        <div class="py-3">
                            <label for="type" class="form-label">Tipo</label>
                            <select name="type" id="type" class="form-control">
                                <option value="">Seleziona il tipo</option>
                                <option value="comic book">Comic Book</option>
                                <option value="graphic novel">Graphic Novel</option>
                            </select>
                        </div>
                        {{-- <div class="py-3">
                            <label for="artists" class="form-label">Disegnato da</label>
                            <input type="text" name="" id="" class="form-control" placeholder="">
                        </div>
                        <div class="py-3">
                            <label for="writers" class="form-label">Scritto da</label>
                            <input type="text" name="" id="" class="form-control" placeholder="">
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection