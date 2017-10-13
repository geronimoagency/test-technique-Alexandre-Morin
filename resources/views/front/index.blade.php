@extends('layout.master')

@section('content')
    <div class="row">
        <header>
            <img src="{{ url('imgs/header.jpg') }}" srcset="{{url('imgs/header@2x.jpg 2x,imgs/header@3x.jpg 3x')}}">
            <h1>Discover smart news <br> for smart people.</h1>
        </header>
    </div>

    <section>
        <h2>Latest news</h2>

        <div class="container-fluid">
            @foreach($items as $item)
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="{{ url($item['image']['src']) }}" srcset="{{url($item['image']['srcset'])}}" alt="" class="img-responsive center-block">
                        <figcaption>
                            <h3>{{ $item['title'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                            <ul>
                                <li>
                                    <img src="{{ url('imgs/btn-likes.svg') }}" alt="">
                                    <span class="icon">{{ $item['count_likes'] }} likes</span>
                                </li>
                                <li data-toggle="modal" data-target="#comments" data-item="{{ json_encode($item) }}">
                                    <img src="{{ url('imgs/btn-comments.svg') }}" alt="">
                                    <span class="icon">{{ $item['count_comments'] }} comments</span>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
            <div class="clearfix"></div>
        </div>

        <button class="btn btn-load btn-block">Load more</button>
    </section>

    @include('front.partials.comments')
@endsection