<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1>Edit Proyek</h1>
<form method="post" action="/proyek/update/<?= $proyek->id ?>">
    <label>Nama Proyek</label>
    <input type="text" name="namaProyek" value="<?= $proyek->namaProyek ?>">
    <label>Client</label>
    <input type="text" name="client" value="<?= $proyek->client ?>">
    <label>Tanggal Mulai</label>
    <input type="date" name="tglMulai" value="<?= $proyek->tglMulai ?>">
    <label>Tanggal Selesai</label>
    <input type="date" name="tglSelesai" value="<?= $proyek->tglSelesai ?>">
    <label>Pimpinan Proyek</label>
    <input type="text" name="pimpinanProyek" value="<?= $proyek->pimpinanProyek ?>">
    <label>Keterangan</label>
    <textarea name="keterangan"><?= $proyek->keterangan ?></textarea>
    <label>Lokasi</label>
    <select name="lokasi">
    <?php foreach ($lokasi as $l): ?>
    <option value="<?= $l->id ?>" <?= $l->id == $proyek->lokasi_id ? 'selected' : '' ?>>
        <?= $l->namaLokasi ?>
    </option>
    <?php endforeach; ?>
</select>
<button type="submit">Update</button>
</form>
<?= $this->endSection() ?>

