<x-layout>
    <h1 class="text-primary">Clinics</h1>
    <x-slot:metaTitle>
        Clinics
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

    </div>

</x-layout>
