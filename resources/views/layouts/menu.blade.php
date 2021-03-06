<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{asset('/')}}"><strong>GREEN TEA </strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
            aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/team')}}">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/product')}}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/activity')}}">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/install-windown')}}">Install Windown</a>
                </li>
            </ul>
            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
    </div>
</nav>
<!-- Navbar -->
