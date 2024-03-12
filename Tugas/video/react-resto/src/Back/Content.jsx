import React from 'react'
import { useParams, useResolvedPath } from 'react-router-dom'

function Content() {
    const {konten} = useParams()
    const path = useResolvedPath("").pathname
    // console.log(isi, path);
    // console.log(useParams());

  return (
    <div>
        <h1>{konten}</h1>
    </div>
  )
}

export default Content