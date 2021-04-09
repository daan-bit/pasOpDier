<li class="a-popup u-list-style-none gridCard gridCard--profiel gridCard--admin">
<a class="gridCard__a" href="/profielen/{{$profiel->id}}">
        <article class="gridCard__article"> 
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">Profiel van {{$profiel->profielEigenaar->name}}</h2>
            </header>
            <figure class="gridCard__figure--profiel">
            <img class="gridCard__image--profiel" 
                    srcset="
                    {{$profiel->foto_huis640}} 640w,
                    {{$profiel->foto_huis1280}} 1280w,
                    {{$profiel->foto_huis1920}} 1920w
                    "
                    sizes="(min-width: 1500px) 1920px, (min-width: 1000px) 1280px, 640px"
                         src="{{$profiel->foto_huis}}" alt="Foto van huis"/>
            </figure>
            <section class="gridCard__textSection gridCard__textSection--profiel">
                <section class="gridCard__buttonsection--wijzigen">
                    <a href="/users/{{$profiel->profielEigenaar->id}}/edit" class="gridCard__a-wijzijgen"><button class="gridCard__button--wijzigen">Blokkeren</button></a>                
                </section>
            </section>
        </article>  
    </a>
</li>