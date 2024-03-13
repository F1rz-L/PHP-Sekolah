import UseDelete from '../Hook/UseDelete';
import UseGet from '../Hook/UseGet'

let count = 0

function Menu() {
  const [isi] = UseGet('/menu')
  const {hapus, pesan} = UseDelete("/menu");

  return (
    <>
        <div className="row">
            <h1>Panel Menu</h1>
        </div>
        <div className="row">
            <p>{pesan}</p>
        </div>
        <div className="row">
            <table  className="table table-bordered mt-4 fs-6">
                <thead>
                    <tr className="text-center">
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Menu</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    {isi.map((value, index) => (
                            <tr key={index}>
                                <th>{index + 1}</th>
                                <td>{value.kategori}</td>
                                <td>{value.menu}</td>
                                <td className="text-center"><img style={{ maxWidth: '64px' }} src={value.gambar} alt="" /></td>
                                <td>{value.harga}</td>
                                <td><button onClick={() => hapus(value.idmenu)} className="btn btn-danger">Hapus</button></td>
                            </tr>
                        ))}
                </tbody>
            </table>
        </div>
        <div className="row"></div>
    </>
  )
}

export default Menu