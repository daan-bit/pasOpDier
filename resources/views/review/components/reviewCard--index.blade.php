<li class="a-popup u-list-style-none gridCard gridCard--review">
        <article class="gridCard__article"> 
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">Review van {{$review->infoOrder->infoEigenaar->name}}</h2>
            </header>
            <figure class="gridCard__figure">
                    <img class="gridCard__image" src="{{$review->infoHuisdier->image}}"  alt="Foto van {{$review->infoHuisdier->soort}} {{$review->infoHuisdier->naam}}"/>
            </figure>
            <section class="gridCard__textSection">          
                <h2 class="gridCard__subtitel">Review</h2>
                <p class="gridCard__text">{{$review->review}}</p> 
            </section>
        </article>  
</li>