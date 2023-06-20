import React from 'react';
import { createRoot } from 'react-dom/client';
import Hero from './components/Hero';
import TopCourse from './components/TopCourse';
import Featured from './components/Featured';
import ShortcutJoin from './components/ShortcutJoin';


const App = () => {
    return (
        <div className='main'>
            <Hero />
            <TopCourse />
            <Featured />
            <ShortcutJoin />
        </div>
    );
}

createRoot(document.getElementById('root')).render(<App />);
