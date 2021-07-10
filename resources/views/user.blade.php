<h1>{{ $user->name }}</h1>
@foreach($user->blogposts as $blogpost)
     <div>
         <h2>{{ $blogpost->title }}</h2>
         <p>{{ $blogpost->content }}</p>
     </div>
@endforeach

<h2>Add blogpost</h2>
<form method="post" action="/addblogpost">
        @csrf
        Title: <input type="text" name="title" /><br>
        Content: <textarea name="content"></textarea><br>
        <input type="submit">
 </form>