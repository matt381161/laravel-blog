<header class="blog-header py-3" >
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="btn btn-sm btn-outline-secondary" href="/">首頁</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark">Matthew's Blog</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            @if(!Auth::check())
            <a class="btn btn-sm btn-outline-secondary" href="/login">Log In</a>
            <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
            @endif
        </div>
    </div>
</header>