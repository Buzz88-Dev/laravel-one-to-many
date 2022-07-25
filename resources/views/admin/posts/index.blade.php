@extends('admin.layouts.base')

@section('mainContent')
    Ciao
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Slug</th>
                <th>Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id}} </td>
                    <td>{{ $post->slug}} </td>
                    <td>{{ $post->title}} </td>
                    <td>
                        <a href="{{ route('admin.posts.show', ['post' => $post])}}" class="btn btn-primary">View</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.edit', ['post' => $post])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger js-delete">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

    <section class="overlay d-none">
        <form class="popup" data-action="{{ route('admin.posts.destroy', ['post' => '*****'])}}" method="post">
            @csrf
            @method('DELETE')
            <h3>Sei Sicuro?</h3>
            <button type="submit" class="btn btn-warning js-yes">Yes</button>
            <button type="submit" class="btn btn-warning js-no">No</button>
        </form>
    </section>
@endsection


