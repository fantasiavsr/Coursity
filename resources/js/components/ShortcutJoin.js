import React from 'react';

const ShortcutJoin = () => {
    return (
        <div className="px-4 py-5">
            <br />
            <div className="container pt-5 pb-5">
                <div className="row justify-content-center text-center">
                    <h1 className="fw-bold">Ready to start your study?</h1>
                </div>
                <div className="d-grid gap-2 d-sm-flex justify-content-sm-center pt-5 text-center">
                    <a href="/register">
                        <button type="button" className="btn btn-lg rounded-pill btn-dark px-4 py-3 me-sm-3" style={{ backgroundColor: '#404EED' }}>Join Now for Free</button>
                    </a>
                </div>
            </div>
        </div>
    );
}

export default ShortcutJoin;
