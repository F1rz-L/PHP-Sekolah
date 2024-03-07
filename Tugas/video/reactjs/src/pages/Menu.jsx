import { useState } from "react"

function Menu(){
    const [menus, setMenu] = useState([
        {
            idmenu: 1,
            menu: 'Nasi Goreng',
            harga: 15000
        },
        {
            idmenu: 2,
            menu: 'Mie Goreng',
            harga: 10000
        },
        {
            idmenu: 3,
            menu: 'Ayam Goreng',
            harga: 20000
        },
        {
            idmenu: 4,
            menu: 'Soto Ayam',
            harga: 25000
        }
    ])
    return(


        <>
            <h1>Menu Restoran</h1>
            <div>
                {menus.map((data) => (
                    <li key={data.idmenu}>{data.menu}</li>
                ))}
            </div>
        </>
    )
}
export default Menu