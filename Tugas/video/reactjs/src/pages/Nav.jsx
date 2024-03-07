import React from "react";
import { Link } from "react-router-dom";

function Nav(){
    return(
        <div className="App">
            <ul>
                <li><Link to={"/"}>Home</Link></li>
                <li><Link to={"/sejarah"}>Sejarah</Link></li>
                <li><Link to={"/kontak"}>Kontak</Link></li>
                <li><Link to={"/tentang"}>Tentang</Link></li>
                <li><Link to={"/siswa"}>Siswa</Link></li>
                <li><Link to={"/menu"}>Menu</Link></li>
            </ul>
        </div>
    )
}

export default Nav;