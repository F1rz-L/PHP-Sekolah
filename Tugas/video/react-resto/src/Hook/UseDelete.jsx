import { useEffect, useState } from "react";
import { link } from "../Axios/link";

function UseDelete(url) {
    const [pesan, setPesan] = useState('');

    async function hapus(id){
        if (window.confirm('Yakin menghapus data ini?')) {
            const res = await link.delete(`${url}/${id}`)
            setPesan(res.data.pesan)
        }
    }

    return {hapus, pesan, setPesan};
}

export default UseDelete;
