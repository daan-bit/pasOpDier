<li class="a-popup u-list-style-none verwijderCard" data-kind-of-huisdier="{{$huisdier->soort}}">
        <article class="verwijderCard__article"> 
            <header class="verwijderCard__header u-flex-v-center">
                <h2 class="verwijderCard__heading">{{$huisdier->soort}} {{$huisdier->naam}}</h2>
            </header>
            <figure class="verwijderCard__figure">
                    <img class="verwijderCard__image" src="{{$huisdier->image}}"  alt="{{$huisdier->naam . ' ' . $huisdier->soort}}"/>
            </figure>
            <section class="verwijderCard__textSection">
                <p class="verwijderCard__text">Naam: {{$huisdier->naam}}</p>
                <p class="verwijderCard__text">Soort: {{$huisdier->soort}}</p>
                <form action="/huisdieren/{{$huisdier->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="verwijderCard__button">Verwijder dier</button>
            </form> 
            </section>
        </article>  
    
</li>