<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1>List Proyek</h1>
<table>
    <tr>
        <th>Nama Proyek</th>
        <th>Client</th>
        <th>Lokasi</th>
        <th>Action</th>
    </tr>
    <?php foreach ($proyek as $p): ?>
    <tr>
        <td><?= $p->namaProyek ?></td>
        <td><?= $p->client ?></td>
        <td><?= implode(', ', array_map(fn($l) => $l->namaLokasi, $p->lokasi)) ?></td>
        <td>
            <a href="/proyek/edit/<?= $p->id ?>">Edit</a> |
            <a href="/proyek/delete/<?= $p->id ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<h1>List Lokasi</h1>
<table>
    <tr>
        <th>Nama Lokasi</th>
        <th>Negara</th>
        <th>Provinsi</th>
        <th>Kota</th>
        <th>Action</th>
    </tr>
    <?php foreach ($lokasi as $l): ?>
    <tr>
        <td><?= $l->namaLokasi ?></td>
        <td><?= $l->negara ?></td>
        <td><?= $l->provinsi ?></td>
        <td><?= $l->kota ?></td>
        <td>
            <a href="/lokasi/edit/<?= $l->id ?>">Edit</a> |
            <a href="/lokasi/delete/<?= $l->id ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>
