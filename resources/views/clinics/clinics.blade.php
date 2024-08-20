<x-layout>
    <h1 class="text-center text-primary">Clinics</h1>
    <br>

    @if (session('status'))
        <div class="text-center status">
            <h2>{{ session('status') }}</h2>
        </div>
    @endif

    <div class=text-center>
        <a href="clinics/create" type="button" class="btn btn-outline-primary">Nueva clínica</a>


    </div>
    <x-slot:metaTitle>
        Clínicas
    </x-slot>
    <x-slot:metaDescription>
        Pagina de clínicas de la aplicacion Clinics
    </x-slot>
    {{-- {{-- @dump ($clinics); --}}
    <br>
    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">email</th>
                    <th scope="col">telf</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($clinics as $clinic)
                    <h2>
                        <h2>


                            <tr>
                                <th scope="row">{{ $clinic->id }}</th>
                                <td><a href="clinics.clinics/{{ $clinic->id }}">{{ $clinic->name }}</a></td>
                                <td>{{ $clinic->email }}</td>
                                <td>{{ $clinic->telf }}</td>
                                <td>

                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <form>
                                            <a href="{{ route('clinics.edit', $clinic) }}" type="button"
                                                class="btn btn-outline-primary">Editar</a>
                                            {{-- <button type="button" class="btn btn-outline-primary">Middle</button> --}}
                                            {{-- <a href="{{ route('clinics.destroy',$clinic) }}" type="button" class="btn btn-outline-danger">Eliminar</button> --}}
                                        </form>

                                        <form action="{{ route('clinics.destroy', $clinic) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('¿Estas seguro?')"
                                                class="btn btn-outline-primary">Borrar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                @endforeach

            </tbody>
        </table>
        {{ $clinics->links() }}
    </div>

</x-layout>
