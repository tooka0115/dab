<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour =  (int)date("H");
    
    function greeting($hour){
        $result="";
        
        if(6<=$hour &&$hour<12){
            $result="おはよう";
        }
        elseif(12<=$hour && $hour<18){
            $result="こんにちは";
        }
        else{
            $result="こんばんは";
        }
        
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label>名前:<input type="text" name="ttt"</label><br>
            <label>年齢:<input type="age" name="age"</label>
            <input type="submit" Value="送信">
        </form>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <p><?php print greeting($now_hour); ?>、<?php print $_POST['ttt'];?>(<?php print ($_POST['age']);?>歳)さん</p>

    </body>
</html>