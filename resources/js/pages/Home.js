import React from 'react';
import Navbar from '../components/Navbar';
import Hero from '../components/Hero';
import TopCourse from '../components/TopCourse';
import Featured from '../components/Featured';
import ShortcutJoin from '../components/ShortcutJoin';
import Footer from '../components/Footer';

const Home = () => {
    return (
        <div className='main'>
            <Navbar />
            <Hero />
            <TopCourse />
            <Featured />
            <ShortcutJoin />
            <Footer />
        </div>
    );
}

export default Home;
