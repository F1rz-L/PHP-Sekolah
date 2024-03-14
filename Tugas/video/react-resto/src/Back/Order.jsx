import React, { useState } from "react";
import UseGet from "../Hook/UseGet";
import { useForm } from "react-hook-form";
import Modal from "react-modal";
import { link } from "../Axios/link";

Modal.setAppElement("#root");
function Order() {
    const {
        register,
        handleSubmit,
        watch,
        reset,
        formState: { errors },
        setValue,
    } = useForm();

    let today = new Date().toISOString().slice(0, 10);

    const [awal, setAwal] = useState("2024-01-01");
    const [akhir, setAkhir] = useState(today);
    const [modalOpen, setModalOpen] = useState(false);
    const [total, setTotal] = useState(0);
    const [pelanggan, setPelanggan] = useState("");
    const [idOrder, setIdOrder] = useState(0);
    const [isi] = UseGet(`/order/${awal}/${akhir}`);

    function cari(data) {
        setAwal(data.tglawal);
        setAkhir(data.tglakhir);
    }

    function filterData(id) {
        let data = isi.filter((value) => (value.idorder == id));
        setPelanggan(data[0].pelanggan);
        setTotal(data[0].total);
        setIdOrder(data[0].idorder);
        
        setModalOpen(true);
    }
    
    function isiForm(){
        setValue("total", total);
    }

    async function simpan(data){
        let hasil = {
            bayar: data.bayar,
            kembali: data.bayar - data.total,
            status: 1,
        }

        const res = await link.put(`/order/${idOrder}`, hasil);

        setModalOpen(false);
    }

    return (
        <>
            <Modal
                isOpen={modalOpen}
                onRequestClose={() => setModalOpen(false)}
                onAfterOpen={ isiForm }
                style={{
                    overlay: { backgroundColor: "rgba(0, 0, 0, 0.5)" },
                    content: {
                        top: "50%",
                        left: "50%",
                        right: "auto",
                        bottom: "auto",
                        marginRight: "-50%",
                        transform: "translate(-50%, -50%)",
                    },
                }}>
                <div className="row">
                    <h1>Pembayaran untuk {pelanggan}</h1>
                </div>
                <div className="row">
                    <form onSubmit={handleSubmit(simpan)} className="mb-3">
                        <input
                            type="number"
                            {...register("total", { required: true })}
                            className="form-control my-1"
                            placeholder="Total..."
                            disabled
                        />

                        <input
                            type="number"
                            {...register("bayar", { required: true, min: total })}
                            className="form-control my-1"
                            placeholder="Bayar..."
                        />
                        {errors.bayar && (
                            <p className="text-danger">
                                Pembayaran Kurang!
                            </p>
                        )}

                        <button type="submit" className="btn btn-primary my-2">
                            Submit
                        </button>
                        <button onClick={() => setModalOpen(false)} className="btn btn-secondary my-2 mx-2">
                            Cancel
                        </button>
                    </form>
                </div>
            </Modal>
            <div className="row">
                <div>
                    <h1>Panel Order</h1>
                </div>
            </div>
            <div className="row">
                <form onSubmit={handleSubmit(cari)} className="col-4">
                    <input
                        type="date"
                        {...register("tglawal")}
                        className="form-control my-1 "
                    />
                    <input
                        type="date"
                        {...register("tglakhir")}
                        className="form-control my-1"
                    />
                    <button className="btn btn-primary" type="submit">
                        Cari
                    </button>
                </form>
            </div>
            <div className="row">
                <div>
                    <table className="table table-bordered mt-4 fs-6">
                        <thead>
                            <tr className="text-center">
                                <th>No</th>
                                <th>Faktur</th>
                                <th>Pelanggan</th>
                                <th>Tgl Order</th>
                                <th>Total</th>
                                <th>Dibayar</th>
                                <th>Kembalian</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {isi.map((value, index) => (
                                <tr key={index}>
                                    <th>{index + 1}</th>
                                    <td>{value.idorder}</td>
                                    <td>{value.pelanggan}</td>
                                    <td>{value.tglorder}</td>
                                    <td>{value.total}</td>
                                    <td>{value.bayar}</td>
                                    <td>{value.kembali}</td>
                                    <td>
                                        {value.status === 0 ? (
                                            <button
                                                className="btn btn-primary"
                                                onClick={
                                                    () => filterData(value.idorder)
                                                }>
                                                Bayar
                                            </button>
                                        ) : (
                                            <p>Lunas</p>
                                        )}
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </>
    );
}

export default Order;
