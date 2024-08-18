<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1>Input Proyek Baru</h1>
<form action="<?= base_url('proyek/store') ?>" method="post">
    <label for="namaProyek">Nama Proyek</label>
    <input type="text" name="namaProyek" id="namaProyek" required>
    <br>

    <label for="client">Client</label>
    <input type="text" name="client" id="client" required>
    <br>

    <label for="tglMulai">Tanggal Mulai</label>
    <input type="date" name="tglMulai" id="tglMulai" required>
    <br>

    <label for="tglSelesai">Tanggal Selesai</label>
    <input type="date" name="tglSelesai" id="tglSelesai" required>
    <br>

    <label for="pimpinanProyek">Pimpinan Proyek</label>
    <input type="text" name="pimpinanProyek" id="pimpinanProyek" required>
    <br>

    <label for="keterangan">Keterangan</label>
    <textarea name="keterangan" id="keterangan"></textarea>
    <br>

    <label for="lokasi">Lokasi</label>
    <select name="lokasi" id="lokasi">
        <?php foreach($lokasi as $item): ?>
            <option value="<?= $item->id ?>"><?= $item->namaLokasi ?></option>
        <?php endforeach; ?>
    </select>
    <br>

    <button type="submit">Simpan</button>
</form>
<?= $this->endSection() ?>
