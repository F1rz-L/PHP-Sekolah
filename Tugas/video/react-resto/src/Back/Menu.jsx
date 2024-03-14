import { useForm } from "react-hook-form";
import UseDelete from "../Hook/UseDelete";
import UseGet from "../Hook/UseGet";
import { useEffect, useState } from "react";
import { link } from "../Axios/link";

let count = 0;

function Menu() {
    const [isi] = UseGet("/menu");
    const { hapus, pesan, setPesan } = UseDelete("/menu");
    const [kategori, setKategori] = useState([]);
    const [idKategori, setIdKategori] = useState([]);
    const [idMenu, setIdMenu] = useState([]);
    const [gambar, setGambar] = useState([]);
    const [pilihan, setPilihan] = useState(true);

    useEffect(() => {
        let ambil = true;
        async function fetchData() {
            const request = await link.get("/kategori");
            if (ambil) {
                setKategori(request.data);
            }
        }
        fetchData();
        return () => (ambil = false);
    }, [kategori]);

    const {
        register,
        handleSubmit,
        watch,
        reset,
        formState: { errors },
        setValue,
    } = useForm();

    function simpan(data) {
        console.log(data)

        const formData = new FormData();
        formData.append("menu", data.menu);
        formData.append("idkategori", data.idkategori);
        formData.append("deskripsi", data.deskripsi);
        formData.append("gambar", data.gambar[0]);
        formData.append("harga", data.harga);

        if (pilihan) {
            link.post('/menu', formData).then(res=>{setPesan(res.data.pesan)})
            reset();
        } else {
            link.post(`/menu/${idMenu}`, formData).then(res=>{setPesan(res.data.pesan)})
            setPilihan(true)
        }
    }

    async function showData(id) {
        const res = await link.get(`/menu/${id}`)

        setValue("menu", res.data[0].menu)
        setValue("deskripsi", res.data[0].deskripsi)
        setValue("harga", res.data[0].harga)
        setGambar(<img src={res.data[0].gambar} alt="" style={{ maxHeight: "200px" }}/>)
        setIdKategori(res.data[0].idkategori)
        setIdMenu(res.data[0].idmenu)
        setPilihan(false)
    }

    return (
        <>
            <div className="row">
                <h1>Panel Menu</h1>
            </div>
            <div className="row">
                <p>{pesan}</p>
            </div>
            <div className="row">
                <form onSubmit={handleSubmit(simpan)} className="col-6 mb-3">
                    <select name="idkategori" {...register("idkategori", { required: true })} className="form-select">
                        {kategori.map((value, index) => (
                            value.idkategori === idKategori ?
                                (<option key={index} selected value={value.idkategori}>{value.kategori}</option>) :
                                (<option key={index} value={value.idkategori}>{value.kategori}</option>)
                        ))}
                    </select>

                    <input
                        type="text"
                        {...register("menu", { required: true })}
                        className="form-control my-1"
                        placeholder="Menu Baru..."
                    />
                    {errors.menu && (
                        <p className="text-danger">This field is required</p>
                    )}

                    <input
                        type="text"
                        {...register("harga", { required: true })}
                        className="form-control my-1"
                        placeholder="Harga..."
                    />
                    {errors.harga && (
                        <p className="text-danger">This field is required</p>
                    )}

                    <input
                        type="file"
                        {...register("gambar")}
                        className="form-control my-1"
                    />
                    {errors.gambar && (
                        <p className="text-danger">This field is required</p>
                    )}

                    <button type="submit" className="btn btn-primary my-2">
                        Submit
                    </button>
                    {/* <input type="submit" {...register("exampleRequired", { required: true })} className="btn btn-primary my-2" name="submit" /> */}
                </form>
                <div className="col-4">
                    {gambar}
                </div>
            </div>
            <div className="row">
                <table className="table table-bordered mt-4 fs-6">
                    <thead>
                        <tr className="text-center">
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Menu</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Hapus</th>
                            <th>Ubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        {isi.map((value, index) => (
                            <tr key={index}>
                                <th>{index + 1}</th>
                                <td>{value.kategori}</td>
                                <td>{value.menu}</td>
                                <td className="text-center">
                                    <img
                                        style={{ maxWidth: "64px" }}
                                        src={value.gambar}
                                        alt=""
                                    />
                                </td>
                                <td>{value.harga}</td>
                                <td className="text-center">
                                    <button
                                        onClick={() => hapus(value.idmenu)}
                                        className="btn btn-danger">
                                        Hapus
                                    </button>
                                </td>
                                <td className="text-center">
                                    <button
                                        onClick={() => showData(value.idmenu)}
                                        className="btn btn-warning">
                                        Ubah
                                    </button>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
            <div className="row"></div>
        </>
    );
}

export default Menu;
