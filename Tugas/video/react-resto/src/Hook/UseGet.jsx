import React, { useEffect, useState } from 'react'
import { link } from "../Axios/link";

function UseGet(url) {
    const [isi, setIsi] = useState([]);
    
    async function fetchData() {
        const request = await link.get(url);
        console.log(request)
        setIsi(request.data);
    }

    useEffect(() => {
        fetchData()
    }, [isi])

  return ([
    isi,
    
  ])
}

export default UseGet