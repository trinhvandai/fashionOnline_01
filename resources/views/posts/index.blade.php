@extends('layouts.app')

@section('title', 'Blogs')

@section('content')
<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @include('shared.sidebar')
                </div>
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From Our Blog</h2>
                    @foreach ($posts as $post)
                    <div class="single-blog-post">
                        <h3>{{$post->title}}</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i> Admin</li>
                                <li><i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($post->created_at))}}</li>
                                <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($post->created_at))}}</li>
                            </ul>
                        </div>
                        <a href="">
                            <img src="images/blog/{{$post->image_url}}" alt="">
                        </a>
                        <p>{{str_limit($post->content, 200)}}</p>
                        <a  class="btn btn-primary" href="{{ route('posts.show',$post->id) }}">Read More</a>
                    </div>
                    @endforeach
                    <div class="pagination-area">
                        <ul class="pagination">
                            <li><a href="" class="active">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
