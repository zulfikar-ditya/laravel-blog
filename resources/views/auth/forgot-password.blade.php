<x-guest-layout>
    @section('title', '- Forgot Password')
        <div class="container">
            <div class="row justify-content-center p-1" style="height: 100vh">
                <div class="col-md-5 align-self-center p-3 shadow text-capitalize rounded border border-secondary">
                    <div class="mb-4 text-justify">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
            
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <x-jet-validation-errors class="mb-4" />
            
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
            
                        <div class="block">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
            
                        <div class="flex items-center justify-center mt-4">
                            <input type="submit" value="Email Password Reset Link" class="btn btn-outline-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-guest-layout>
