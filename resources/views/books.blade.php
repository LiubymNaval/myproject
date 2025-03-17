
<h1>List of books</h1>
<ul>
    @foreach($books as $book)
        <li>{{ $book['id'] }}. <strong>{{ $book['title'] }}</strong> - {{ $book['author'] }}</li>
    @endforeach
</ul>