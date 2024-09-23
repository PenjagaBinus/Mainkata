<section>
    <style>
        .popup{
        position: fixed;
        top: 50%;
        left: 50%;        
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        padding: 20px;
        z-index: 1000;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 5px;
        text-align: center;
        width: 300px;
    }
    </style>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informasi pribadi') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Perbaharui nama dan surel akun anda") }}
        </p>
    </header>


    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <div class="popup"
                x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)">
                <p class="text-sm text-gray-600"
                >{{ __('Disimpan') }}</p>
                </div>
            @endif
        </div>
    </form>
</section>
