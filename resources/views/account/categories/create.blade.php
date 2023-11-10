<x-main-esercitazione>

    <x-slot:title>Crea una nuova categoria</x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1>Crea una nuova categoria</h1>

                <form action="{{ route('categories.store') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control"
                                    maxlength="50" value="{{ old('name') }}">
                            @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-main-esercitazione>