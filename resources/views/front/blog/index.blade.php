@extends('front.template')

@section('main')

    <div class="row">

        <div class="col-lg-12">
            {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form', 'class' => 'pull-right']) !!}  
                {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/blog.search')) !!}
            {!! Form::close() !!}
        </div>

    </div>

    <div class="row">
        @if(count($posts))
            @foreach($posts as $post)
                <div class="box">
                    <div class="col-lg-12 text-center">
                        <h2>{{ $post->title }}
                        <br>
                        <small>{{ $post->user->username }} {{$post->created_at != $post->updated_at ? trans('front/blog.updated').trans('front/blog.on').$post->updated_at : trans('front/blog.created').trans('front/blog.on').$post->created_at}}</small>
                        </h2>
                    </div>
                    <div class="col-lg-12">
                        <p>{!! $post->summary !!}</p>
                    </div>
                    <div class="col-lg-12 text-center">
                        {!! link_to('blog/' . $post->slug, trans('front/blog.button'), ['class' => 'btn btn-default btn-lg']) !!}
                        <hr>
                    </div>
                </div>
            @endforeach
        @else
            <h4 class="text-center">没有找到数据</h4>
        @endif

        <div class="col-lg-12 text-center">
            {!! $links !!}
        </div>

    </div>

@stop

