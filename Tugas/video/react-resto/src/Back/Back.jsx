import React from "react";
import Nav from "./Nav";
import Sidebar from "./Sidebar";
import Main from "./Main";
import Footer from "./Footer";
import { Navigate, useNavigate } from "react-router-dom";

function Back() {
    console.log(sessionStorage.getItem("token"))
    const navigate = useNavigate();

    if ((sessionStorage.getItem("token") == 'undefined') || (sessionStorage.getItem("token") == null)) {
        navigate("/login");
    }

    return (
        <>
            <div className="row">
                <div className="col-12">
                    <Nav />
                </div>
            </div>
            <div className="row">
                <div className="col-4">
                    <Sidebar />
                </div>
                <div className="col-8">
                    <Main />
                </div>
            </div>
            <div className="row">
                <div>
                    <Footer />
                </div>
            </div>
        </>
    );
};

export default Back;
