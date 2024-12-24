<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                            <li><a href="/dashboard">Testimoni</a></li>
                            <li><a href="/dashboard/terverifikasi">Testimoni Terverifikasi</a></li>
                        </ul>
                    </nav>
                    <div class="table">
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th>Kritik dan Saran</th>
                                <th>Testimoni</th>
                                <th>Action</th>
                            </tr>
                            @foreach($testimonis as $testimoni)
                                <tr>
                                    <td>{{ $testimoni->nama }}</td>
                                    <td>{{ $testimoni->kritik_dan_saran }}</td>
                                    <td>{{ $testimoni->testimoni }}</td>
                                    <td>
                                        <form method="post" action="{{ route('terima', $testimoni->nama) }}">
                                            @csrf
                                            <button type="submit">Terima</button>
                                        </form>
                                        <form method="post" action="{{ route('tolak', $testimoni->nama) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Tidak Terima</button>
                                        </form>
                                    </td>
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
