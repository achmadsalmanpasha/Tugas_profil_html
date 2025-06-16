<?php
$nama = "Achmad Salman Pasha";
$npm = "23081010262";
$semester = 4;
$kampus = "UPN Veteran Jawa Timur";
$skill = [
    "Illustrator" => "https://cdn-1.webcatalog.io/catalog/adobe-illustrator/adobe-illustrator-icon-filled-256.webp?v=1740046447338",
    "HTML" => "html.png",
    "CSS" => "css.png",
    "JavaScript" => "js.png"
];
$contact = [
    "Whatsapp" => "wa.png",
    "Instagram" => "ig.png",
    "Telegram" => "Telegram_logo.svg.webp"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil <?= $nama; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <nav>
            <ul>
                <li><a href="#profile">Home</a></li>
                <li><a href="#about">About me</a></li>
                <li><a href="#skills">Skill</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </nav>

        <div id="profile">
            <div id="text-container">
                <h1>Hello,</h1>
                <h2>I Am <?= $nama; ?></h2>
                <h3>NPM: <?= $npm; ?></h3>
                <p>Mahasiswa Informatika <?= $kampus; ?>, Semester <?= $semester; ?>.</p>
            </div>
            <div id="image-container">
                <div class="circle"></div>
                <img src="images.png" alt="Foto Profil">
            </div>
        </div>

        <section id="about">
            <h3>About Me</h3>
            <p>
                Saya adalah <?= $nama; ?>, seorang mahasiswa Informatika di <?= $kampus; ?>. Saya mulai berkuliah pada tahun <?= date("Y") - ($semester / 2); ?> dan kini tengah berada di semester <?= $semester; ?>. Selain fokus pada akademik, saya juga aktif dalam olahraga bulu tangkis.
            </p>
        </section>

        <section id="skills">
            <h3>Skill</h3>
            <div class="skill-icons">
                <?php foreach ($skill as $nama_skill => $gambar): ?>
                    <img src="<?= $gambar; ?>" alt="<?= $nama_skill; ?>">
                <?php endforeach; ?>
            </div>
        </section>

        <section id="Contact">
            <h3>Contact</h3>
            <div class="Contact-icon">
                <?php foreach ($contact as $nama_contact => $icon): ?>
                    <img src="<?= $icon; ?>" alt="<?= $nama_contact; ?>">
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</body>
</html>
