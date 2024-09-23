<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Foto Profil') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Anda bisa mengubah foto profil anda di sini') }}
        </p>
    </header>
    @if(file_exists(public_path('images/'.Auth::user()->avatar)))
        <img src="{{ asset('images/'.Auth::user()->avatar) }}" alt="Avatar" style="width: 150px; height: 150px; margin-bottom: 10px">
    @else
    <img src="{{Auth::user()->avatar }}" alt="Avatar" style="width: 150px; height: 150px; margin-bottom: 10px">
    @endif
    <form method="post" action="{{ route('user.picture') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-4">
            <input type="file" class="form-control" id="foto" name="avatar_file">
            <label for="foto" class="input-group-text">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-upload" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                    </svg>
                </span>
            </label>
        </div>
        <x-primary-button>{{ __('Perbaharui') }}</x-primary-button>
    </form>
    <div class="flex items-center gap-4">
            

            @if (session('success') === 'fotosukses')
                <div class="popup"
                x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)">
                <p class="text-sm text-gray-600"
                >{{__('Disimpan')}}</p>
                </div>
            @endif
        </div>
</section>