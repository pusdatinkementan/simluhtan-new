<div class="container-fluid">

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>
<?php if ($this->session->flashdata('fail')): ?>
<div class="alert alert-danger" role="alert">
    <?php echo $this->session->flashdata('fail'); ?>
</div> 
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="<?php echo site_url('kinerjaBPP/PPembelajaranBpp') ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <div class="card-body">

        <form action="<?php base_url("kinerjaBPP/PPembelajaranBpp/edit") ?>" method="post" enctype="multipart/form-data" >

        <input type="hidden" name="id" value="<?php echo $ppembelajaranbpp->id?>" />
        
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <select class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>" name="tahun" id="tahun">
                    <option value="2021">2021</option>
                </select>        
                <div class="invalid-feedback">
                    <?php echo form_error('tahun') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="bulan">Bulan</label>
                <select class="form-control <?php echo form_error('bulan') ? 'is-invalid':'' ?>" name="bulan" id="bulan">
                    <option value="<?php echo $ppembelajaranbpp->bulan ?>"> Bulan <?php echo $ppembelajaranbpp->bulan ?> </option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>        
                <div class="invalid-feedback">
                    <?php echo form_error('bulan') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="bpp_id">BPP</label>
                <input type="hidden" name="bpp_name" value="<?php echo $ppembelajaranbpp->bpp_name?>" />
                <input type="hidden" name="bpp_id" value="<?php echo $ppembelajaranbpp->bpp_id?>" />
                <select class="form-control <?php echo form_error('bpp') ? 'is-invalid':'' ?>" name="bpp" id="bpp">
                    <option value="<?php echo $ppembelajaranbpp->bpp_id ?>"> <?php echo $ppembelajaranbpp->bpp_name ?> </option>
                </select>
                <div class="invalid-feedback">
                    <?php echo form_error('bpp') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <select class="form-control" name="tanggal" id="tanggal" style="width: 200px">
                <option value="<?php echo $ppembelajaranbpp->tanggal ?>"> Tanggal <?php echo $ppembelajaranbpp->tanggal ?> </option>
                    <?php
                        for($i=1;$i<32;$i++) {
                    ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                        }
                    ?>     
                </select>        
                <div class="invalid-feedback">
                    <?php echo form_error('tanggal') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="sektor">Sektor</label>
                <select class="form-control <?php echo form_error('sektor') ? 'is-invalid':'' ?>" name="sektor" id="sektor">
                    <option value="<?php echo $ppembelajaranbpp->sektor ?>"> <?php echo $ppembelajaranbpp->sektor ?> </option>
                    <option value="Tanaman Pangan">Tanaman Pangan</option>
                    <option value="Hortikultura">Hortikultura</option>
                    <option value="Peternakan dan Keswan">Peternakan dan Keswan</option>
                    <option value="Perkebunan">Perkebunan</option>
                    <option value="Ketahanan Pangan">Ketahanan Pangan</option>
                    <option value="SDM dan Kelembagaan">SDM dan Kelembagaan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>        
                <div class="invalid-feedback">
                    <?php echo form_error('sektor') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="jumlah_poktan">Jumlah Poktan yang Terlibat</label>
                <input class="form-control <?php echo form_error('jumlah_poktan') ? 'is-invalid':'' ?>" value="<?php echo $ppembelajaranbpp->jumlah_poktan ?>" name="jumlah_poktan" id="jumlah_poktan">     
                <div class="invalid-feedback">
                    <?php echo form_error('jumlah_poktan') ?>
                </div>
            </div>
            
            <div class="form-group">
                <label for="jumlah_petani">Jumlah Petani yang Terlibat</label>
                <input class="form-control <?php echo form_error('jumlah_petani') ? 'is-invalid':'' ?>" value="<?php echo $ppembelajaranbpp->jumlah_petani ?>" name="jumlah_petani" id="jumlah_petani">     
                <div class="invalid-feedback">
                    <?php echo form_error('jumlah_petani') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="manfaat">Manfaat Pembelajaran</label>
                <select class="form-control <?php echo form_error('manfaat') ? 'is-invalid':'' ?>" name="manfaat" id="manfaat">
                    <option value="<?php echo $ppembelajaranbpp->manfaat ?>"> <?php echo $ppembelajaranbpp->manfaat ?> </option>
                    <option value="Peningkatan Produksi">Peningkatan Produksi</option>
                    <option value="Terbentuknya Kelembagaan">Terbentuknya Kelembagaan</option>
                    <option value="Perubahan Perilaku">Perubahan Perilaku</option>
                    <option value="Lainnya">Lainnya</option>
                </select>        
                <div class="invalid-feedback">
                    <?php echo form_error('manfaat') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="pembiayaan">Pembiayaan</label>
                <select class="form-control <?php echo form_error('pembiayaan') ? 'is-invalid':'' ?>" name="pembiayaan" id="pembiayaan">
                    <option value="<?php echo $ppembelajaranbpp->pembiayaan ?>"> <?php echo $ppembelajaranbpp->pembiayaan ?> </option>
                    <option value="APBN">APBN</option>
                    <option value="APBD Prov">APBD Prov</option>
                    <option value="APBD Kab/Kota">APBD Kab/Kota</option>
                    <option value="Swadaya">Swadaya</option>
                    <option value="Lainnya">Lainnya</option>
                </select>        
                <div class="invalid-feedback">
                    <?php echo form_error('pembiayaan') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="potensi_peningkatan">Potensi Peningkatan Produktivitas pada Lahan Percontohan</label>
                <input class="form-control <?php echo form_error('potensi_peningkatan') ? 'is-invalid':'' ?>" value="<?php echo $ppembelajaranbpp->potensi_peningkatan ?>" name="potensi_peningkatan" id="potensi_peningkatan">     
                <div class="invalid-feedback">
                    <?php echo form_error('potensi_peningkatan') ?>
                </div>
            </div>

            <div class="form-group">
                <label for="foto">Foto Kegiatan</label>
                <input type="hidden" name="old_image" value="<?php echo $ppembelajaranbpp->foto ?>">
                <input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
                 type="file" name="foto" />
                <div class="invalid-feedback">
                    <?php echo form_error('foto') ?>
                </div>
            </div>

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
        </form>

    </div>


</div>
<!-- /.container-fluid -->
