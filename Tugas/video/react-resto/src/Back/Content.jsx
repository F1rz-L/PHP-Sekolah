import React from "react";
import { useParams, useResolvedPath } from "react-router-dom";
import Kategori from "./Kategori";
import Menu from "./Menu";
import Pelanggan from "./Pelanggan";
import Order from "./Order";

function Content() {
    const { konten } = useParams();
    let tampil;

    if (konten === "kategori") {
        tampil = <Kategori/>
    }
    if (konten === "menu") {
        tampil = <Menu/>
    }
    if (konten === "pelanggan") {
        tampil = <Pelanggan/>
    }
    if (konten === "order") {
        tampil = <Order/>
    }

    return (
        <>
            {tampil}
        </>
    );
}

export default Content;
