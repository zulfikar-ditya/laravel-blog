<x-guest-layout>
    @section('title', '- Login')
    <div class="container">
        <div class="row justify-content-center p-1" style="height: 100vh">
            <div class="col-md-5 shadow p-4 align-self-center rounded border border-secondary">
                <h1 class="text-center mt-3" style="letter-spacing: 10px">Login</h1>
                <hr class="border-info">
    
                <x-jet-validation-errors class="mb-4" />
        
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        
                <form method="POST" action="{{ route('login') }}" class="text-capitalize">
                    @csrf
        
                    <div class="form-group">
                        <label for="">email<span class="text-danger">*</span></label>
                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="form-group">
                        <label>password<span class="text-danger">*</span></label>
                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="form-group">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <hr class="border-info">
        
                    <div class="row flex-column items-center justify-end mt-4">
        
                        <input type="submit" value="Register" class="btn btn-outline-info mb-3">
        
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <span class="my-3">don't have an acount? <a href="{{route('register')}}">register</span></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
