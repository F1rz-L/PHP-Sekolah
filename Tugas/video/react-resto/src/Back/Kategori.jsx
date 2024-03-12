import React, { useEffect, useState } from "react";
import { link } from "../Axios/link";
import { useForm } from "react-hook-form";

function Kategori() {
    const [isi, setIsi] = useState([]);
    const {
        register,
        handleSubmit,
        watch,
        reset,
        formState: { errors },
    } = useForm();

    useEffect(() => {
        async function fetchData() {
            const request = await link.get("/kategori");
            setIsi(request.data);
        }

        fetchData();
    }, []);

    function simpan(data){
        console.log(data)
        reset()
    }

    return (
        <>
            <div className="row">
                <h1>Panel Kategori</h1>
            </div>
            <div className="row">
                <form onSubmit={handleSubmit(simpan)} className="col-6 mb-3">
                    <input type="text" {...register("kategori", { required: true })} className="form-control my-1" placeholder="Kategori Baru..." />
                    {errors.kategori && <p className="text-danger">This field is required</p>}
                    <input type="text" {...register("keterangan", { required: true })} className="form-control my-1" placeholder="Keterangan kategori..." />
                    {errors.keterangan && <p className="text-danger">This field is required</p>}
                    <button type="submit" className="btn btn-primary my-2">Buat Kategori Baru</button>
                    {/* <input type="submit" {...register("exampleRequired", { required: true })} className="btn btn-primary my-2" name="submit" /> */}
                </form>
            </div>
            <div className="row">
                <table className="table table-bordered  fs-6">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        {isi.map((el, index) => (
                            <tr key={index}>
                                <th>{index + 1}</th>
                                <td>{el.kategori}</td>
                                <td>{el.keterangan}</td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </>
    );
}

export default Kategori;
