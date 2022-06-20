<header class="bg-light">

    <nav class="sidebar card py-2 pb-4" style="background-color: #404EED">
        <div class="container mt-5 mb-3">
            <h2 class="text-light text-center" style="font-weight: 100">Admin<span class=""
                    style="font-weight: 500">Page</span></h2>
        </div>
        <br>
        <ul class="nav-mine flex-column text-light px-3" id="nav_accordion" style="list-style-type: none;">
            <li class="nav-item" style="">
                <a class="nav-link py-2 ripple text-white {{ $title === 'Admin' ? 'active' : '' }}" href="/admin">
                    Dashboard </a>
            </li>
            <li class="nav-item has-submenu ">
                <a class="nav-link py-2 ripple text-white {{ $submenu === 'Yes' ? 'active' : '' }}" href="#">
                    Edit Courses </a>
                <ul class="submenu collapse" style="list-style-type: none;">
                    <li><a class="nav-link py-2 ripple text-white {{ $title === 'Course List' ? 'active' : '' }}"
                            href="/admin-course">Course List</a></li>
                    <li><a class="nav-link py-2 ripple text-white {{ $title === 'Courses Modules' ? 'active' : '' }}"
                            href="/admin-module">Courses Modules</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2 ripple text-white {{ $title === 'Edit User' ? 'active' : '' }}"
                    href="/admin-user">Edit User</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn nav-link py-2 ripple text-white">Log Out</button>
                </form>
            </li>
        </ul>
    </nav>

</header>
