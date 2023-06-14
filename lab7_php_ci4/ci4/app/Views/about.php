<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="ziddan.jpg" class="image-circle" title="ziddan" alt="ziddan" width="200" style="float: left; border: 1px solid black;">
            <h1>Welcome!</h1>
            <p>Selamat datang saya adalah Ziddan Makarim mahasiswa Universitas pelita bangsa jurusan teknik informatika kelas TI.20 A.1</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html