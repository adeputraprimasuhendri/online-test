@extends('welcome')
@section('title', 'Register')
@section('content')
<div class="title m-b-md">
    Register
</div>
<div class="m-b-md">
    <div class="row">
        <form class="col s12" method="POST" action="/createUser">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="fullname" name="fullname" type="text" class="validate">
                    <label for="fullname">Fullname</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Min" name="minReward" id="minReward" type="text" class="validate">
                    <label for="minReward">Min Reward</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Max" name="maxReward" id="maxReward" type="text" class="validate">
                    <label for="maxReward">Max Reward</label>
                </div>
            </div>
            <div class="row">
                <div id="random-reward"></div>
            </div>

            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
            </div>
        </form>
    </div>
</div>

<ul class="collection">
    @foreach ($users as $user)
    <li class="collection-item">
        {{ $user->fullname }}
        <span class="new badge" data-badge-caption="">Rp {{ $user->minReward }} - Rp {{ $user->maxReward }}</span>
    </li>
    @endforeach
</ul>




@include('includes.js')
<script>
    var slider = document.getElementById('random-reward');
    noUiSlider.create(slider, {
        start: [5000, 25000],
        connect: true,
        step: 1000,
        orientation: 'horizontal',
        range: {
            'min': 0,
            'max': 200000
        },
        format: wNumb({
            decimal: 0
        })
    });

    var paddingMin = document.getElementById('slider-padding-value-min');
    var paddingMax = document.getElementById('slider-padding-value-max');
    var min = document.getElementById('minReward');
    var max = document.getElementById('maxReward');
    slider.noUiSlider.on('update', function (values, handle) {
        if (handle) {
            max.value = values[handle];
        } else {
            min.value = values[handle];
        }
    });
</script>
@endsection