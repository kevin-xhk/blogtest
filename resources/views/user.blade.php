<h1>{{ $user->name }}</h1>
@foreach($user->blogposts as $blogpost)
     <div>
         <h2>{{ $blogpost->title }}</h2>
         <p>{{ $blogpost->content }}</p>
     </div>
@endforeach