@extends('app')

@section('content')


            <div class="content">
                <div class="title">Articles</div>
                
            
                <a href="/"><button class="hint--bottom-left hint--rounded" data-hint="Home page">home</button></a>
                <a href="/contact"><button class="hint--top-right hint--rounded hint--info" data-hint="Contact us">contact</button></a>
            </div>
            <hr/>

            @foreach ($articles as $article)
                <article>
                    <h2>

                        <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>

                    </h2>

                    <div class="body">{{ $article->body }}</div>


                </article>

            @endforeach
@stop