import React from 'react';

const Example = () => {
    const course = window.course;
    return (
        <div className="container">
            <div className="row justify-content-center">
                {course.map((course) => (
                    <div className="col-md-8 mb-2" key={course.id}>
                        <div className="card">
                            <div className="card-header">{course.name}</div>
                            <div className="card-body">{course.desc}</div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}

export default Example;



