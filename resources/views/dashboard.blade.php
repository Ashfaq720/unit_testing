@extends('layouts.rbac')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-2xl font-bold">Dashboard</h1>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger fw-semibold">
                Logout
            </button>
        </form>
    </div>

    <div class="mt-4 p-4 border rounded bg-white shadow-sm">
        {{ __("You're logged in as:") }} <strong>{{ Auth::user()->name }}</strong>
    </div>
@endsection
