<?php
include "header.php";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Evaluasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Evaluasi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2">
                                    <img src="dist/img/logo.png" width="30%" alt="" srcset="">
                                </div>
                                <div class="col-10">
                                    <h6>
                                        <center>KABUPATEN MOROWALI</center>
                                    </h6>
                                    <h4>
                                        <center>EVALUASI TERHADAP HASIL RKPD</center>
                                    </h4>
                                    <h6>
                                        <center>TAHUN 2019</center>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered" style="overflow: auto;">
                                <thead>
                                    <tr>
                                        <th rowspan="3">No</th>
                                        <th rowspan="3">Sasaran</th>
                                        <th rowspan="3">Kode</th>
                                        <th rowspan="3">Urusan/Bidang Urusan Pemerintahan Daerah dan Program/Kegiatan</th>
                                        <th rowspan="3">Indikator Kinerja Program (Outcome) / Kegiatan (Output)</th>
                                        <th rowspan="2" colspan="2">Target RPJMD Kabupaten Morowali Pada Tahun ... (Akhir Periode RPJMD)</th>
                                        <th rowspan="2" colspan="2">Realisasi Capaian Kinerja RPJMD Kabupaten/kota sampai dengan RKPD Kabupaten/kota Tahun Lalu (n-2) Target</th>
                                        <th rowspan="2" colspan="2">Target Kinerja dan Anggaran RKPD Kabupaten/kota Tahun Berjalan (Tahun n-1) yang Dievaluasi</th>
                                        <th colspan="8" colspan="2">Realisasi Kinerja Pada Triwulan</th>
                                        <th rowspan="2" colspan="2">Realisasi Capaian Kinerja dan Anggaran RKPD Kabupaten/kota yang Dievaluasi</th>
                                        <th rowspan="2" colspan="2">Realisasi Kinerja dan Anggaran RPJMD Kabupaten/kota s/d Tahun ... (Akhir Tahun Pelaksanaan RKPD Tahun ...)</th>
                                        <th rowspan="2" colspan="2">Tingkat Capaian Kinerja dan Realisasi Anggaran RPJMD Kabupaten/kota s/d Tahun ... (%)</th>
                                        <th rowspan="3">Perangkat Daerah Penanggung Jawab</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">I</th>
                                        <th colspan="2">II</th>
                                        <th colspan="2">III</th>
                                        <th colspan="2">IV</th>
                                    </tr>
                                    <tr>
                                        <?php for ($i =  1; $i <= 10; $i++) { ?>
                                            <th>K</th>
                                            <th>Rp</th>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <?php for ($i =  1; $i <= 5; $i++) { ?>
                                            <th><?= $i; ?></th>
                                        <?php } ?>
                                        <?php for ($i =  6; $i <= 13; $i++) { ?>
                                            <th colspan="2"><?= $i; ?></th>
                                        <?php } ?>
                                        <th colspan="2">14 = 7 + 13</th>
                                        <th colspan="2">15 = 14/6 * 100%</th>
                                        <th>16</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data LRA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Rekening 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Rekening 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Rekening 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Rekening 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Rekening 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Uraian</p>
                                <input type="text" name="uraian" class="form-control" placeholder="Uraian">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Anggaran</p>
                                <input type="text" name="anggaran" class="form-control" placeholder="Anggaran">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Realisasi</p>
                                <input type="text" name="realisasi" class="form-control" placeholder="Realisisai">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Fisik</p>
                                <input type="text" name="fisik" class="form-control" placeholder="Fisik">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Bertambah/Berkurang</p>
                                <input type="text" name="tambah_kurang" class="form-control" placeholder="Bertambah/Berkurang">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>%</p>
                                <input type="text" name="persen" class="form-control" placeholder="%">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Pelaksana</p>
                                <input type="text" name="pelaksana" class="form-control" placeholder="Pelaksana">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Sumber Dana</p>
                                <input type="text" name="sumber_dana" class="form-control" placeholder="Sumber Dana">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p>Lokasi</p>
                                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div style="float: right;">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php
include "footer.php";
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#sb3').addClass('active');
    });
</script>