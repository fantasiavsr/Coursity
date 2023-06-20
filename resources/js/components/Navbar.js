import React from 'react';

const Navbar = () => {
    return (
        <nav className="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3" style={{ backgroundColor: '#404EED' }}>
            <div className="container">
                <a className="navbar-brand" href="/testHome">
                    <img className="" src="img/clogo-wht-box.png" alt="" width="100%" height="50" />
                </a>

                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li className="nav-item">
                            <a className="fw-bold nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/testHome">Home</a>
                        </li>
                        <li className="nav-item">
                            <a className="fw-bold nav-link {{ $title === 'Course List' ? 'active' : '' }}" href="/testCourseList">Courses</a>
                        </li>
                        <li className="nav-item">
                            <a className="fw-bold nav-link {{ $title === 'News' ? 'active' : '' }}" href="#">News</a>
                        </li>
                        <li className="nav-item">
                            <a className="fw-bold nav-link {{ $title === 'Contact Us' ? 'active' : '' }}" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <a href="/testLogin" className="btn rounded-pill me-4 text-dark" role="button" style={{ backgroundColor: '#FFFFFF' }}>
                        <small className="fw-normal px-4">Login</small>
                    </a>
                </div>
            </div>
        </nav>
    );
}

export default Navbar;
