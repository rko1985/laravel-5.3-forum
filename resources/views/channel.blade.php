@extends('layouts.app')

@section('content')

    @foreach ($discussions as $d)

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

    @endforeach

    <div class="text-center">
        {{ $discussions->links() }}
    </div>

@endsection
