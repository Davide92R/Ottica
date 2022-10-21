<x-layout>
    <h1 class="text-center">Contatti</h1>

    <header>
        <h2 class="text-center">Ci puoi trovare in:</h2>
        <p class="text-center">Via le mani da gli occhi,n2</p>
    </header>
    {{-- Form --}}
    <section class="container my-5 text-center">
        <h2>Oppure scrivici una mail compilando il Form</h2>
        
        <form method="POST" action="{{route('submit')}}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome e Cognome</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Scrivi il tuo messaggio</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </section>
    {{-- Form End --}}
</x-layout>