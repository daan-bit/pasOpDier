<article class="profielCard a-popup">
     <h2 class="profielCard__subtitel">Buitenaanzicht huis</h2>
     <figure class="profielCard__figure">
        <img class="profielCard__image" src="{{$profiel->foto_huis}}"  alt="Buitenaanzicht huis van {{$profielEigenaar->name}}"/>
     </figure>
     <section class="profielCard__text">
          <p>{{$profiel->beschrijving_huis}}</p>   
    </section>
</article>

<article class="profielCard a-popup">
     <h2 class="profielCard__subtitel">Woonkamer</h2>
     <figure class="profielCard__figure">
        <img class="profielCard__image" src="{{$profiel->foto_woonkamer}}"  alt="Buitenaanzicht huis van {{$profielEigenaar->name}}"/>
     </figure>
     <section class="profielCard__text">
          <p>{{$profiel->beschrijving_woonkamer}}</p>   
    </section>
</article>

<article class="profielCard a-popup">
     <h2 class="profielCard__subtitel">Keuken</h2>
     <figure class="profielCard__figure">
        <img class="profielCard__image" src="{{$profiel->foto_keuken}}"  alt="Buitenaanzicht huis van {{$profielEigenaar->name}}"/>
     </figure>
     <section class="profielCard__text">
          <p>{{$profiel->beschrijving_keuken}}</p>   
    </section>
</article>