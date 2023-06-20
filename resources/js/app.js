import React from 'react';
import { createRoot } from 'react-dom/client';
import Example from './components/Example';
import Home from './pages/Home';
import CourseList from './pages/CourseList';
import Login from './pages/Login';

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
    }

}

createRoot(document.getElementById('root')).render(<App />);
