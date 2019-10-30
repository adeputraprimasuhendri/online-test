@extends('welcome')
@section('title', 'Login')
@section('content')
<div class="title m-b-md">
    Login
</div>
<div class="m-b-md">
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
