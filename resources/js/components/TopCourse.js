import React from 'react';

const TopCourse = () => {
    const datatop = window.datatop;
    console.log(datatop);
    return (
        <div className="px-4 py-5">
            <br /><br />

            <div className="container pt-5 pb-5">
                <div className="row justify-content-center text-center">
                    <h1 className="fw-bold">Top Courses</h1>
                </div>

                <div className="row pb-3 justify-content-center text-center">
                    <div className="col-md-5">
                        <p className="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with
                            Bootstrap.</p>
                    </div>
                </div>

                <div className="justify-content-center">
                    <div className="row row-cols-1 row-cols-md-4 g-3">
                        {datatop.slice(0, 4).map((data) => (
                            <div className="col" key={data.id}>
                                <div className="card mb-3 shadow-sm pb-3" style={{ maxWidth: '100%' }}>
                                    <div className="row g-0">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU"
                                            className="card-img-top" alt="" />
                                        <div className="card-body">
                                            <h5 className="card-title">{data.name}</h5>

                                            <p className="card-text">{data.desc}</p>
                                            <a href={`/coursedetail/${data.id}`}
                                                className="btn rounded-pill me-4 btn-outline-dark px-4 mt-4">Detail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </div>
            <br /><br /><br />
        </div>
    );
}

export default TopCourse;
