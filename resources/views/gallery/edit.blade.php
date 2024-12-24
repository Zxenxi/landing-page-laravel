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
                    You're logged in!
                </div>
                <div class="dashboard">
                    <nav>
                        <ul>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/dashboard">Testimoni</a></li>
                            <li><a href="/dashboard/terverifikasi">Testimoni Terverifikasi</a></li>
                        </ul>
                    </nav>
                    <div class="container">
                        <h2>Edit Image</h2>
                        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $gallery->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">


