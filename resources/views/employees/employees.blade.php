<h1>employees.blade.php</h1>
<x-layout>
    <h1 class="text-center text-primary">employees</h1>
    <br>

    @if (session('status'))
        <div class="text-center status">
            <h2>{{ session('status') }}</h2>
        </div>
    @endif

    <div class=text-center>
        <a href="employees/create" type="button" class="btn btn-outline-primary">Nuevo empleado</a>


    </div>
    <x-slot:metaTitle>
        Empleados
    </x-slot>
    <x-slot:metaDescription>
        Pagina de clínicas de la aplicacion employees
    </x-slot>
    {{-- {{-- @dump ($employees); --}}
    <br>
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

                @foreach ($employees as $employee)
                    <h2>
                        <h2>


                            <tr>
                                <th scope="row">{{ $employee->id }}</th>
                                <td><a href="employees.employees/{{ $employee->id }}">{{ $employee->name }}</a></td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->telf }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Boton editar empleado">
                                        <a href="{{ route('employees.edit', $employee) }}" type="submit"
                                            class="btn btn-outline-primary">Editar</a>
                                        {{-- <button type="button" class="btn btn-outline-primary">Middle</button> --}}
                                        {{-- <a href="{{ route('employees.destroy',$employee) }}" type="button" class="btn btn-outline-danger">Eliminar</button> --}}
                                        <form action="{{ route('employees.destroy', $employee) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('¿Estas seguro?')"
                                                class="btn btn-outline-danger">Borrar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                @endforeach

            </tbody>
        </table>
        {{ $employees->links() }}
    </div>

</x-layout>
