import React from 'react';

const Footer = () => {
    return (
        <div className="">
            <div className="container-fluid bg-dark pt-5 pb-5">
                <div className="container text-light">
                    <div className="row mt-5">
                        <div className="col-md-5 mb-5">
                            <img className="img-fluid" src="/img/clogo-wht-full.png" alt="" width="40%" height="15%" />
                        </div>
                        <div className="col">
                            <p>Home</p>
                            <p>Course</p>
                            <p>News</p>
                        </div>
                        <div className="col">
                            <p>Programming</p>
                            <p>Graphic Design</p>
                            <p>UI UX Design</p>
                        </div>
                        <div className="col">
                            <p>About Us</p>
                            <p>+ 000 000-00-00</p>
                        </div>
                    </div>
                    <div className="row text-light mt-5 pt-5">
                        <div className="col-md-12 mt-5">
                            <p className="text-muted">© 2022 COURSITY / alif r. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Footer;
