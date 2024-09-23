<section class="space-y-6">
    <style>
        a{
            cursor: pointer;
            padding-top: 10px;
        }

        #sandi{
            color: black;
            text-decoration: none;
            /* margin-bottom: 10px; */
        }
        #password{
            /* color: black; */
            /* text-decoration: none; */
            margin-bottom: 10px;
        }
    </style>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Hapus Akun') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Saat akun anda dihapus, maka tidak bisa dikembalikan lagi.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Apakah anda yakin ?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Semua poin serta peringkat level anda akan hilang dan tidak bisa dikembalikan') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />
                <a href="" id="sandi">Lihat sandi</a>
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
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
    </x-modal>
</section>
