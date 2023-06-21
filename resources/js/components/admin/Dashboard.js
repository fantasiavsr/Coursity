import React from 'react';

const Dashboard = () => {
    return (
        <main className="bg-light" style={{ marginTop: '58px', marginLeft: '260px', marginRight: '60px' }}>
            <div className="container pt-4">
                <div className="row">
                    <div className="col">
                        <h5 className="" style={{ fontWeight: '400' }}>Dashboard</h5>
                    </div>
                </div>
                <br />
                <div className="row">
                    <div className="col-8">
                        <div className="card shadow-sm bg-white rounded-3">
                            <div className="card-body">
                                <div className="row">
                                    <h6 className="card-subtitle fw-lighter mb-2 text-muted">PROJECT</h6>
                                </div>
                                <div className="row">
                                    <h5 className="card-title fw-bolder">COURSITY</h5>
                                </div>
                                <div className="row">
                                    <div className="col-sm-12 col-md-5">
                                        <p className="fst-normal mt-3 mb-0" style={{ color: '#62666A' }}>LARAVEL 9</p>
                                    </div>
                                    <div className="col-sm-12 col-md-7">
                                        <a href="https://github.com/fantasiavsr/pwl-tugasakhir" target="_blank" rel="noopener noreferrer" className="btn btn-outline-dark float-end">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col">
                        <div className="card shadow-sm text-light rounded-3" style={{ backgroundColor: '#404EED' }}>
                            <div className="card-body">
                                <div className="row">
                                    <h6 className="card-subtitle mb-2 fw-lighter">DATABASE</h6>
                                </div>
                                <div className="row">
                                    <h5 className="card-title fw-bolder">PHPMYADMIN</h5>
                                </div>
                                <div className="row">
                                    <div className="col-sm-12 col-md-5">
                                        <p className="fst-normal mt-3 mb-0">MYSQL</p>
                                    </div>
                                    <div className="col-sm-12 col-md-7">
                                        <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=laravel2" target="_blank" rel="noopener noreferrer" className="btn btn-outline-light float-end">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    );
};

export default Dashboard;
