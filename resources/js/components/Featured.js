import React from 'react';

const Featured = () => {
    return (
        <div className="px-4 py-5" style={{ backgroundColor: '#F6F6F6' }}>
            <br /><br />

            <div className="container pt-5 pb-5">
                <div className="row justify-content-center text-center">
                    <h1 className="fw-bold">Featured Courses</h1>
                </div>

                <div className="row pb-3 justify-content-center text-center">
                    <div className="col-md-5">
                        <p className="fs-5 mb-4">List of amazing courses that many people have studied.</p>
                    </div>
                </div>

                <div className="row pb-5">
                    <div className="col text-center">
                        <div className="row">
                            <div className="col-lg-3 mb-3">
                                <div className="hover hover-1 text-white rounded" style={{ backgroundColor: '#404EED' }}>
                                    <img src="" alt="" />
                                    <div className="hover-1-content px-5 py-4">
                                        <h3 className="hover-1-title text-uppercase font-weight-bold mb-0">UI Design</h3>
                                        <p className="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div className="col-lg-3 mb-3">
                                <div className="hover hover-1 text-white rounded" style={{ backgroundColor: '#404EED' }}>
                                    <img src="" alt="" />
                                    <div className="hover-1-content px-5 py-4">
                                        <h3 className="hover-1-title text-uppercase font-weight-bold mb-0">UX Design</h3>
                                        <p className="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div className="col-lg-3 mb-3">
                                <div className="hover hover-1 text-white rounded" style={{ backgroundColor: '#404EED' }}>
                                    <img src="" alt="" />
                                    <div className="hover-1-content px-5 py-4">
                                        <h3 className="hover-1-title text-uppercase font-weight-bold mb-0">Web Design</h3>
                                        <p className="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div className="col-lg-3 mb-3">
                                <div className="hover hover-1 text-white rounded" style={{ backgroundColor: '#404EED' }}>
                                    <img src="" alt="" />
                                    <div className="hover-1-content px-5 py-4">
                                        <h3 className="hover-1-title text-uppercase font-weight-bold mb-0">Mobile</h3>
                                        <p className="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <br />
        </div>
    );
}

export default Featured;
