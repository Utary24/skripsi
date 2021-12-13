<html>
<body>
 <div>
    <table cellspacing="3" cellpadding="4" >
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Kode Inventaris</th>
                                        <th>Nama Item </th>
                                        <th>Merek</th>
                                        <th>Satuan</th>
                                        <th>Vol</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi</th>
                                        <th>Keterangan</th>
                                        <th>Staff</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php foreach ($elektronik as $key => $row) { ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $row['tanggal_masuk']; ?></td>
                                            <td><?php echo $row['kode_inventaris']; ?></td>
                                            <td><?php echo $row['nama_item']; ?></td>
                                            <td><?php echo $row['merk']; ?></td>
                                            <td><?php echo $row['satuan']; ?></td>
                                            <td><?php echo $row['vol']; ?></td>
                                            <td>Rp.<?php echo number_format($row['harga'], 2,  ",", ".");?> </td>
                                            <td>Rp.<?php echo number_format($row['jumlah'], 2,  ",", ".");?> </td>
                                            <td><?php echo $row['kondisi']; ?></td>
                                            <td><?php echo $row['keterangan']; ?></td>
                                            <td><?php echo $row['nama_karyawan']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
          
        </table>
    </div>
 </body>
</html>