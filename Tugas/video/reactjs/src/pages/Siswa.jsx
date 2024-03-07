import ListSiswa from "./ListSiswa"

function Siswa(props){
    // make 'nama' array consists of 10 unique students name 
    const nama = ['Joni', 'Tejo', 'Budi', 'Siti', 'Joko', 'Sukir', 'Memet', 'Bokir', 'Sarti', 'Santo'];

    return (
        <>
            <ListSiswa nama={nama} />
        </>
    )
}

export default Siswa