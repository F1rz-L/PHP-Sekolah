import React, { useState } from "react";
import { link } from "../Axios/link";
import { useForm } from "react-hook-form";
import UseGet from "../Hook/UseGet";

function Kategori() {
    const [isi] = UseGet('/kategori');
    const [pesan, setPesan] = useState('');
    const [idKategori, setIdKategori] = useState('');
    const [pilihan, setPilihan] = useState(true);

    const {
        register,
        handleSubmit,
        watch,
        reset,
        formState: { errors },
        setValue,
    } = useForm();
    
    // async function fetchData() {
    //     const request = await link.get("/kategori");
    //     console.log(request)
    //     setIsi(request.data);
    // }

    function simpan(data){
        if(pilihan){
            link.post('/kategori', data).then(res=>{setPesan(res.data.pesan)})
        }else{
            link.put(`/kategori/${idKategori}`, data).then(res=>{setPesan(res.data)})
            setPilihan(true)
        }

        reset()
    }

    // useEffect(() => {
    //     fetchData()
    // }, [])

    async function hapus(idkategori){
        if (window.confirm('Yakin menghapus kategori ini?')) {
            const res = await link.delete(`/kategori/${idkategori}`)
            setPesan(res.data)
        }
    }

    async function showData(idkategori){
        const res = await link.get(`/kategori/${idkategori}`)

        setValue("kategori", res.data[0].kategori)
        setValue("keterangan", res.data[0].keterangan)
        setIdKategori(res.data[0].idkategori)
        setPilihan(false)
    }

    return (
        <>
            <div className="row">
                <h1>Panel Kategori</h1>
            </div>
            <div className="row">
                <p>{pesan}</p>
            </div>
            <div className="row">
                <form onSubmit={handleSubmit(simpan)} className="col-6 mb-3">
                    <input type="text" {...register("kategori", { required: true })} className="form-control my-1" placeholder="Kategori Baru..." />
                    {errors.kategori && <p className="text-danger">This field is required</p>}
                    <input type="text" {...register("keterangan", { required: true })} className="form-control my-1" placeholder="Keterangan kategori..." />
                    {errors.keterangan && <p className="text-danger">This field is required</p>}
                    <button type="submit" className="btn btn-primary my-2">Submit</button>
                    {/* <input type="submit" {...register("exampleRequired", { required: true })} className="btn btn-primary my-2" name="submit" /> */}
                </form>
            </div>
            <div className="row">
                <table className="table table-bordered mt-4 fs-6">
                    <thead>
                        <tr className="text-center">
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Keterangan</th>
                            <th>Hapus</th>
                            <th>Ubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        {isi.map((el, index) => (
                            <tr key={index}>
                                <th>{index + 1}</th>
                                <td>{el.kategori}</td>
                                <td>{el.keterangan}</td>
                                <td className="text-center"><button onClick={() => {hapus(el.idkategori)}} className="btn btn-danger">Hapus</button></td>
                                <td className="text-center"><button onClick={() => {showData(el.idkategori)}} className="btn btn-warning">Ubah</button></td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </>
    );
}

export default Kategori;
