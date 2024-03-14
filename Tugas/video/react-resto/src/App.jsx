import Back from "./Back/Back";
import Login from "./Back/Login";
import Front from "./Front/Front";
import Nav from "./Front/Nav";
import NavData from "./Front/NavData";
import "bootstrap/dist/css/bootstrap.min.css";
import { BrowserRouter, Route, Routes } from "react-router-dom";

function App() {
    return (
        <>
            <div className="container">
                <BrowserRouter>
                    <Routes>
                        <Route path="/" Component={Front} />
                        <Route path="/home" Component={Front} />
                        <Route path="/admin/*" Component={Back} />
                        <Route path="/login" Component={Login} />
                    </Routes>
                </BrowserRouter>
            </div>
        </>
    );
}

export default App;
