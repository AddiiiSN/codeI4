<?php echo $this->include('template/header'); ?>
<main id="main" class="main">
    <div class="judul">
        <h2 style="text-align: center; margin: 30px 0px 20px 0px;">Data Antrian</h2>
    </div>

    <table class="table table-hover table-borderless text-center">
        <thead class="table-active">
            <tr>
                <th class="">No</th>
                <th class="">Antrian</th>
                <th class="col-md-2">Nama</th>
                <th class="col-md-2">Usia</th>
                <th class="col-md-2">Alamat</th>
                <th class="col-md-2">No. HP</th>
                <th class="col-md-2">Jenis Pelayanan</th>
                <th class="col-md-3"></th>
            </tr>
        </thead>
        <tbody class="table-bordered">
            <?php $i = 0; ?>
            <?php foreach ($datapasien as $p) { ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo $p['nama']; ?></td>
                <td><?php echo $p['usia']; ?> Tahun</td>
                <td><?php echo $p['alamat']; ?></td>
                <td><?php echo $p['no.hp']; ?></td>
                <td><?php echo $p['pelayanan']; ?></td>
                <td class="" style="font-size: 30px; padding: 0;">
                    <i class="bi bi-pencil-square" style="margin: 0px 20px 0px 5px;"></i>
                    <i class="bi bi-trash"></i>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</main>
<?php echo $this->include('template/footer'); ?>