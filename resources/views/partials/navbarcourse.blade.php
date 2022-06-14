<header class="bg-light">

    <nav class="sidebar card py-2 pb-4 sticky-top pt-5 mt-5" style="background-color: #404EED">

        <div class="container mt-3 mb-3">
            <h6 class="text-light px-2" style="font-weight: 100">Course / <span class=""
                    style="font-weight: 500">{{ $datacourse->name }}</span></h6>
        </div>
        <ul class="nav-mine flex-column text-light px-3" id="nav_accordion" style="list-style-type: none;">

            @foreach ($datamodule as $item)
                <li class="nav-item" style="">
                    <a href="{{ route('courseviewnext', ['course' => $datacourse->id, 'step' => $item->step]) }}"
                        class="nav-link py-2 ripple text-white {{ $title === 'Module ' . $loop->iteration ? 'active' : '' }}">
                        {{ $loop->iteration }}. {{ $item->name }}
                    </a>
                </li>
            @endforeach

            {{-- <li class="nav-item" style="">
                <a class="nav-link py-2 ripple text-white {{ $title === 'Module 1' ? 'active' : '' }}" href="#"> Module 1 </a>
            </li> --}}
            {{-- <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn nav-link py-2 ripple text-white">Log Out</button>
                </form>
            </li> --}}
        </ul>
    </nav>

</header>
