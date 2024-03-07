import { useState } from "react";

function Tentang() {
    const [count, setCount] = useState(0);
    function tambah(){
        setCount(count + 1)
    }

    function kurang(){
        setCount(count - 1)
    }

    return (
        <>
            <h1>Tentang</h1>
            <p>{count}</p>
            <button onClick={tambah} className="btn btn-primary">[+]</button>
            <button onClick={kurang} className="btn btn-danger">[-]</button>
        </>
    );
}

export default Tentang;
