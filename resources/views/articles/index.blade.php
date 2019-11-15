@extends ('layout')

<<<<<<< HEAD
@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            @foreach ($articles as $article)
                <div class="content">
=======
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">

                @foreach ($articles as $article)
>>>>>>> 92f8d3b278180288fa1c10381b4a8541e903aa7c
                    <div class="title">
                        <h2>
                            <a href="/articles/{{ $article->id }}">
                                {{ $article->title }}
                            </a>
                        </h2>
                    </div>
<<<<<<< HEAD

                    <p>
                        <img src="images/banner.jpg" alt="" class="image image-full" />
                    </p>

                    {!! ! $article-> excerpt !!}


                </div>
            @endforeach
=======
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p>{{!! $article->excerpt !!}}</p>
                @endforeach

            </div>
>>>>>>> 92f8d3b278180288fa1c10381b4a8541e903aa7c
        </div>
    </div>
@endsection
