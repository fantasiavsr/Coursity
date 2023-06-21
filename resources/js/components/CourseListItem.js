import React from 'react';

const Hero = () => {
    return (
        <div className="text-secondary px-4 pt-5 pb-2" style={{ backgroundColor: '#404EED' }}>
            <div className="container pc-1">
                <h1 className="display-5 fw-bold text-white">Course List</h1>
                <div className="col-lg-6">
                    <p className="fs-5 mb-4 text-light">A list of all available courses,
                        quickly find the one that suits your taste!</p>
                </div>
            </div>
        </div>
    );
};

const TopCourse = () => {
    const topCourses = window.topCourses;
    return (
        <div className="px-4 py-3">
            <br /><br />

            <div className="container pt-5 pb-5">
                <div className="row justify-content-center">
                    <h1 className="fw-bold">Top Courses</h1>
                </div>
                <br />

                <div className="justify-content-center">
                    <div className="row row-cols-1 row-cols-md-2 g-3">
                        {topCourses.slice(0, 4).map((data) => (
                            <div className="col" key={data.id}>
                                <div className="card mb-3 shadow-sm" style={{ maxWidth: '100%' }}>
                                    <div className="row g-0">
                                        <div className="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU" className="card-img-top" alt="" />
                                        </div>
                                        <div className="col-md-8">
                                            <div className="card-body">
                                                <h5 className="card-title">{data.name}</h5>
                                                <p className="card-text">{data.desc}</p>
                                                <a href={`/coursedetail/${data.id}`} className="btn rounded-pill me-4 btn-outline-dark px-4">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
                <br /><br />
            </div>
        </div>
    );
};

const AllCourse = () => {
    const allCourses = window.allCourses;
    return (
        <div className="px-4 py-3" style={{ backgroundColor: '#F6F6F6' }}>
            <br /><br />

            <div className="container pt-5 pb-5">
                <div className="row justify-content-center">
                    <h1 className="fw-bold">All Courses</h1>
                </div>
                <br />

                <div className="justify-content-center">
                    <div className="row row-cols-1 row-cols-md-1 g-2">
                        {allCourses.map((data) => (
                            <div className="col" key={data.id}>
                                <div className="card mb-3 shadow-sm" style={{ maxHeight: '100%' }}>
                                    <div className="row g-0">
                                        <div className="col-md-2">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU" className="card-img-top" alt="" />
                                        </div>
                                        <div className="col-md-8">
                                            <div className="card-body">
                                                <h5 className="card-title">{data.name}</h5>
                                                <p className="card-text">{data.desc}</p>
                                                <a href={`/coursedetail/${data.id}`}  className="btn rounded-pill me-4 btn-outline-dark px-4">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
                <br /><br /><br /><br />
            </div>
        </div>
    );
};

export { Hero, TopCourse, AllCourse };
