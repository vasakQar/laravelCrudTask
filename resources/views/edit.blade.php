@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update your post') }}</div>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="post" action="{{route('posts.update',$post->id)}}">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea class="form-control" id="" rows="3" name="body">{{ $post->body }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info" style="float: right">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
