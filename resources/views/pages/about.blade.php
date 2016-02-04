@extends('app')

@section('content')


            <div class="content">
                <div class="title">About Laravel 5</div>
                
            @if (count($people))
                <h3>People I like!</h3>
                
                <ul class="content">
                    @foreach ($people as $person)
                        <li>{{ $person }}</li>
                    @endforeach
                </ul>
            @endif
            <a href="/"><button class="hint--bottom-left hint--rounded" data-hint="Home page">home</button></a>
            <a href="/contact"><button class="hint--top-right hint--rounded hint--info" data-hint="Contact us">contact</button></a>
            </div>
            <p>
                Bacon ipsum dolor amet salami bacon t-bone tenderloin pancetta pork chop brisket biltong ham hock boudin pig drumstick pork turducken picanha. Venison sirloin leberkas pastrami fatback turducken. Meatloaf landjaeger picanha, shankle t-bone meatball sirloin boudin jowl short loin chuck. Flank short loin picanha, drumstick shoulder fatback frankfurter. Landjaeger frankfurter corned beef rump ground round tongue pig t-bone pork chop hamburger beef ribs turkey short loin sausage brisket. Ham hock fatback corned beef, frankfurter ball tip drumstick andouille kielbasa.

                Meatloaf pork belly chicken, fatback sausage shank leberkas beef ribs pork loin corned beef beef. Ball tip kielbasa meatball sirloin leberkas, boudin brisket. Prosciutto spare ribs flank, shank tongue sausage corned beef pork t-bone. Picanha frankfurter leberkas tenderloin strip steak corned beef capicola, doner meatball chuck pastrami shank. Bacon cow tenderloin strip steak turkey kevin meatball beef t-bone ribeye.
            </p>
@stop