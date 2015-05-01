<h3>Categories</h3>
<ul class="list-group">
    @foreach($categories as $category)
        <li class="list-group-item">
            <span class="badge">{{ $category->num }}</span>
            <a href="#">{{ $category->title }}</a>
        </li>
    @endforeach
</ul>