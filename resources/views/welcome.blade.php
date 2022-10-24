<x-layout>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <header class="container-fluid img-bg vh-100">
        <div class="pt-5">
            <h1 class="text-center display-1">Studio M D N</h1>
        </div>
    </header>
    <section class="container">
        <div class="row">
            <h2 class="display-4 text-center mt-5">Chi siamo:</h2>
            @foreach ($doctors as $doctor)
            <div class="col-12 col-md-4">
                <x-card
                    img="{{$doctor['url']}}"
                    name="{{$doctor['name']}}"
                    surname="{{$doctor['surname']}}"
                    description="{{$doctor['description']}}"
                />
            </div>
            @endforeach

        </div>
    </section>
</x-layout>