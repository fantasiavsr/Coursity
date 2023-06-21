import React from 'react';
import { createRoot } from 'react-dom/client';
import Example from './components/Example';
import Home from './pages/Home';
import CourseList from './pages/CourseList';
import Login from './pages/Login';
import Register from './pages/Register';
import AdminPage from './pages/admin/AdminPage';
import AdminCourse from './pages/admin/AdminCourse';

require('./bootstrap');
require('./components/Example');

const App = () => {
    page = window.page;
    console.log(page);
    if (page === 'test'){
        return (
            <Example />
        );
    } else if (page === 'testHome'){
        return (
            <Home />
        );
    } else if (page === 'testCourseList'){
        return (
            <CourseList />
        );
    } else if (page === 'testLogin'){
        return (
            <Login />
        );
    } else if (page === 'testRegister'){
        return (
            <Register />
        );
    } else if (page === 'testAdmin'){
        return (
            <AdminPage />
        );
    } else if (page === 'testAdminCourse'){
        return (
            <AdminCourse />
        );
    }

}

createRoot(document.getElementById('root')).render(<App />);
