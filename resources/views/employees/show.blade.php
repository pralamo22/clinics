<x-layout>
    <h1 class="text-primary">employees</h1>
    <x-slot:metaTitle>

        employee detail
    </x-slot>
    <x-slot:metaDescription>
        Detalle de empleado de la aplicacion clinics
    </x-slot>



    <div class="container">
        <h5>show.blade.php en views/employees</h5>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="w-25" scope="col">Empleado</th>
                    <th class="w-25" scope="col">número : {{ $employee->id }}</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>Nombre:</td>
                    <td>{{ $employee->name }}</td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td>{{ $employee->surname }}</td>
                </tr>
                <tr>
                    <td>Dni:</td>
                    <td>{{ $employee->dni }}</td>
                </tr>
                <tr>
                    <td>email:</td>
                    <td>{{ $employee->email }}</td>
                </tr>
                <tr>
                    <td>Clínica:</td>
                    <td>{{ $employee->clinica }}</td>
                </tr>
                <tr>
                    <td>Teléfono:</td>
                    <td>{{ $employee->telf }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-center">

        <a class="btn btn-outline-primary" href="/employees.employees">Volver</a>
        <br><br><br>
    </div>
</x-layout>
