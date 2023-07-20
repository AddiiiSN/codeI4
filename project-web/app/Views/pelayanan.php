<?php echo $this->include('template/header'); ?>
<main id="main" class="main">
    <div class="container mb-5">
        <div class="addButton">
            <button class="btn btn-success float-end mt-4">Tambah Pelayanan</button>
        </div>
        <div class="judul">
            <h2 class="text-center">Jenis Pelayanan</h2>
        </div>
    </div>
    <table class="table table-hover table-borderless text-center ">
        <thead class="table-active">
            <tr>
                <th class="">No</th>
                <th class="col-md-2">Jenis Pelayanan</th>
                <th class="col-md-2">Dokter</th>
                <th class="col-md-2">ID Dokter</th>
                <th class="col-md-2">Jam Praktek</th>
                <th class="col-md-3"></th>
            </tr>
        </thead>
        <tbody class="table-bordered">
            <?php $i = 0; ?>
            <?php foreach ($pelayanan as $p) { ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $p['jenis']; ?></td>
                <td><?php echo $p['dokter']; ?></td>
                <td><?php echo $p['idDokter']; ?></td>
                <td><?php echo $p['jamPraktek']; ?></td>
                <td class="" style="font-size: 30px; padding: 0;">
                    <i class="bi bi-pencil-square" style="margin: 0px 20px 0px 5px;"></i>
                    <i class="bi bi-trash"></i>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</main>
<?php echo $this->include('template/footer'); ?>