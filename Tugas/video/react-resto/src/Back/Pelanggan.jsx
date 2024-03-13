import React from "react";
import UseGet from "../Hook/UseGet";

function Pelanggan() {
    const [isi] = UseGet("/pelanggan");

    return (
        <>
            <div className="row">
                <h1>Panel Pelanggan</h1>
            </div>
            <div className="row">
                <p>{}</p>
            </div>
            <div className="row">
                <table className="table table-bordered mt-4 fs-6">
                    <thead>
                        <tr className="text-center">
                            <th>No</th>
                            <th>Pelanggan</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        {isi.map((value, index) => (
                            <tr key={index}>
                                <th>{index + 1}</th>
                                <td>{value.pelanggan}</td>
                                <td>{value.alamat}</td>
                                <td>{value.telp}</td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </>
    );
}

export default Pelanggan;
