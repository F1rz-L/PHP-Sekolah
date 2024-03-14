import React from "react";
import { Link, useResolvedPath } from "react-router-dom";

function Sidebar() {

  const url = useResolvedPath("").pathname;
//   console.log(url);

    return (
        <>
            <div className="card mx-1 my-3" style={{ width: "18rem" }}>
                <div className="card-header">Sidebar</div>
                <ul className="list-group list-group-flush">
                    <Link to={`${url}/kategori`}>
                        {
                            ( sessionStorage.getItem('level') == 'admin' ) ? 
                            (<li className="list-group-item">Kategori</li>) : 
                            ""
                        }
                        
                    </Link>

                    <Link to={`${url}/menu`}>
                        {
                            ( sessionStorage.getItem('level') == 'admin' ) ? 
                            (<li className="list-group-item">Menu</li>) : 
                            ""
                        }
                    </Link>

                    <Link to={`${url}/pelanggan`}>
                        {
                            ( sessionStorage.getItem('level') == 'admin' ) ? 
                            (<li className="list-group-item">Pelanggan</li>) : 
                            ""
                        }
                    </Link>

                    <Link to={`${url}/order`}>
                        {
                            ( sessionStorage.getItem('level') == 'admin' ) || ( sessionStorage.getItem('level') == 'kasir' ) ? 
                            (<li className="list-group-item">Order</li>) : 
                            ""
                        }
                    </Link>  
                    <Link to={`${url}/orderdetail`}>
                        {
                            ( sessionStorage.getItem('level') == 'admin' ) || ( sessionStorage.getItem('level') == 'kasir' ) || ( sessionStorage.getItem('level') == 'koki' ) ? 
                            (<li className="list-group-item">Order Detail</li>) : 
                            ""
                        }
                    </Link>
                    <Link to={`${url}/user`}>
                        {
                            ( sessionStorage.getItem('level') == 'admin' ) ? 
                            (<li className="list-group-item">User Admin</li>) : 
                            ""
                        }
                    </Link>
                </ul>
            </div>
        </>
    );
}

export default Sidebar;
