<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="crud-create-edit-container">
        <h2>Añadiendo atleta</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Vaya! Parece que falta algo por rellenar</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('atletas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="nombre completo">
            </div>

            <div>
                <strong>Licencia:</strong>
                <input type="text" name="licence" class="form-control" placeholder="licencia">
            </div>

            <div>
                <strong>Foto:</strong>
                <input type="file" name="image" class="form-control" placeholder="imagen">
            </div>

            <div>
                <strong>Categoría:</strong>
                <input type="text" name="category" class="form-control" placeholder="categoría">
            </div>

            <section class="buttons-group">
                <button type="submit" class="create-button">Crear</button>
                <a class="cancel-button" href="{{ route('atletas.index') }}"> Cancelar</a>
            </section>
        </form>
    </div>
</x-app-layout>
