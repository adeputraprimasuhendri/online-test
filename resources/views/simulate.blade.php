@extends('welcome')
@section('title', 'Simulate')
@section('content')
<div class="title m-b-md">
    Simulate
</div>
<div>
    Limit Rewards : <h5>Rp 200,000</h5>
</div>
<div class="m-b-md">
    <ul class="collection">

        @foreach ($users as $user)

        <li class="collection-item">
            {{ $user['fullname'] }}
            <span class="new badge" data-badge-caption="">Rp {{ $user['minReward'] }} - Rp {{ $user['maxReward'] }}</span>
            @if ($user['reward'] != 0)
            <span class="new badge red" data-badge-caption="Get Reward">
                Rp {{ $user['reward'] }}
            </span>
            @endif
            </li>
            @endforeach
    </ul>
    <div class="row">
        <div class="row">
            <a class="btn waves-effect waves-light" href="{{ route('simulate') }}">Another Day</a>
        </div>
    </div>
</div>
@endsection