import React, { useEffect, useState } from "react";
import { link } from "../Axios/link";

function UseGet(url) {
    const [isi, setIsi] = useState([]);

    useEffect(() => {
        let ambil = true;
        async function fetchData() {
            const request = await link.get(url);
            if (ambil) {
                setIsi(request.data);
            }
        }
        fetchData();
        return () => (ambil = false);
    }, [isi]);

    return [isi];
}

export default UseGet;
