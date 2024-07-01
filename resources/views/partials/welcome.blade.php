<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')

    @section('content')
    
    <div class="container characters cards px-4 pb-4">
        <div class="tag">
            <span>characters</span>
        </div>
        <div class="container pt-5 text-white">
    
            <h3>{{$pageUnderConstruction}}</h3>
            <p>{{$text}}</p>
        </div>
    
        <div class="row px-4 d-flex">
    
            @foreach($characters as $character)
            <div class="col-3 mt-5">
                <div class="comic_card">
                    <img src="{{$character['thumb']}}" alt="{{$character['name']}}">
                    <span>{{$character['name']}}</span>
                </div>
            </div>
            <!-- singola card -->
            @endforeach
        </div>
    
        <div class="button_box text-center mt-5">
            <button class="btn load_more">
                load more
            </button>
        </div>
    </div>
    <!-- ./cards -->
    
    <div class="blue_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="buy_logo d-flex text-uppercase align-items-center">
                        <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="smartphone icon">
                        <span>digital comics</span>
                    </div>
                </div>
                <div class="col">
                    <div class="buy_logo d-flex text-uppercase align-items-center">
                        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="lanterna t-shirt">
                        <span>dc merchandise</span>
                    </div>
                </div>
                <div class="col">
                    <div class="buy_logo d-flex text-uppercase align-items-center">
                        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="card">
                        <span>subscription</span>
                    </div>
                </div>
                <div class="col">
                    <div class="buy_logo d-flex text-uppercase align-items-center">
                        <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="locator">
                        <span>comic shop location</span>
                    </div>
                </div>
                <div class="col">
                    <div class="buy_logo d-flex text-uppercase align-items-center">
                        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="power card">
                        <span>dc power visa</span>
                    </div>
                </div>
            </div>
        </div>
    
        @endsection