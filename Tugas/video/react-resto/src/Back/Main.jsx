import React from 'react'
import { BrowserRouter, Route, Routes, useResolvedPath } from 'react-router-dom'
import Content from './Content'

function Main() {
  const path = useResolvedPath("").pathname
  // console.log(path);

  return (
    <div>
        <Routes>
          <Route path=':konten' element={<Content/>}/>
        </Routes>
        {/* <Content/> */}
    </div>
  )
}

export default Main