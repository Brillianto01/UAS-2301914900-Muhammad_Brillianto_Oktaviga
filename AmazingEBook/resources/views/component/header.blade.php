<header class="d-flex flex-wrap align-items-center justify-content-center py-4" style="background-color: rgba(146,192,232,1)">

    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">

    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <h1 class="text-dark">
            Amazing E-BooK
        </h1>
    </ul>

    <div class="col-md-3 text-end">
        @auth
        <form action="/signout" method="POST">
            @csrf
            <!-- <a class="btn text-dark" style="background-color: rgba(242,230,90,1)" href="/register" role="button"><strong>Sign Out</strong></a> -->
            <!-- <button type="submit" class="dropdown-item"> Logout </button> -->
            <button type="submit" class="btn btn-warning" style="background-color: rgba(242,230,90,1)"><strong>Sign Out</strong></button>
        </form>
        @endauth
        @guest
        <a class="btn text-dark" style="background-color: rgba(242,230,90,1)" href="/register" role="button"><strong>Sign Up</strong></a>
        <a class="btn text-dark" style="background-color: rgba(242,230,90,1)" href="/login" role="button"><strong>Log In</strong></a>
        <!-- <a class="btn btn-warning text-dark" href="/login" role="button">Log In</a> -->
        @endguest
    </div>
</header>