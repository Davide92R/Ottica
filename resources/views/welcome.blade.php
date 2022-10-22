<x-layout>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <header class="container-fluid img-bg vh-100">
        <div class="pt-5">
            <h1 class="text-center display-1">Studio M & D</h1>
        </div>
    </header>
    <section class="container">
        <div class="row">
            @foreach ($doctors as $doctor)
            <div class="col-12 col-md-4">
                    <div class="card">
                        <img src="{{$doctor['url']}}" alt="">
                        <h2>{{$doctor['name']}} {{$doctor['surname']}}</h2>
                        <p>{{$doctor['description']}}</p>
                    
                    </div>
            </div>
            @endforeach

        </div>
    </section>
</x-layout>