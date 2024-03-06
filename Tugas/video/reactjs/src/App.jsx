import React, { Component } from "react";
import { createBrowserRouter, BrowserRouter, Routes, Route } from "react-router-dom";
import "./App.css";
import Kontak from "./pages/Kontak.jsx";
import Nav from "./pages/Nav.jsx";
import Sejarah from "./pages/Sejarah.jsx";
import Tentang from "./pages/Tentang.jsx";
import Home from "./pages/Home.jsx";

function App() {
    return (
        <>
            <Nav />
            <Routes>
                <Route path='/' element={<Home/>}/>
                <Route path='/sejarah' element={<Sejarah/>}/>
                <Route path='/kontak' element={<Kontak/>}/>
                <Route path='/tentang' element={<Tentang/>}/>
            </Routes>
        </>
    );
}

export default App;
