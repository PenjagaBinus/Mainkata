<x-guest-layout>
    <style>
        a{
            cursor: pointer;
            /* padding-top: 10px; */
        }

        #password_confirmation{
            margin-bottom: 10px;
        }
    </style>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name / Nama - Contoh: John Doe')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email / Surel - Contoh: johndoe@binus.ac.id')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password / Kata Sandi - Minimal delapan karakter ')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password / Konfirmasi Sandi')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                            <a href="" id="sandi">Lihat sandi</a>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered? / Sudah Registrasi ?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrasi') }}
            </x-primary-button>
        </div>
    </form>
    <script>
        const sandi = document.getElementById('sandi');
        let pass =document.getElementById('password');
        let pass2 = document.getElementById('password_confirmation');
        sandi.addEventListener('click', function(){
            event.preventDefault();
            let perubahan = pass.getAttribute('type');
            if(perubahan === 'password'){
                perubahan = 'text';
                pass.setAttribute('type', perubahan);
                pass2.setAttribute('type', perubahan);
            }else{
                perubahan = 'password';
                pass.setAttribute('type', perubahan);
                pass2.setAttribute('type', perubahan);
            }

        })
    </script>
</x-guest-layout>
