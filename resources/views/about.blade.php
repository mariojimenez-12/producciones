@extends('welcome')

@section('seccion')
    <div class="mt-5">.</div>
    <div class="mt-5">.</div>
    <main class="row row-cols-1 row-cols-md-2 m-0 container-fluid">
        <img src="{{asset('img/r&r.jpg')}}" class="img-fluid p-0 col" alt="Imagen Logo R&R">
        <div class="col">
            <h2>R&R Producciones</h2>
            <div class="linea"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, sit aperiam tenetur eius suscipit culpa sunt officia quibusdam repellat alias consequuntur, cumque deleniti commodi magnam unde eligendi optio, voluptatum quam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, sit aperiam tenetur eius suscipit culpa sunt officia quibusdam repellat alias consequuntur, cumque deleniti commodi magnam unde eligendi optio, voluptatum quam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, sit aperiam tenetur eius suscipit culpa sunt officia quibusdam repellat alias consequuntur, cumque deleniti commodi magnam unde eligendi optio, voluptatum quam.</p>
        </div>
    </main>

    <div class="history mt-5 mb-3">
        <div class="container-fluid">
            <div class="app">
                <h2 class="mg-tp-5">Misión y visión</h2>
                <div class="linea"></div>
                <nav class="app-tabs">
                    <button type="button" class="boton-tab" data-paso="1">Misión</button>
                    <button type="button" class="boton-tab" data-paso="2">Visión</button>
                </nav>
    
                <!--inicia contenido app-->
    
                <div id="paso-1" class="seccion">
                     <div class="ofertas-texto">
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut at sapiente, mollitia nemo ea nesciunt labore, adipisci distinctio, qui velit provident sint illo odit perspiciatis. Dolorum sunt nihil impedit?</p>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam commodi, quia voluptatibus cum assumenda hic quae sapiente vel debitis iure facere corrupti placeat optio perferendis. Est distinctio obcaecati accusamus.</p>
                     </div>
                </div>
                <div id="paso-2" class="seccion">
                     <div class="ofertas-texto">
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut at sapiente, mollitia nemo ea nesciunt labore, adipisci distinctio, qui velit provident sint illo odit perspiciatis. Dolorum sunt nihil impedit?</p>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam commodi, quia voluptatibus cum assumenda hic quae sapiente vel debitis iure facere corrupti placeat optio perferendis. Est distinctio obcaecati accusamus.</p>
                             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, laborum itaque. Soluta deleniti consequuntur mollitia voluptatum, quibusdam pariatur, voluptate debitis laborum rerum odio natus, ea recusandae suscipit nam ut obcaecati.</p>
                     </div>
                </div>
            </div><!--cierre tab-->
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/tab.js') }}"></script>
@endsection