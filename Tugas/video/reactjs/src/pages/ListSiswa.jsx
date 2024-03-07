function ListSiswa(props){
    const siswa = props.nama.map((item, i) => 
        <li key={i}>{item}</li>
    )

    return (
        <>
            <ol>{siswa}</ol>
        </>
    )
}

export default ListSiswa