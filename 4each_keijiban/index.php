<!DOCTYPE html>
<html lang="ja">

<head>
　<meta charset="UTF-8">
　<title>4eachblog 掲示板</title>

　<link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>
    
    <?php
                    
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $stmt = $pdo->query("select * from 4each_keijiban");

                    
    ?>

    <header>
        
        <div class="gazo">
            <img src="4eachblog_logo.jpg" class="logo">
        </div>
        
        <ul class="list1">
            
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
            
    
        </ul>
    
    </header>    
    
    <main>
        
        <div class="main-container">
            
            <div class="left">
                
                <h1>プログラミングに役立つ掲示板</h1>
                
                <form method="post" action="insert.php">
                
                    <h3>入力フォーム</h3>
                    
                    <p>ハンドルネーム</p>
                    
                    <input type="text" name="handlename" size="30" class="nyuryoku">
                    
                    <p>タイトル</p>
                    
                    <input type="text" name="title" size="30" class="nyuryoku">
                    
                    <p>コメント</p>
                    <textarea name="comments" rows="5" cols="50" class="nyuryoku"></textarea>
                    
                    <br>
                    
                    <input type="submit" value="投稿する" class="button">
                    
                </form>    
                
               <?php
                
                while($row = $stmt->fetch()){
                
                    echo "<div class='toukou'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";

                    echo $row['comments'];

                    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";




                    echo "</div>";
                    echo "</div>";
                }
                ?>
                
                  
                
            </div>
            
            <div class="right">
                
                <h4>人気の記事</h4>
                <ul class="list2">
                    
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタtop5</li>
                    <li>HTMLの基礎</li>
                    
                </ul>    
                
                <h4>オススメリンク</h4>
                <ul class="list2">
                    
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </ul>
                
                <h4>カテゴリ</h4>
                <ul class="list2">
                    
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                    
                </ul>    
            </div>    
            
        </div>    
        
    </main>
    
    <footer>
        
        copyright © internous | 4each blog the which provides A to Z about programming.
        
    </footer>    

</body>

</html>