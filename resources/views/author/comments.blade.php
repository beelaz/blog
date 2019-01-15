@extends('layouts.admin')

@section('title')Auhor comments
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-header bg-light">
            Author comment
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post</th>
                        <th>content</th>
                        <th>created_at</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach(Auth::user()->comments as $comment)
                        <tr>
                        <td>{{$comment->id}}</td>
                        <td class="text-nowrap"><a href="{{route('singlePost',$comment->id)}}">{{$comment->post->title}}</a></td>
                        <td>{{$comment->content}}</td>
                        <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</td>
                        <td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection