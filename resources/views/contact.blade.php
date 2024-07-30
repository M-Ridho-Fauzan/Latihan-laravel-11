<x-layout>

    <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>
    <h3>Is Fucking Contact Page</h3>

    <h2>Profile</h2>
    <img src="{{ $image }}" alt="{{ $name }}" width="90" srcset="{{ $name }}">
    <p><b>Nama: </b>{{ $name }}</p>
    <p><b>Email: </b>{{ $email }}</p>
    <p><b>Sosmed Link </b><a href="{{ $sosmed }}" target="_blank" rel="noopener noreferrer">Click Di
            sini!</a>.</p>

</x-layout>
