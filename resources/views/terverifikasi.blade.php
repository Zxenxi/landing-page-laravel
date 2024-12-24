<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Testimoni Terverifikasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="dashboard">
                    <nav>
                        <ul>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="{{ route('dashboard') }}">Testimoni</a></li>
                            <li><a href="{{ route('terverifikasi') }}">Testimoni Terverifikasi</a></li>
                        </ul>
                    </nav>
                    <div class="table">
                        <h1 class="mb-4 text-3xl font-bold text-blue-600 text-center">Terverfikasi</h1>
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th>Kritik dan Saran</th>
                                <th>Testimoni</th>
                            </tr>
                            @foreach($terverifikasis as $terverifikasi)
                                <tr>
                                    <td>{{ $terverifikasi->nama }}</td>
                                    <td>{{ $terverifikasi->kritik_dan_saran }}</td>
                                    <td>{{ $terverifikasi->testimoni }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
