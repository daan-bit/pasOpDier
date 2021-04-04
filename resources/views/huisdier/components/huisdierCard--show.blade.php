<article class="huisdierCard a-popup">
     <figure class="huisdierCard__figure">
        <img class="huisdierCard__image" src="{{$huisdier->image}}"  alt="{{$huisdier->naam . ' ' . $huisdier->soort}}"/>
     </figure>
     <section class="huisdierCard__text">
          <p>Hoi, ik ben <b>{{$huisdier->naam}}</b> en ik ben een {{$huisdier->soort}}.</p>
          <p>Mijn baasje zoekt een oppas op <b>{{$huisdier->wanneer}}</b> voor een duur van <b>{{$huisdier->hoelang}}</b> dagen en hij/zij betaald zelfs <b>{{$huisdier->uurtarief}}</b> euro per uur!</p>
          <br><p>Mocht je vragen hebben, neem contact op: <b>{{$eigenaar->email}}</b></p>

          <h2 class="huisdierCard__subtitel">Beschrijving</h2>
          <p class="huisdierCard__eigenschap huisdierCard__eigenschap--beschrijving">{{$huisdier->beschrijving}}</p>
     </section>

    <section class="huisdierCard__btnSection">
         <button class="huisdierCard__button">Ik wil oppassen</button>
         <a class="huisdierCard__back_to_home" href="/huisdieren">Terug naar de anderen</a>
    </section>
</article>