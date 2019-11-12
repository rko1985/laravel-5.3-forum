@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <img src="{{ $d->user->avatar }}" alt="" width="60px" style="border-radius: 50%;">&nbsp;&nbsp;&nbsp;
            <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>
            <a href="{{route('discussion', ['slug' => $d->slug])}}" class="btn btn-default pull-right">view</a>
        </div>        
        <div class="panel-body">
            <h4 class="text-center">
                <b>{{ $d->title }}</b>
            </h4>
            <p class="text-center">
                {{ str_limit($d->content, 50) }}
            </p>
        </div>
        <div class="panel-footer">
            <p>
                {{ $d->replies->count() }} Replies
            </p>
        </div>
    </div>

    @foreach($d->replies as $r)
        <div class="panel panel-default">
            <div class="panel-heading">
                <img src="{{ $r->user->avatar }}" alt="" width="60px" style="border-radius: 50%;">&nbsp;&nbsp;&nbsp;
                <span>{{ $r->user->name }}, <b>{{ $r->created_at->diffForHumans() }}</b></span>
            </div>        
            <div class="panel-body">
                <p class="text-center">
                    <b>{{ $r->content }}</b>
                </p>
            </div>
            <div class="panel-footer">
                <p>
                    @if($r->is_liked_by_auth_user())
                        <a href="{{ route('reply.unlike', ['id' => $r->id]) }}" class="btn btn-danger btn-xs">Unlike <span class="badge">{{ $r->likes->count() }}</span></a>
                    @else
                        <a href="{{ route('reply.like', ['id' => $r->id]) }}" class="btn btn-success btn-xs">Like <span class="badge">{{ $r->likes->count() }}</span></a>
                    @endif                    
                </p>
            </div>
        </div>
    @endforeach

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('discussion.reply', ['id' => $d->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="reply">Leave a reply...</label>
                    <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn pull-right">Leave a reply</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection
