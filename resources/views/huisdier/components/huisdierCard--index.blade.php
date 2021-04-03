<li class="a-popup u-list-style-none gridCard" data-kind-of-huisdier="{{$huisdier->soort}}">
<a href="/huisdieren/{{$huisdier->id}}">
        <article> 
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$huisdier->soort}} {{$huisdier->naam}}</h2>
            </header>
        <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$huisdier->image}}"  alt="{{$huisdier->naam . ' ' . $huisdier->soort}}"/>
        </figure>
        <section class="gridCard__textSection u-flex-v-center">
            <p class="gridCard__text">{{$huisdier->beschrijving}}</p>
        </section>
        </article>  
    </a>
</li>