<?php
// معالجة البيانات عند إرسال النموذج
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player = htmlspecialchars($_POST['name']);
    $game = htmlspecialchars($_POST['game']);
    $message = "تم استلام طلبك يا $player! فريق $game يرحب بك.";
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مؤسسة الأساطير للألعاب | Gaming Org</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #00ffcc; 
            --accent-color: #ff0055;
            --bg-dark: #0a0b10;
            --card-bg: #161b22;
            --text-color: #ffffff;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(45deg, #0f172a, #1e293b);
            padding: 40px 20px;
            text-align: center;
            border-bottom: 3px solid var(--primary-color);
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 20px;
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            border-radius: 15px;
            margin-bottom: 40px;
        }

        .hero h2 { font-size: 2.5rem; color: var(--primary-color); }

        .platforms {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .platform-card {
            background: var(--card-bg);
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            transition: 0.3s;
            text-decoration: none;
            color: white;
            border: 1px solid #30363d;
        }

        .platform-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-10px);
            box-shadow: 0 5px 15px rgba(0, 255, 204, 0.2);
        }

        .platform-card i {
            font-size: 2rem;
            margin-bottom: 10px;
            display: block;
        }

        /* --- تعديل الفورم بشكل احترافي --- */
        .join-form {
            background: var(--card-bg);
            padding: 35px;
            border-radius: 15px;
            max-width: 500px;
            margin: 40px auto;
            border: 1px solid #30363d;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .join-form h3 {
            margin-top: 0;
            color: var(--primary-color);
            border-bottom: 1px solid #30363d;
            padding-bottom: 15px;
        }

        .form-group {
            text-align: right;
            margin-bottom: 15px;
        }

        .join-form label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #ccc;
        }

        input, select {
            width: 100%;
            padding: 12px;
            box-sizing: border-box; /* يحل مشكلة خروج الفورم عن الحواف */
            background: #0d1117;
            border: 1px solid #30363d;
            color: white;
            border-radius: 8px;
            font-size: 1rem;
            transition: 0.3s;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 5px var(--primary-color);
        }

        .btn-submit {
            width: 100%; /* العرض كامل ومتناسق */
            padding: 14px;
            background-color: var(--primary-color);
            color: #000;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 8px;
            font-size: 1.1rem;
            margin-top: 15px;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background-color: #00cca3;
            transform: scale(1.02);
        }

        .success-msg {
            background: rgba(0, 255, 204, 0.2);
            color: var(--primary-color);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
            border: 1px solid var(--primary-color);
        }
    </style>
</head>
<body>

<header>
    <h1><i class="fas fa-gamepad"></i> مؤسسة Jawad Abushehab </h1>
    <p>بوابتك لعالم الاحتراف والبطولات</p>
</header>

<div class="container">
    
    <section class="hero">
        <h2>أثبت مهاراتك للعالم</h2>
        <p>انضم الآن لأكبر تجمع للاعبين العرب وشارك في بطولاتنا القادمة</p>
    </section>

    <h3 style="text-align: center; color: var(--primary-color);">منصات الألعاب الرسمية</h3>
    <div class="platforms">
        <a href="https://store.steampowered.com/" target="_blank" class="platform-card">
            <i class="fab fa-steam"></i> Steam
        </a>
        <a href="https://www.epicgames.com/" target="_blank" class="platform-card">
            <i class="fas fa-bolt"></i> Epic Games
        </a>
        <a href="https://www.playstation.com/" target="_blank" class="platform-card">
            <i class="fab fa-playstation"></i> PlayStation
        </a>
        <a href="https://www.xbox.com/" target="_blank" class="platform-card">
            <i class="fab fa-xbox"></i> Xbox
        </a>
        <a href="https://www.twitch.tv/" target="_blank" class="platform-card">
            <i class="fab fa-twitch"></i> Twitch TV
        </a>
    </div>

    <div class="join-form">
        <h3 style="text-align: center;">سجل كلاعب محترف</h3>
        
        <?php if ($message): ?>
            <div class="success-msg"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label>اسم اللاعب (NickName):</label>
                <input type="text" name="name" placeholder="مثال: Ghost_Rider" required>
            </div>

            <div class="form-group">
                <label>اللعبة المفضلة:</label>
                <select name="game">
                    <option value="Valorant">Valorant</option>
                    <option value="PUBG Mobile">PUBG Mobile</option>
                    <option value="League of Legends">League of Legends</option>
                    <option value="Counter-Strike 2">Counter-Strike 2</option>
                    <option value="FIFA/FC24">FIFA / FC24</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">إرسال طلب الانضمام</button>
        </form>
    </div>

</div>

<footer style="text-align: center; padding: 40px; color: #666;">
    <p>&copy;Jawad Abushehab - جميع الحقوق محفوظة</p>
</footer>

</body>
</html>