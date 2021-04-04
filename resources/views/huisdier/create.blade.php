@extends('default')


@section('title')
Voeg huisdier toe
@endsection

@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/huisdieren" method="POST">
        @csrf
        <section class="create-form__section">
            <label for="naam">Naam huisdier</label>
            <input class="create-form__input" name="naam" id="naam" type="text" />
        </section>

        <section class="create-form__section">
            <label for="soort">Soort</label>
            <select class="create-form__input" id="soort" name="soort">
                @foreach($soorten as $soort)
                    <option value="{{$soort->soort}}">{{$soort->soort}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="afbeelding">Afbeelding</label>
            <select class="create-form__input" id="afbeelding" name="afbeelding">
                @foreach($afbeeldingen as $afbeelding)
                    <option value="{{$afbeelding->image}}">{{$afbeelding->image}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="wanneer">Wanneer</label>
            <textarea class="create-form__input" name="wanneer" id="wanneer" type="text" ></textarea>
        </section>
        
        <section class="create-form__section">
            <label for="uurtarief">Uurtarief</label>
            <textarea class="create-form__input" name="uurtarief" id="uurtarief" type="text" ></textarea>
        </section>

        <section class="create-form__section">
            <label for="hoelang">Hoelang (dagen)</label>
            <textarea class="create-form__input" name="hoelang" id="hoelang" type="number" ></textarea>
        </section>

        <section class="create-form__section">
            <label for="beschrijving">Beschrijving</label>
            <textarea class="create-form__input create-form__input--big" name="beschrijving" id="beschrijving" type="text-area" ></textarea>
        </section>

        

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Huisdier aanmaken</button>
        </section>

    </form>
</article>
@endsection
