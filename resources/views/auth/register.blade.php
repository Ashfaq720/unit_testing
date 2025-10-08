<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg rounded-4 border-primary">
                    <div class="card-header bg-primary text-white text-center fw-bold fs-4">
                        Create an Account
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <table class="table table-borderless">
                                <tbody>
                                    <!-- Name -->
                                    <tr>
                                        <td class="align-middle fw-semibold" style="width: 30%;">Full Name</td>
                                        <td>
                                            <input type="text"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                name="name" value="{{ old('name') }}" required autofocus>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>

                                    <!-- Email Address -->
                                    <tr>
                                        <td class="align-middle fw-semibold">Email Address</td>
                                        <td>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>

                                    <!-- Password -->
                                    <tr>
                                        <td class="align-middle fw-semibold">Password</td>
                                        <td>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" name="password" required>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>

                                    <!-- Confirm Password -->
                                    <tr>
                                        <td class="align-middle fw-semibold">Confirm Password</td>
                                        <td>
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                id="password_confirmation" name="password_confirmation" required>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="{{ route('login') }}" class="text-decoration-none text-primary fw-semibold">
                                    Already registered? Login
                                </a>

                                <button type="submit" class="btn btn-primary fw-semibold px-4">
                                    Register
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
