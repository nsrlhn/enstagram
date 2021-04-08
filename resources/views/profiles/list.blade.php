@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Profil Listesi</h1>
    <div class="row">
        <div class="col-12">
            @foreach($profiles as $p)
                <a href="/profile/{{ $p->user->id }}" class="text-dark">
                    <div class="media p-4 border">
                        <img class="mr-3 rounded-circle" src="{{ $p->profileImage() }}" style="max-width: 75px">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $p->user->username }}</h5>
                            {{ $p->description }}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
