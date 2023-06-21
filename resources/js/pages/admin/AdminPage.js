import React from 'react';
import Sidebar from '../../components/admin/Sidebar';
import Dashboard from '../../components/admin/Dashboard';

const AdminPage = () => {
    return (
        <div className='main'>
            {/* <Sidebar /> */}
            <Dashboard />
        </div>
    );
}

export default AdminPage;
