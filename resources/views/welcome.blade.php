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
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="{{$doctors ['url']}}" alt="">
                </div>
            </div>

        </div>
    </section>
</x-layout>