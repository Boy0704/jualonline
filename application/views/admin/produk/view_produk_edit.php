<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/adminlte3/plugins/tagsinput.css">

<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ubah Produk</h3>
            </div>

            <div class="card-body">
              <form action="<?= base_url('admin/edit_produk') ?>" method="post" enctype="multipart/form-data">

                <input type='hidden' name='id' value='<?= $rows['id_produk'] ?>'>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Supplier</label>
                  <div class="col-sm-6">
                    <select name='supplier' class='form-control' required>
                      <option value='' selected>- Pilih Supplier -</option>
                      <?php
                      foreach ($supp as $rowz) {
                        if ($rows['id_supplier'] == $rowz['id_supplier']) {
                          echo "<option value='$rowz[id_supplier]' selected>$rowz[nama_supplier]</option>";
                        } else {
                          echo "<option value='$rowz[id_supplier]'>$rowz[nama_supplier]</option>";
                        }
                      } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-6">
                    <select name='a' class='form-control' required>
                      <option value='' selected>- Pilih Kategori Produk -</option>
                      <?php
                      foreach ($record as $row) {
                        if ($rows['id_kategori_produk'] == $row['id_kategori_produk']) {
                          echo "<option value='$row[id_kategori_produk]' selected>$row[nama_kategori]</option>";
                        } else {
                          echo "<option value='$row[id_kategori_produk]'>$row[nama_kategori]</option>";
                        }
                      } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Produk</label>
                  <div class="col-sm-6">
                    <input type='text' class='form-control' name='b' value='<?= $rows['nama_produk'] ?>' required></td>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Satuan</label>
                  <div class="col-sm-6">
                    <input type='text' class='form-control' name='c' value='<?= $rows['satuan'] ?>' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Berat</label>
                  <div class="col-sm-6"><input type='text' class='form-control' name='berat' value='<?= $rows['berat'] ?>' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga Beli</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='d' value='<?= $rows['harga_beli'] ?>' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga Konsumen</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='f' value='<?= $rows['harga_konsumen'] ?>' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Diskon</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='diskon' value='<?= $rows['diskon'] ?>'>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Stok</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='stok' value='<?= $rows['stok'] ?>' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Warna</label>
                  <div class="col-sm-6">
                    <p>*) pisahkan dengan koma</p>
                    <input type='text' class='form-control' name='warna' data-role="tagsinput" value='<?= $rows['warna'] ?>' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Ukuran</label>
                  <div class="col-sm-6">
                    <p>*) pisahkan dengan koma</p>
                    <input type='text' class='form-control' name='ukuran' data-role="tagsinput" value='<?= $rows['ukuran'] ?>' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea id="summernote" rows="5" class='form-control' name='ff' required><?= $rows['keterangan'] ?></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Ganti Gambar</label>
                  <div class="col-sm-6">
                    <input type="file" name="files[]" class="form-control" multiple>
                    <!-- <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileLangHTML" name="g">
                      <label class="custom-file-label" for="customFileLangHTML" data-browse="Cari">Pilih gambar...</label>
                    </div> -->
                  </div>
                </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Gambar Saat Ini</label>
                    <div class="col-sm-10">
                        
                     <?php 
                        $this->db->where('id_produk', $rows['id_produk']);
                        foreach ($this->db->get('gambar_produk')->result() as $key => $value): ?>
                          <div class="col-md-2">
                            <img src="<?php echo base_url() ?>assets/images/produk/<?php echo $value->gambar ?>" style="width: 100px;">
                            <center>
                              <?php if ($value->cover == '1'): ?>
                                <a  class="btn btn-xs btn-success">Cover</a>
                              <?php else: ?>
                                <a href="<?php echo base_url() ?>admin/jadikan_cover?id_produk=<?php echo $rows['id_produk'] ?>&id_gambar=<?php echo $value->id_gambar ?>" class="btn btn-xs btn-info">Jadikan Cover</a>
                              <?php endif ?>
                            </center>
                          </div>
                        <?php endforeach ?>

                    </div>
                  </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type='submit' name='submit' class='btn btn-primary btn-sm'>Perbarui</button>
                    <a href='<?= base_url('admin/produk') ?>'><button type='button' class='btn btn-secondary btn-sm ml-1'>Batal</button></a>
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/template/adminlte3/plugins/tagsinput.js"></script>