import React from 'react';

const Hero = () => {
    return (
        <div className="text-secondary px-4 py-5 text-center" style={{ backgroundColor: '#404EED' }}>
            <div className="py-5">
                <img src="img/clogo-wht-brand.png" className="img-fluid pb-5" alt="" style={{ width: '670px' }} />
                <div className="col-lg-6 mx-auto">
                    <p className="fs-5 mb-4 text-light">Quickly design and customize responsive mobile-first sites with
                        Bootstrap, the world’s most popular front-end open-source toolkit, featuring Sass variables and mixins, responsive
                        grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div className="d-grid gap-2 d-sm-flex justify-content-sm-center pt-4">
                        <a href="/register">
                            <button type="button" className="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3">Join Now</button>
                        </a>
                        <a href="/courseList">
                            <button type="button" className="btn btn-lg rounded-pill btn-dark px-4">Course List</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Hero;
