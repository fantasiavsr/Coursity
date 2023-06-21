import React, { useState, useEffect } from 'react';

const AdminCourseItem = () => {
    const [data, setData] = useState([]);
    const crsf = window.crsf;

    useEffect(() => {
        // Fetch data from window.data
        setData(window.data);
    }, []);

    const handleDelete = (itemId) => {
        if (window.confirm('Are you sure?')) {
          const requestOptions = {
            method: 'DELETE',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': crsf,
            },
          };

          fetch(`/admin-course/${itemId}`, requestOptions)
            .then((response) => {
              if (response.ok) {
                // Handle successful deletion, e.g., show a success message or update the UI
                setData(data.filter((item) => item.id !== itemId)); // Update the data by removing the deleted item
            } else {
                // Handle error response, e.g., show an error message or handle the error gracefully
              }
            })
            .catch((error) => {
              // Handle network error or other error during the request
            });

            // to page
            window.location.href = '/testAdminCourse';
        }
      };

    return (
        <main className="bg-light" style={{ marginTop: '58px', marginLeft: '260px', marginRight: '60px' }}>
            <div className="container pt-4">
                <div className="row">
                    <div className="col">
                        <h5 className="" style={{ fontWeight: 400 }}>Edit Courses</h5>
                    </div>
                    <div className="col">
                        <a href="/admin-createcourse"><button className="btn btn-success float-end">Add Course</button></a>
                    </div>
                </div>
                <br />
                <div className="row mt-4">
                    <div className="col">
                        <div className="card shadow-sm bg-white rounded-3">
                            <div className="card-body">
                                <table className="table table-hover table-borderless table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Desc</th>
                                            <th scope="col">Is_Active</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {data.map(item => (
                                            <tr key={item.id}>
                                                <td>{item.id}</td>
                                                <td>{item.name}</td>
                                                <td>{item.desc}</td>
                                                <td>
                                                    <form className="d-grid gap-2 d-sm-flex justify-content-sm-center" action={`/admin-course/${item.id}`} method="post">
                                                        <input type="hidden" name="_token" value={crsf} />
                                                        <input type="hidden" name="id" value={item.id} />
                                                        <input type="hidden" name="name" value={item.name} />
                                                        <input type="hidden" name="desc" value={item.desc} />
                                                        <select className="form-select" aria-label="" id="is_active" name="is_active">
                                                            <option value="yes" selected={item.is_active === 'yes'}>yes</option>
                                                            <option value="no" selected={item.is_active === 'no'}>no</option>
                                                        </select>
                                                        <button type="submit" className="btn btn-outline-dark text-decoration-none">
                                                            <i className="bi bi-check"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td className="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                                    <button
                                                        className="btn btn-danger text-decoration-none"
                                                        onClick={() => handleDelete(item.id)}
                                                    >
                                                        Delete
                                                    </button>
                                                    <a href={`/admin-course/edit/${item.id}`}>
                                                        <button className="btn btn-warning text-decoration-none">Edit</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        ))}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    );
};

export default AdminCourseItem;
