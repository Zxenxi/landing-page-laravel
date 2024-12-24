<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery') }}
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
                        <div class="container">
                            <h1 class="mb-4 text-4xl font-extrabold text-blue-600 text-center shadow-md p-4 rounded-lg bg-gray-50">Gallery</h1>
                            <a href="{{ route('gallery.create') }}" class="btn btn-success mb-4" style="font-weight: bold; font-size: 16px; border-radius: 25px; box-shadow: 0 4px 8px rgba(0, 128, 0, 0.2); transition: background-color 0.3s, transform 0.3s;">
                                Add New Image
                            </a>
                            <div class="row">
                                @foreach($galleries as $gallery)
                                    <div class="col-md-3 mb-4">
                                        <div class="card shadow-lg rounded-lg border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                                            <img src="{{ asset('storage/' . $gallery->image_path) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                                            <div class="card-body text-center">
                                                <h5 class="card-title font-semibold text-lg text-gray-800 mb-3">{{ $gallery->title }}</h5>
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning me-2">Edit</a>
                                                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
