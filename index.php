<?php
$socialMedia = [
    ['name' => 'Instagram', 'url' => 'https://instagram.com/username', 'icon' => 'fab fa-instagram', 'color' => '#E4405F'],
    ['name' => 'Facebook', 'url' => 'https://facebook.com/username', 'icon' => 'fab fa-facebook-f', 'color' => '#1877F2'],
    ['name' => 'Twitter', 'url' => 'https://twitter.com/username', 'icon' => 'fab fa-twitter', 'color' => '#1DA1F2'],
    ['name' => 'LinkedIn', 'url' => 'https://linkedin.com/in/username', 'icon' => 'fab fa-linkedin-in', 'color' => '#0A66C2'],
    ['name' => 'GitHub', 'url' => 'https://github.com/username', 'icon' => 'fab fa-github', 'color' => '#333'],
    ['name' => 'YouTube', 'url' => 'https://youtube.com/@username', 'icon' => 'fab fa-youtube', 'color' => '#FF0000'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web - Azaila Putri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Times New Roman'
            background: #f5f5f5;
            min-height: 100vh;
            padding: 20px;
        }
        
        .header {
            background: #fff;
            padding: 60px 20px;
            text-align: center;
            color: #333;
        }
        
        .profile-photo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 5px solid #ddd;
            margin: 0 auto 20px;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-info h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        
        .profile-info p {
            font-size: 1.2em;
            opacity: 0.9;
            margin-bottom: 10px;
        }
        
        .social-media {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 40px 20px;
            flex-wrap: wrap;
            background: #f8f9fa;
        }
        
        .social-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
        }
        
        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
        
        <?php foreach($socialMedia as $index => $social): ?>
        .social-icon:nth-child(<?php echo $index + 1; ?>):hover {
            background: <?php echo $social['color']; ?>;
            color: white;
            border-color: <?php echo $social['color']; ?>;
        }
        <?php endforeach; ?>
        
        .social-icon .icon {
            font-size: 28px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="profile-photo">
            <img src="img/download.jpeg" alt="Foto Profil">
        </div>
        <div class="profile-info">
            <h1>Azaila Dwi Putri Fajarwati</h1>                
            <p>NIM: 102092400032</p>
            <p>Fakultas Rekaysa Industri</p>
            <p>Prodi Sistem Informasi</p>
        </div>
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