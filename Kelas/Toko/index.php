<?php
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $db = 'dbtoko';
    $koneksi = new mysqli($host, $user, $password, $db);

    $sql = 'SELECT * FROM barang';
    
    $hasil = mysqli_query($koneksi, $sql);
    
    echo '<table border=1px;>
    <thead>
    <tr><th>
        Barang
    </th>
    <th>
        Harga
    </th>
    <th>
        Stok
    </th></tr>
    </thead>
    <tbody>';

    while($row = mysqli_fetch_array($hasil)){
        echo '<tr><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>';
    }

    echo '</tbody>
    </table>';

    echo '<br><br><br>';
    //pelanggan

    $sql = 'SELECT * FROM pelanggan';
    $hasil = mysqli_query($koneksi, $sql);

    echo '<table border=1px;>
    <thead>
    <tr><th>
        Nama
    </th>
    <th>
    No. Telepon
    </th>
    <th>
        Alamat
    </th></tr>
    </thead>
    <tbody>';

    while($row = mysqli_fetch_array($hasil)){
        echo '<tr><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>';
    }

    echo '</tbody>
    </table>';

?>
