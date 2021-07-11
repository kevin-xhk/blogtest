<h2>Add blogpost</h2>
<form method="post" action="/addblogpost">
        @csrf
        Title: <input type="text" name="title" /><br>
        Content: <textarea name="content"></textarea><br>
        <input type="submit">
 </form>