<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お気に入りの投稿結果</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <h1>お気に入りの投稿結果</h1>

    <div class="result-container">
        <?php
        // エラーレポートの設定
        error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
        ini_set('display_errors', 1);

        // データベース接続設定
        $dsn = 'mysql:host=localhost;dbname=favorites_db;charset=utf8';
        $username = 'root'; // XAMPPのデフォルトのユーザー名
        $password = ''; // XAMPPのデフォルトのパスワード（空）

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('データベース接続失敗: ' . $e->getMessage());
        }

        // 最新のデータを取得
        $stmt = $pdo->query('SELECT * FROM favorites ORDER BY id DESC LIMIT 1');
        $favorite = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($favorite) {
            echo '<p><strong>訪問日:</strong> ' . htmlspecialchars($favorite['visit_date']) . '</p>';
            echo '<p><strong>行った場所:</strong> ' . htmlspecialchars($favorite['place_type']) . '</p>';
            echo '<p><strong>場所の名前:</strong> ' . htmlspecialchars($favorite['facility_name']) . '</p>';
            echo '<p><strong>所在地:</strong> ' . htmlspecialchars($favorite['location']) . '</p>';
            echo '<p><strong>価格:</strong> ' . htmlspecialchars($favorite['slider1']) . '</p>';
            echo '<p><strong>料理の味付け:</strong> ' . htmlspecialchars($favorite['slider2']) . '</p>';
            echo '<p><strong>料理の見栄え:</strong> ' . htmlspecialchars($favorite['slider3']) . '</p>';
            echo '<p><strong>料理のオリジナリティ:</strong> ' . htmlspecialchars($favorite['slider4']) . '</p>';
            echo '<p><strong>ドリンクの味:</strong> ' . htmlspecialchars($favorite['slider5']) . '</p>';
            echo '<p><strong>ドリンクの見栄え:</strong> ' . htmlspecialchars($favorite['slider6']) . '</p>';
            echo '<p><strong>ドリンクのオリジナリティ:</strong> ' . htmlspecialchars($favorite['slider7']) . '</p>';
            echo '<p><strong>店舗の外観:</strong> ' . htmlspecialchars($favorite['slider8']) . '</p>';
            echo '<p><strong>店内の雰囲気:</strong> ' . htmlspecialchars($favorite['slider9']) . '</p>';
            echo '<p><strong>スタッフの対応:</strong> ' . htmlspecialchars($favorite['slider10']) . '</p>';
            echo '<p><strong>最も「好き」だった点:</strong> ' . htmlspecialchars($favorite['free_text']) . '</p>';

            // 画像アップロードが成功した場合、画像を表示
            if ($favorite['image_path']) {
                echo "<p>投稿画像:</p>";
                echo "<img src='" . htmlspecialchars($favorite['image_path']) . "' alt='アップロードされた画像' style='max-width: 300px; max-height: 300px;'>";
            }
        } else {
            echo '<p>まだ投稿がありません。</p>';
        }
        ?>
    </div>
</body>
</html>