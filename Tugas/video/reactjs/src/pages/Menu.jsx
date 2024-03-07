import { useState } from "react"
import Table from "./Table"

function Menu(){
    const [menus, setMenu] = useState([
        {
            idmenu: 1,
            menu: 'Nasi Goreng',
            harga: 15000,
            tipe: 'Benar Nasi'
        },
        {
            idmenu: 2,
            menu: 'Mie Goreng',
            harga: 10000,
            tipe: 'Bukan Nasi'
        },
        {
            idmenu: 3,
            menu: 'Ayam Goreng',
            harga: 20000,
            tipe: 'Benar Nasi'
        },
        {
            idmenu: 4,
            menu: 'Soto Ayam',
            harga: 25000,
            tipe: 'Benar Nasi'
        }
    ])
    return(


        <>
         <Table menu={menus.filter((data) => data.tipe == "Bukan Nasi")} />
         <Table menu={menus.filter((data) => data.tipe == "Benar Nasi")} />
        </>
    )
}
export default Menu