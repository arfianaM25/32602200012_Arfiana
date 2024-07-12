<?= $this->extend('Layout/layout') ?>
<?= $this->section('content') ?>

<h2>Profil Saya</h2>
<table class="profile-table">
    <tr>
        <th>Nama</th>
        <td>Arfiana Maulidiyah</td>
    </tr>
    <tr>
        <th>Umur</th>
        <td>19 Tahun</td>
    </tr>
    <tr>
        <th>Fakultas</th>
        <td>Teknologi Industri</td>
    </tr>
</table>

<h2>Keahlian</h2>
<ul class="skills-list">
    <li>HTML</li>
    <li>CSS</li>
    <li>PHP</li>
    <li>Adobe Premier</li>
    <li>Adobe Ilustrator</li>
    <li>Adobe After Effect</li>
</ul>

<?= $this->endSection() ?>