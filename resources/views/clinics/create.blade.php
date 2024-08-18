<x-layout>
    <h1 class="text-primary text-center">New Clinic</h1>
    <x-slot:metaTitle>
        Nueva Clínica
    </x-slot>
    <x-slot:metaDescription>
        Alta de clínica de la aplicacion Clinics
    </x-slot>

    <div class="container">
        <h1>create.blade.php en views/clinics</h1>

        {{-- @dump($errors->all()) --}}

        <form action="{{ route('post.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required
                    value="{{ old('name') }}" />

                @error('name')
                    <br>
                    <small style="color:red"> {{ $message }} </small>
                @enderror

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    required value="{{ old('email') }}" />
                <div id="emailHelp" class="form-text">We'll
                    never share your email with anyone else.
                </div>

                @error('email')
                    <br>
                    <small style="color:red"> {{ $message }} </small>
                @enderror


            </div>
            <div class="mb-3">
                <label for="telef" class="form-label">telef</label>
                <input type="text" class="form-control" id="telef" name="telef" />

            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="text-center">

        <a class="btn btn-outline-primary" href="/clinics.clinics">Volver</a>
    </div>
</x-layout>
