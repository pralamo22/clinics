<x-layout>
    <h1 class="text-primary">Clinics</h1>
    <x-slot:metaTitle>
        <br>
        Clinic detail
    </x-slot>
    <x-slot:metaDescription>
        Detalle de clínica de la aplicacion Clinics
    </x-slot>



    <div class="container">
        <h1>show.blade.php en views/clinics</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">telf</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $clinic->id }}</th>
                    <td>{{ $clinic->name }}</td>
                    <td>{{ $clinic->email }}</td>
                    <td>{{ $clinic->telf }}</td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="text-center">

        <a class="btn btn-outline-primary" href="/clinics.clinics">Volver</a>
    </div>
</x-layout>
