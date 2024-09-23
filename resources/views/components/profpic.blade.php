@if(file_exists(public_path('images/'.Auth::user()->avatar)))
    <img src="{{ asset('images/'.Auth::user()->avatar) }}" alt="" style="width: 50px; height:50px;">
@else
    <img src="{{ Auth::user()->avatar }}" alt="" style="width: 50px; height:50px;">
@endif
