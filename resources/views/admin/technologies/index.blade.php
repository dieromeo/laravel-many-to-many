@extends('layouts.admin')
@section('content')
    <div class="container py-4">
        @include('partials.toast')

        @foreach ($technologies as $technology)
            <div class="row justify-content-between">
                <div class="d-flex align-items-center col-auto">
                    <a href="{{ route('admin.technologies.show', $technology->id) }}"
                        class="text-decoration-none text-dark fs-3 mb-3 badge bg-light"
                        id="technologies-list">{{ $technology->title }}</a>
                </div>
                <div class="d-flex col-auto justify-content-end">
                    <a href="{{ route('admin.technologies.edit', $technology->id) }}"
                        class="btn btn-primary btn-sm  align-self-center">Modifica</a>
                    <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST"
                        class="align-self-center ms-2">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
