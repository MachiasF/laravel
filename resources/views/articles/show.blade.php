@extends('app')

@section('content')


            <div class="content">
                <a href="/"><button class="hint--bottom-left hint--rounded" data-hint="Home page">home</button></a>
                <a href="/contact"><button class="hint--top-right hint--rounded hint--info" data-hint="Contact us">contact</button></a>
                
                <div class="title">{{ $article->title }}</div>
                
            
               
            </div>

            
                <article>
                    {{ $article->body }}
                </article>

           
@stop