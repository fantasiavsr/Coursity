
<nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3" style="background-color: #404EED">
    <div class="container">

        <a class="navbar-brand" href="/home"><img class="" src="{{ asset('img/clogo-wht-box.png') }}" alt="" width="100%"
                height="50"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Course List' ? 'active' : '' }}" href="/courseList">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'News' ? 'active' : '' }}" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Contact Us' ? 'active' : '' }}" href="#">Contact
                        Us</a>
                </li>

            </ul>

            <a href="/login" class="btn rounded-pill me-4 text-dark" role="button" style="background-color: #FFFFFF"><small
                    class="fw-normal px-4">Login</small>
            </a>

        </div>
    </div>
</nav>
