<h1>Kategori</h1>
<table>
    <thead>
        <tr>
            <th>jenis_kendaraan</th>
            <th>nama_kendaraan</th>
            <th>harga_sewa</th>    
        </tr>
    </thead>
    <tbody>
        @foreach($kategori as $kategori)
        <tr>
            <th>mobil</th>
            <th>jazz</th>
            <th>350.000</th>
        </tr>
        @endforeach
    </tbody>
</table>