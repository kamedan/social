@extends('layouts.master')

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            @include('includes.info-box')
            <header>
                <h3>What's on your mind !</h3>
            </header>
                <form action="{{route('post.create')}}" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="body" id="new-post" rows="5" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create post</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </form>

        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Other people say </h3></header>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi, magnam? Aperiam architecto aspernatur aut esse explicabo facilis ipsum laudantium, magni maxime neque nulla quae quibusdam quis sequi tempore voluptas?</p>
                <div class="info">
                    Posted by Amine on Date..
                </div>
                <div class="interaction">
                    <a href="">Like</a> |
                    <a href="">Dislike</a> |
                    <a href="">Edit</a> |
                    <a href="">Delete</a> |
                </div>
            </article>

            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi, magnam? Aperiam architecto aspernatur aut esse explicabo facilis ipsum laudantium, magni maxime neque nulla quae quibusdam quis sequi tempore voluptas?</p>
                <div class="info">
                    Posted by Amine on Date..
                </div>
                <div class="interaction">
                    <a href="">Like</a>
                    <a href="">Dislike</a>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </div>
            </article>


            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi, magnam? Aperiam architecto aspernatur aut esse explicabo facilis ipsum laudantium, magni maxime neque nulla quae quibusdam quis sequi tempore voluptas?</p>
                <div class="info">
                    Posted by Amine on Date..
                </div>
                <div class="interaction">
                    <a href="">Like</a>
                    <a href="">Dislike</a>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </div>
            </article>
        </div>
    </section>
@endsection