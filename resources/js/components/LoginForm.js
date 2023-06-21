import React from 'react';

const LoginForm = () => {
    /* check crsf */
    const crsf = window.crsf;
    return (
        <div className="pt-5 pb-5" style={{ backgroundColor: '#404EED' }}>
            <br /><br />
            <div className="text-center">
                <a href="/testHome"><img src="/img/clogo-wht-box.png" className="img-fluid pb-5" alt="" style={{ width: '150px' }} /></a>
            </div>

            <div className="container" style={{}}>
                <div className="row justify-content-center pt-5 pb-5">
                    <div className="col-md-4 pt-5 pb-5 px-5 shadow-custom-lg rounded align-self-center text-center text-dark" style={{ backgroundColor: '#ffffff' }}>
                        <div className="text-dark">
                            <h1 className="ms-5 mb-5 pe-5 fw-bold">Login</h1>
                        </div>

                        <form action="/testLogin" method="post">
                            {/* CSRF Token */}
                            <input type="hidden" name="_token" value={crsf} />

                            {/* Username input */}
                            <div className="form-outline mb-4">
                                <label className="form-label">Username</label>
                                <input type="text" name="username" id="username" className="form-control" autoFocus required />
                            </div>

                            {/* Password input */}
                            <div className="form-outline mb-4">
                                <label className="form-label">Password</label>
                                <input type="password" name="password" id="password" className="form-control" required />
                            </div>

                            {/* Submit button */}
                            <button type="submit" className="btn btn-lg rounded-pill mt-4 px-5 shadow-custom-lg mb-4 text-light" style={{ backgroundColor: '#404EED' }}>Log In</button>

                            {/* Register buttons */}
                            <div className="text-center">
                                <p>Not a member? <a href="/testRegister" className="fw-bold" style={{ color: '#404EED' }}>Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default LoginForm;
