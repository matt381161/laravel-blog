<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @if(Auth::check())
        	<a class="nav-link" href="/posts/create">Create a Post</a>
            <a class="nev-link ml-auto" href="/logout">{{ Auth::user()->name }} Log out</a>
        @endif
    </nav>
</div>