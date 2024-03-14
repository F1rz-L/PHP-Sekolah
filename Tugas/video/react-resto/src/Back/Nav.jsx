import React from 'react';
import { Link, useNavigate } from 'react-router-dom';

function Nav() {
    const navigate = useNavigate()

    function hapus(){
        sessionStorage.removeItem('token')
        navigate('/login')
    }

    return (
        <>
            <nav className="navbar bg-body-tertiary">
                <div className="container-fluid">
                    <Link to={"/admin"} className="navbar-brand" >Admin Dashboard</Link>
                    <li className='nav-item'>Email: {sessionStorage.getItem('email')}</li>
                    <li className='nav-item'>Jabatan: {sessionStorage.getItem('level')}</li>
                    <button onClick={hapus} className="btn btn-outline-success" type="submit">Logout</button>
                </div>
            </nav>
        </>
    );
}

export default Nav