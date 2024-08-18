<x-layout>
    <h1 class="text-primary">Clinics</h1>
    <x-slot:metaTitle>
        <br>
        Clinic detail
    </x-slot>
    <x-slot:metaDescription>
        Detalle de clínica de la aplicacion Clinics
    </x-slot>


    <h1>show.blade.php en views/clinics</h1>
    <p> {{ $clinic->name }} </p>
    <a href="/clinics.clinics">Volver</a>
</x-layout>
