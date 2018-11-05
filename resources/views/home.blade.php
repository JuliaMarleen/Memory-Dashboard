@extends('layouts.app')

@section('content')

<div class="container">
    <div class="grid-stack">
        <div class="grid-stack-item" data-gs-x="0" data-gs-y="0"
        data-gs-width="4" data-gs-height="5">
            <div class="grid-stack-item-content card">
                @include('home.motivationalslogan-partial')
            </div>
        </div>
        <div class="grid-stack-item" data-gs-x="4" data-gs-y="0"
        data-gs-width="4" data-gs-height="12">
            <div class="grid-stack-item-content card">
                @include('home.todo-partial')
            </div>
        </div>
        <div class="grid-stack-item" data-gs-x="9" data-gs-y="0"
        data-gs-width="4" data-gs-height="5">
            <div class="grid-stack-item-content card">
                @include('home.summer-partial')
            </div>
        </div>

        <div class="grid-stack-item" data-gs-x="0" data-gs-y="10"
        data-gs-width="4" data-gs-height="7">
            <div class="grid-stack-item-content card">
                @include('home.weather-partial')
            </div>
        </div>
        <div class="grid-stack-item" data-gs-x="9" data-gs-y="10"
        data-gs-width="4" data-gs-height="3">
            <div class="grid-stack-item-content card">
                @include('home.spanish-partial')
            </div>
        </div>
        <div class="grid-stack-item" data-gs-x="9" data-gs-y="5"
        data-gs-width="4" data-gs-height="5">
            <div class="grid-stack-item-content card">
                @include('home.backgroundcolor-partial')
            </div>
        </div>
    </div>
</div>
@endsection
