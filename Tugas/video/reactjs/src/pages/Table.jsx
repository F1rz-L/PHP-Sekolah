function Table(props) {
    return (
        <>
            <h1>Menu Restoran</h1>
            <div>
                <table class="table table-bordered w-50 mt-4 border-dark">
                    <tr>
                        <th>Menu</th>
                        <th>Harga</th>
                    </tr>
                    {props.menu.map((data) => (
                        <tr key={data.idmenu}>
                            <td>
                                {data.menu}
                            </td>
                            <td>
                                Rp{data.harga}
                            </td>
                        </tr>
                    ))}
                </table>
            </div>
        </>
    );
}
export default Table;
