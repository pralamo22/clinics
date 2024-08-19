<x-layout>
    <h1 class="text-primary">employees</h1>
    <x-slot:metaTitle>
        <br>
        employee detail
    </x-slot>
    <x-slot:metaDescription>
        Detalle de clínica de la aplicacion employees
    </x-slot>



    <div class="container">
        <h1>edit.blade.php en views/employees</h1>
        <form action="{{ route('employees.update', $employee) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required
                    value="{{ old('name', $employee->name) }}" />

                @error('name')
                    <br>
                    <small style="color:red"> {{ $message }} </small>
                @enderror

            </div>
            <div class="mb-3">
                <label for="telef" class="form-label">surname</label>
                <input type="text" class="form-control" id="surname" name="surname"
                    value="{{ old('surname', $employee->surname) }}" />

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    required value="{{ old('email', $employee->email) }}" />
                <div id="emailHelp" class="form-text">We'll
                    never share your email with anyone else.
                </div>

                @error('email')
                    <br>
                    <small style="color:red"> {{ $message }} </small>
                @enderror
                @csrf

            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">dni</label>
                <input type="text" class="form-control" id="dni" name="dni"
                    value="{{ old('dni', $employee->dni) }}" />

            </div>
            <div class="mb-3">
                <label for="telef" class="form-label">telef</label>
                <input type="text" class="form-control" id="telef" name="telef"
                    value="{{ old('telf', $employee->telf) }}" />

            </div>
            <div class="mb-3">
                <label for="clinica" class="form-label">Clínica</label>
                <input type="text" class="form-control" id="clinica" name="clinica"
                    value="{{ old('clinica', $employee->clinica) }}" />

            </div>
            <div class="mb-3">
                <label for="telef" class="form-label">telef</label>
                <input type="text" class="form-control" id="telef" name="telef"
                    value="{{ old('telf', $employee->telf) }}" />

            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        <br>

    </div>

    <div class="text-center">

        <a class="btn btn-outline-primary" href="/employees.employees">Volver</a>
    </div>
</x-layout>
