<article class="huisdierCard a-popup">
     <figure class="huisdierCard__figure">
        <img class="huisdierCard__image" src="{{$huisdier->image}}"  alt="{{$huisdier->naam . ' ' . $huisdier->soort}}"/>
     </figure>
     <section class="huisdierCard__text">
          <h2 class="huisdierCard__subtitel">Beschrijving</h2>
          <p class="huisdierCard__eigenschap huisdierCard__eigenschap--beschrijving">{{$orderAanvraag->bericht}}</p>
     </section>

    <section class="huisdierCard__btnSection">
          <a href="/reviews/{{$huisdier->id}}/create"><button class="huisdierCard__button">Accepteren</button></a>
          <button class="huisdierCard__button">Weigeren</button>
         <a class="huisdierCard__back_to_home" href="/huisdieren">Terug naar de anderen</a>
    </section>
</article>