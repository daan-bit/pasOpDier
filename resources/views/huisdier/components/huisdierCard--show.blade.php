<article class="sushiCard a-popup">
     <figure class="sushiCard__figure">
        <img class="sushiCard__image" src="{{$huisdier->image}}"  alt="{{$huisdier->naam . ' ' . $huisdier->soort}}"/>
     </figure>
     <section class="sushiCard__text">
           <p>{{$huisdier->beschrijving}}</p>
     </section>
    <section class="sushiCard__btnSection">
         <button class="sushiCard__button">Order now</button>
         <a class="sushiCard__back_to_home" href="/huisdieren">Back to home</a>
    </section>
</article>