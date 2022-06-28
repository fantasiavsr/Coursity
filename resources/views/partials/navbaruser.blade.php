<nav class="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3" style="background-color: #404EED">
    <div class="container">

        <a class="navbar-brand" href="/userhome"><img class="" src="{{ asset('img/clogo-wht-box.png') }}"
                alt="" width="100%" height="50"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/userhome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'My Courses' ? 'active' : '' }}" href="/user-mycourse">My
                        Courses</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Course List' ? 'active' : '' }}"
                        href="/usercourselist">Course List</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'My Profile' ? 'active' : '' }}" href="/userprofile">My
                        Profile</a>
                </li>

            </ul>

            <div class="btn-group">
                <button type="button" class="btn text-dark fw-normal" style="background-color: #FFFFFF">
                    <img
                    @if (isset($userpp->file))
                        src="{{ asset('uploads/profile/' . $userpp->file) }}"
                    @else
                        src="{{ asset('img/avatar2.png') }}" alt=""
                    @endif
                    alt="" class="avatar me-2"> {{ $user->name }}
                </button>
                <button type="button" class="btn text-dark fw-normal dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #FFFFFF">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/userprofile">My Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn rounded-pill text-danger fw-normal px-3"
                                style="background-color: #FFFFFF">Log Out</button>
                        </form>
                    </li>
                </ul>
            </div>

            {{-- <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn rounded-pill me-4 text-dark fw-normal px-4"
                    style="background-color: #FFFFFF"><small>Log Out</small></button>
            </form> --}}

        </div>
    </div>

</nav>
