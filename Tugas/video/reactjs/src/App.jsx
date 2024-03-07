import React, { Component } from "react";
import { createBrowserRouter, BrowserRouter, Routes, Route } from "react-router-dom";
import "../public/style.css";
// import "./App.css";
import Kontak from "./pages/Kontak.jsx";
import Nav from "./pages/Nav.jsx";
import Sejarah from "./pages/Sejarah.jsx";
import Tentang from "./pages/Tentang.jsx";
import Home from "./pages/Home.jsx";
import Siswa from "./pages/Siswa.jsx";
import Menu from "./pages/Menu.jsx";

function App() {
    return (
        <>
            <Nav />
            <Routes>
                <Route path='/' element={<Home/>}/>
                <Route path='/sejarah' element={<Sejarah/>}/>
                <Route path='/kontak' element={<Kontak/>}/>
                <Route path='/tentang' element={<Tentang/>}/>
                <Route path='/siswa' element={<Siswa/>}/>
                <Route path='/menu' element={<Menu/>}/>
            </Routes>
        </>
    );
}

export default App;
