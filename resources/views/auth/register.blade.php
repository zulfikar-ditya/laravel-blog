<x-guest-layout>
        @section('title', '- Register')
        <div class="container">
            <div class="row justify-content-center align-items-center p-1" style="height: 100vh">
                <div class="col-md-5 shadow p-4 text-capitalize  rounded border border-secondary">
                    <h1 class="text-center" style="letter-spacing: 10px">Register</h1>
                    <hr class="border-info">

                    <x-jet-validation-errors class="mb-4" />
            
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
            
                        <div class="form-group">
                            <label for="">Name<span class="text-danger">*</span></label>
                            <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
            
                        <div class="form-group">
                            <label for="">Email<span class="text-danger">*</span></label>
                            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                        </div>
            
                        <div class="form-group">
                            <label for="">Password<span class="text-danger">*</span></label>
                            <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        </div>
            
                        <div class="form-group">
                            <label for="">Password confirmation<span class="text-danger">*</span></label>
                            <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        
                        <hr class="border-info">

                        <div class="flex flex-column items-center justify-end mt-4">
                            <input type="submit" value="Register" class="btn btn-outline-info mb-3">

                            <span>
                                Have an acount? <a href="{{route('login')}}">Login</a>
                            </span>
            
                        </div>
                    </form>
                </div>
            </div>
        </div>

</x-guest-layout>
