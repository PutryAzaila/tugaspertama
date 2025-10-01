<?php
$socialMedia = [
    ['name' => 'Instagram', 'url' => 'https://instagram.com/ptryzza', 'icon' => 'fab fa-instagram', 'color' => '#E4405F'],
    ['name' => 'Twitter', 'url' => 'https://twitter.com/ailaazyav', 'icon' => 'fab fa-twitter', 'color' => '#1DA1F2'],
    ['name' => 'LinkedIn', 'url' => 'https://linkedin.com/in/azaila-dwi-putri-fajarwati-351a83276', 'icon' => 'fab fa-linkedin-in', 'color' => '#0A66C2'],
    ['name' => 'GitHub', 'url' => 'https://github.com/PutryAzaila', 'icon' => 'fab fa-github', 'color' => '#333'],
    ['name' => 'YouTube', 'url' => 'https://youtube.com/@azailaputri2886', 'icon' => 'fab fa-youtube', 'color' => '#FF0000'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web - Azaila Putri</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color:#AFDDFF;
        }
        
        .container {
            background: white;
            max-width: 500px;
            margin: 40px auto;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .header {
            background: #1976d2;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        
        .profile-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #F9F3EF;
            margin: 0 auto 20px;
            overflow: hidden;
        }
        
        .profile-photo img {
            width: 100%;
            height: 100%;
        }
        
        .header h1 {
            font-size: 1.8em;
            margin-bottom: 5px;
        }
        
        .header p {
            font-size: 1em;
            margin-bottom: 7px;
        }
        
        .social-media {
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 30px 20px;
        }
        
        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 22px;
        }
        
        <?php foreach($socialMedia as $social): ?>
        .social-icon[title="<?php echo $social['name']; ?>"] {
            color: <?php echo $social['color']; ?>;
        }
        
        .social-icon[title="<?php echo $social['name']; ?>"]:hover {
            background: <?php echo $social['color']; ?>;
            color: white;
        }
        <?php endforeach; ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="profile-photo">
                <img src="img/download.jpeg" alt="Foto Profil">
            </div>
            <h1>Azaila Dwi Putri Fajarwati</h1>                
            <p>NIM: 102092400032</p>
            <p>Fakultas Rekayasa Industri</p>
            <p>Prodi Sistem Informasi</p>
        </div>
        
        <div class="social-media">
            <?php foreach($socialMedia as $social): ?>
                <a href="<?php echo $social['url']; ?>" class="social-icon" target="_blank" title="<?php echo $social['name']; ?>">
                    <i class="<?php echo $social['icon']; ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>