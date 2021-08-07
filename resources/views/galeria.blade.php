@extends('welcome')

@section('seccion')
    <div class="mt-5">.</div>

    <div class="container-fluid galeria mt-5">
        <h2>Galeria</h2>
        <div class="grid-galeria-imagenes">
            @foreach ($galeria as $galeria)
                    <img src="/storage/{{ $galeria->imagen }}" alt="{{ $galeria->descripcion }}" class="img img-fluid">
            @endforeach
        </div>
    </div>
    <div class="container-img">
        <img src="" alt="" class="img-show">
        <i class='bx bx-x'></i>
        <p class="copy"></p>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/galeria.js') }}"></script>
@endsection