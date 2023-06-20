import React from 'react';
import Hero from './Hero';
import TopCourse from './TopCourse';
import Featured from './Featured';
import ShortcutJoin from './ShortcutJoin';

const Home = () => {
    return (
        <div className='main'>
            <Hero />
            <TopCourse />
            <Featured />
            <ShortcutJoin />
        </div>
    );
}

export default Home;
