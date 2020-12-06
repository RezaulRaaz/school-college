<header class="bg-light sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">All Institute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notice</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="{{url('/login')}}" class="btn btn-outline-dark my-2 my-sm-0"> dfLogin</a>
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Add Institute</button>
            </form>
            </div>
        </nav>
    </div>
</header>
