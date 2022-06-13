<header class="bg-light">

    <nav class="sidebar card py-2 pb-4" style="background-color: #404EED">
        {{-- <div class="container mt-5 mb-3">
            <h2 class="text-light text-center" style="font-weight: 100">Admin<span class=""
                    style="font-weight: 500">Page</span></h2>
        </div> --}}
        <br>
        <ul class="nav-mine flex-column text-light px-3" id="nav_accordion" style="list-style-type: none;">
            <li class="nav-item" style="">
                <a class="nav-link py-2 ripple text-white {{ $title === 'Module 1' ? 'active' : '' }}" href="#"> Module 1 </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2 ripple text-white {{ $title === 'Module 2' ? 'active' : '' }}" href="#"> Module 2 </a>
            </li>
            {{-- <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn nav-link py-2 ripple text-white">Log Out</button>
                </form>
            </li> --}}
        </ul>
    </nav>

</header>
