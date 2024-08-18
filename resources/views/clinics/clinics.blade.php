<x-layout>
    <h1 class="text-primary text-center">Clinics</h1>
    <br>

    @if (session('status'))
        <div class="status text-center">
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

    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">email</th>
                    <th scope="col">telf</th>
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
                            </tr>
                @endforeach

            </tbody>
        </table>
        {{ $clinics->links() }}
    </div>

</x-layout>
