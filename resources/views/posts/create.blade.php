@extends('layouts.rbac')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-primary rounded-4">
                    <div class="card-header bg-primary text-white text-center fs-4 fw-bold">
                        Create Post
                    </div>

                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf

                            <table class="table table-bordered table-hover align-middle">
                                <tbody>
                                    <!-- Title -->
                                    <tr class="table-light">
                                        <td class="fw-semibold" style="width: 25%;">Title</td>
                                        <td>
                                            <input type="text" name="title" value="{{ old('title') }}"
                                                class="form-control @error('title') is-invalid @enderror" required>
                                            @error('title')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>

                                    <!-- Body -->
                                    <tr class="table-info">
                                        <td class="fw-semibold">Body</td>
                                        <td>
                                            <textarea name="body" rows="6" class="form-control @error('body') is-invalid @enderror" required>{{ old('body') }}</textarea>
                                            @error('body')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary fw-semibold">
                                    Cancel
                                </a>

                                <button type="submit" class="btn btn-success fw-bold px-4 py-2 shadow-sm">
                                    Save (Draft)
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
