<x-guest-layout>
   <x-jet-authentication-card>
      <x-slot name="logo">
         <x-jet-authentication-card-logo />
      </x-slot>

      <x-jet-validation-errors class="mb-4" />

      @if (session('status'))
      <div class="mb-4 font-medium text-sm text-green-600">
         {{ session('status') }}
      </div>
      @endif

      <div class="mb-4">
         <x-jet-danger-button onclick="loginGoogle()">
            <svg class="ms-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M6 12C6 15.3137 8.68629 18 12 18C14.6124 18 16.8349 16.3304 17.6586 14H12V10H21.8047V14H21.8C20.8734 18.5645 16.8379 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C15.445 2 18.4831 3.742 20.2815 6.39318L17.0039 8.68815C15.9296 7.06812 14.0895 6 12 6C8.68629 6 6 8.68629 6 12Z"
                  fill="currentColor" />
            </svg>
            <!-- <span class="px-5">Google</span> -->
         </x-jet-danger-button>
      </div>






      <form method="POST" action="{{ route('login') }}">
         @csrf

         <div>
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
               autofocus />
         </div>

         <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
               autocomplete="current-password" />
         </div>

         <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
               <x-jet-checkbox id="remember_me" name="remember" />
               <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
         </div>

         <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
               {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-jet-button class="ml-4">
               {{ __('Log in') }}
            </x-jet-button>
         </div>
      </form>
   </x-jet-authentication-card>
</x-guest-layout>