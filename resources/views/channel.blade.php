@extends('layouts.app')

@section('content')

    @foreach ($discussions as $d)

        <div class="panel panel-default">
            <div class="panel-heading">
                <img src="{{ $d->user->avatar }}" alt="" width="60px" style="border-radius: 50%;">&nbsp;&nbsp;&nbsp;
                <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>
                <a href="{{route('discussion', ['slug' => $d->slug])}}" class="btn btn-default btn-xs pull-right" style="margin-left: 9px;">view</a>             
                @if($d->hasBestAnswer())
                    <span class="btn btn-success btn-xs pull-right">closed</span>
                @else
                    <span class="btn btn-danger btn-xs pull-right">open</span>
                @endif
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
                <span>
                    {{ $d->replies->count() }} Replies
                </span>
                <a href="{{ route('channel', ['slug' => $d->channel->slug]) }}" class="pull-right btn btn-default btn-xs"> {{$d->channel->title }}</a>
            </div>
        </div>

    @endforeach

    <div class="text-center">
        {{ $discussions->links() }}
    </div>

@endsection
