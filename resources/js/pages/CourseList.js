import React from 'react';
import Navbar from '../components/Navbar';
import { Hero, TopCourse, AllCourse } from '../components/CourseListItem';
import Footer from '../components/Footer';

const CourseList = () => {
    return (
        <div className='main'>
            <Navbar />
            <Hero />
            <TopCourse />
            <AllCourse />
            <Footer />
        </div>
    );
}

export default CourseList;
