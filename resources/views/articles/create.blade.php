@extends('app')

@section('content')


            <div class="content">
                
                <a href="/"><button class="hint--bottom-left hint--rounded" data-hint="Home page">home</button></a>
                <a href="/contact"><button class="hint--top-right hint--rounded hint--info" data-hint="Contact us">contact</button></a>
                
                <div class="title">Write a New Article</div>
                <hr/>

            </div>

            {!! Form::open(['url' => 'articles']) !!}

                <div class="form-group">

                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}

                </div>
                </br>
                <div class="form-group">

                    {!! Form::label('body', 'Body:') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('published_at', 'Publish On:') !!}
                    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}

                </div>

            {!! Form::close() !!}

            @if ($errors->any())
                <ul class="alert alert-danger">
                    
                    @foreach ($errors->all() as $error)
                        
                        <li>{{ $error }}</li>
                    
                    @endforeach
                    
                </ul>
            @endif

@stop