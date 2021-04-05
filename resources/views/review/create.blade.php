@extends('default')


@section('title')
Schrijf een review
@endsection

@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/reviews" method="POST">
        @csrf
        <p>Schrijf een review voor de oppas van {{$huisdier->naam}}</p>

        <section class="create-form__section">
            <label for="review">review</label>
            <textarea class="create-form__input create-form__input--big" name="review" id="review" type="text-area" ></textarea>
        </section>

        <input class="create-form__input create-form__input--big" name="huisdier_id" id="huisdier_id" type="hidden" value="{{$huisdier->id}}" ></input>

        <input class="create-form__input create-form__input--big" name="order_id" id="order_id" type="hidden" value="{{$order->id}}" ></input>        

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Plaats review</button>
        </section>

    </form>
</article>
@endsection
