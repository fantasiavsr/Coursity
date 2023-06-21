import React from 'react';

const RegisterForm = () => {
    const crsf = window.crsf;
    return (
        <div className="pt-5 pb-5" style={{ backgroundColor: '#404EED' }}>
            <div className="text-center">
                <a href="/home">
                    <img
                        src="/img/clogo-wht-box.png"
                        className="img-fluid pb-5"
                        alt=""
                        style={{ width: '150px' }}
                    />
                </a>
            </div>
            <div className="container" style={{}}>
                <div className="row justify-content-center pt-5 pb-5">
                    <div
                        className="col-md-4 pt-5 pb-5 px-5 shadow-custom-lg rounded align-self-center text-center text-dark"
                        style={{ backgroundColor: '#ffffff' }}
                    >
                        <div className="text-dark">
                            <h1 className="ms-5 mb-5 pe-5 fw-bold">Register</h1>
                        </div>

                        <form action="/testRegister" method="post">
                            {/* CSRF Token */}
                            <input type="hidden" name="_token" value={crsf} />

                            {/* Name input */}
                            <div className="form-outline mb-4">
                                <label className="form-label">Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    className="form-control"
                                    autoFocus
                                    required
                                />
                            </div>

                            {/* Username input */}
                            <div className="form-outline mb-4">
                                <label className="form-label">Username</label>
                                <input
                                    type="text"
                                    name="username"
                                    id="username"
                                    className="form-control"
                                    autoFocus
                                    required
                                />
                            </div>

                            {/* Email input */}
                            <div className="form-outline mb-4">
                                <label className="form-label">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    className="form-control"
                                    autoFocus
                                    required
                                />
                            </div>

                            {/* Password input */}
                            <div className="form-outline mb-4">
                                <label className="form-label">Password</label>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    className="form-control"
                                    required
                                />
                            </div>

                            <input type="hidden" name="is_active" value="no" />

                            {/* Submit button */}
                            <button
                                type="submit"
                                className="btn btn-lg rounded-pill mt-4 px-5 shadow-custom-lg mb-4 text-light"
                                style={{ backgroundColor: '#404EED' }}
                            >
                                Register
                            </button>

                            {/* Register buttons */}
                            <div className="text-center">
                                <p>
                                    Already have an account?{' '}
                                    <a href="/testLogin" className="fw-bold" style={{ color: '#404EED' }}>
                                        Log In
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br />
            <br />
        </div>
    );
};

export default RegisterForm;
