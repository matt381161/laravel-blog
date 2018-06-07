@extends ('layout')

@section('content')
    <h3>Publish the Post</h3>

    <hr>

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="body">Body:</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="body" name="body" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
        @include('layout.error')
    </form>
@endsection