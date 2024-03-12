import React from 'react'
import Nav from './Nav'
import Sidebar from './Sidebar'
import Main from './Main'
import Footer from './Footer'

function Front() {
  return (
    <>  
        <div className="row">
            <div><Nav/></div>
        </div>
        <div className="row">
            <div className='col-4'>
                <Sidebar/>
            </div>
            <div className='col-8'>
                <Main/>
            </div>
        </div>
        <div className="row">
            <div>
                <Footer/>
            </div>
        </div>
    </>
  )
}

export default Front