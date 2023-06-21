import React, { useEffect } from 'react';

const Sidebar = () => {
    const crsf = window.crsf;

    useEffect(() => {
        document.querySelectorAll('.sidebar .nav-link').forEach(function (element) {
            element.addEventListener('click', function (e) {
                let nextEl = element.nextElementSibling;
                let parentEl = element.parentElement;

                if (nextEl) {
                    e.preventDefault();
                    let mycollapse = new bootstrap.Collapse(nextEl);

                    if (nextEl.classList.contains('show')) {
                        mycollapse.hide();
                    } else {
                        mycollapse.show();
                        // find other submenus with class=show
                        var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                        // if it exists, then close all of them
                        if (opened_submenu) {
                            new bootstrap.Collapse(opened_submenu);
                        }
                    }
                }
            });
        });
    }, []);

    return (
        <header className="bg-light">
            <nav className="sidebar card py-2 pb-4" style={{ backgroundColor: '#404EED' }}>
                <div className="container mt-5 mb-3">
                    <h2 className="text-light text-center" style={{ fontWeight: 100 }}>
                        Admin<span style={{ fontWeight: 500 }}>Page</span>
                    </h2>
                </div>
                <br />
                <ul className="nav-mine flex-column text-light px-3" id="nav_accordion" style={{ listStyleType: 'none' }}>
                    <li className="nav-item">
                        <a className="nav-link py-2 ripple text-white" href="/testAdmin">
                            Dashboard
                        </a>
                    </li>
                    <li className="nav-item has-submenu">
                        <a className="nav-link py-2 ripple text-white" href="#">
                            Edit Courses
                        </a>
                        <ul className="submenu collapse">
                            <li>
                                <a className="nav-link py-2 ripple text-white" href="/testAdminCourse">
                                    Course List
                                </a>
                            </li>
                            <li>
                                <a className="nav-link py-2 ripple text-white" href="/admin-module">
                                    Courses Modules
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link py-2 ripple text-white" href="/admin-user">
                            Edit User
                        </a>
                    </li>
                    <li className="nav-item">
                        <form action="/testLogout" method="post">
                            <input type="hidden" name="_token" value={crsf} />
                            <button type="submit" className="btn nav-link py-2 ripple text-white">Log Out</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </header>
    );
};

export default Sidebar;
