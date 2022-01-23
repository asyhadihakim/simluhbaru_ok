<?= $this->extend('layout/main_template') ?>

<?= $this->section('content') ?>


<center><h2> Daftar Kelompok P2L di Kab <?= ucwords(strtolower($nama_kabupaten)) ?> </h2></center>
<div class="card">
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center; width: 10%">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Nama Kecamatan</th>
                   
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Jumlah<br>Gapoktan</th>
                   
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($tabel_data as $row) {
            ?>
            
                <tr>
                    <td class="align-middle rupiah text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $i++ ?></p>
                    </td>
                    <td class="align-middle text-sm">
                    <a href="<?= base_url('/listkep2l?kode_kec=' . $row['id_daerah']) ?>">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['deskripsi'] ?></p>
                    </td></a>
                    <td class="align-middle rupiah text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['jum'] ?></p>
                  
                       
                </tr>
            <?php
            }
            ?>

            </tbody>
            <tfoot>
                <tr>
                    <th class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"></p>
                    </th>
                    <th class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">JUMLAH</p>
                    </th>
                    <th class="align-middle rupiah text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $jum_poktan ?></p>
                    </th>
                

                </tr>
            </tfoot>
        </table>
               
    </div>
</div>
</tbody>
</table>
</div>

</div>
<?php echo view('layout/footer'); ?>
<br>

<?= $this->endSection() ?>