import React from "react";
import { Link } from "react-router-dom";

function Nav(){
    return(
        <div className="App">
            <ul>
                <Link to={"/"}>Home</Link>
                <Link to={"/sejarah"}>Sejarah</Link>
                <Link to={"/kontak"}>Kontak</Link>
                <Link to={"/tentang"}>Tentang</Link>
            </ul>
        </div>
    )
}

export default Nav;