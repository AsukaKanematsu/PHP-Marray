<?php
$tweets = [
    [
        'id' => 1,
        'userName' => 'さとう',
        'tweets' => '腹減った',
        'created_at' => '2022/9/22',
    ],
    [
        'id' => 2,
        'userName' => 'さとう',
        'tweets' => '食べたい',
        'created_at' => '2022/10/23',
    ],
    [
        'id' => 3,
        'userName' => 'すずき',
        'tweets' => '食べたい',
        'created_at' => '2022/9/24',
    ],
    [
        'id' => 4,
        'userName' => 'さとう',
        'tweets' => '食べたい',
        'created_at' => '2022/10/25',
    ],
    [
        'id' => 5,
        'userName' => 'すずき',
        'tweets' => '食べたい',
        'created_at' => '2022/10/26',
    ],
    [
        'id' => 6,
        'userName' => 'さとう',
        'tweets' => '食べたい',
        'created_at' => '2022/9/27',
    ],
    [
        'id' => 7,
        'userName' => 'すずき',
        'tweets' => '腹減った',
        'created_at' => '2022/10/28',
    ],

];

$tweetSatou = [];

foreach($tweets as $tweet) {
    if ($tweet["userName"] == "さとう") {
        $tweetSatou [] = $tweet;
    }
    
    // echo "<pre>";
    // var_dump($tweet);
    // echo "<pre>";
    //echo $tweet["userName"];
    //echo "<pre>";
    //$date = explode("/", $tweet['created_at']);
    // $month = $date[1];
    // if ($month == "9") {
    //     $tweetSep[] = $tweet;
    // }
    // echo "<pre>";
    // var_dump($tweetSep);
    // echo "<pre>";
    // if ($tweet["tweets"] == "食べたい") {
    //     $tweetTabetai[] = $tweet;
    // }
}
// echo "<pre>";
// var_dump($tweetTabetai);
// echo "<pre>";

?>

<!-- 以下はHTMLのコードになります -->
<!-- 今は「こんな処理をしているんだな〜」とざっくり見ていただけたらと思います！ -->
<!DOCTYPE html>
<html lang="ja">

<!-- headタグの中の処理で、ブラウザのタブに表示されるタイトルを設定しています -->
    <head>
        <meta charset="UTF-8">
        <title>投稿ページ</title>
    </head>
    <!-- bodyタグの中の処理で、ブラウザ上に表示させる「タイトル」や、別の画面に遷移する「ボタン」を作成しています -->
    <body>
        <h1>投稿ページ</h1>
        <a href="top.php">
            <button type="button">綺麗なデザインでやりたい方はこちら</button>
        </a>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ユーザー名</th>
                        <th>ツイート</th>
                        <th>作成日時</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tweetSatou as $tweet): ?>
                        <tr>
                            <td><?php echo $tweet['userName'] ;?></td>
                            <td><?php echo $tweet['tweets']; ?></td>
                            <td><?php echo $tweet['created_at']; ?></td>
                        </tr>
                        
                    <?php endforeach; ?>
                  
                </tbody>
            </table>
        </div>
    </body>
</html>