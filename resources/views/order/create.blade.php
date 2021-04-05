@extends('default')


@section('title')
Voeg huisdier toe
@endsection

@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/orders" method="POST">
        @csrf

        <input class="create-form__input" name="user_id" id="user_id" type="hidden" value="{{$eigenaar->id}}"></input>
        
        <input class="create-form__input" name="huisdier_id" id="huisdier_id" type="hidden" value="{{$huisdier->id}}"></input>

        <section class="create-form__section">
            <label for="bericht">Bericht (verplicht)</label>
            <textarea class="create-form__input create-form__input--big" name="bericht" id="bericht" type="text-area" required></textarea>
        </section>        

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Huisdier aanmaken</button>
        </section>

    </form>
</article>
@endsection
