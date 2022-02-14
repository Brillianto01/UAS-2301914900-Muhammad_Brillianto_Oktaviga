<nav class="navbar navbar-expand" style="background-color: rgba(242,230,90,1)">
    <div class=" container d-flex flex-wrap justify-content-center">
        <ul class=" navbar-nav">
            <li class="nav-item mx-5">
                <strong>
                    <a class="nav-link text-dark" aria-current="page" href="/home">Home</a>
                </strong>
            </li>
            <li class="nav-item mx-5">
                <strong>
                    <a class="nav-link text-dark" aria-current="page" href="/cart/{{auth()->user()->account_id}}">Cart</a>
                </strong>
            </li>
            <li class="nav-item mx-5">
                <strong>
                    <a class="nav-link text-dark" aria-current="page" href="/profile">Profile</a>
                </strong>
            </li>
            <li class="nav-item mx-5">
                @if(auth()->user()->role_id == 2)
                <strong>
                    <a class="nav-link text-dark" aria-current="page" href="/acc-manager">Account Management</a>
                </strong>
                @endif
            </li>
        </ul>
    </div>
</nav>