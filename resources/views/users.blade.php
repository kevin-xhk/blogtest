<form method="get" action="/writepost">
        @csrf
        <input type="submit" value="write new post">
</form>

<h1>Users</h1>
@foreach($users as $user)
    <p><a href="/user/{{ $user->id }}">{{ $user->name }}</a></p>
@endforeach