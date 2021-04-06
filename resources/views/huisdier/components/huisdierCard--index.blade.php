<li class="a-popup u-list-style-none gridCard" data-kind-of-huisdier="{{$huisdier->soort}}">
<a class="gridCard__a" href="/huisdieren/{{$huisdier->id}}">
        <article class="gridCard__article"> 
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$huisdier->soort}} {{$huisdier->naam}}</h2>
            </header>
            <figure class="gridCard__figure">
                    <img class="gridCard__image" src="{{$huisdier->image}}"  alt="{{$huisdier->naam . ' ' . $huisdier->soort}}"/>
            </figure>
            <section class="gridCard__textSection">
                <p class="gridCard__text">Naam: {{$huisdier->naam}}</p>
                <p class="gridCard__text">Soort: {{$huisdier->soort}}</p>
                <p class="gridCard__text">Wanneer: {{$huisdier->wanneer}}</p>
                <p class="gridCard__text">Duur: {{$huisdier->hoelang}} dagen</p>   
                 
                <h2 class="gridCard__subtitel">Beschrijving</h2>
                <p class="gridCard__text">{{$huisdier->beschrijving}}</p> 
            </section>
        </article>  
    </a>
</li>