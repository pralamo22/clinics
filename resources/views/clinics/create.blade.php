<x-layout>
    <h1 class="text-primary text-center">New Clinic</h1>
    <x-slot:metaTitle>
        <br>
        Nueva Clínica
    </x-slot>
    <x-slot:metaDescription>
        Alta de clínica de la aplicacion Clinics
    </x-slot>

    <div class="container">
        <h1>create.blade.php en views/clinics</h1>
        <form action="{{ route('post.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name">

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="telef" class="form-label">telef</label>
                <input type="text" class="form-control" id="telef">

            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="text-center">

        <a class="btn btn-outline-primary" href="/clinics.clinics">Volver</a>
    </div>
</x-layout>
