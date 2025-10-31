<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: kadai05_1.php");
  exit;
}


$result = [
  "status"  => true,
  "message" => null,
  "result"  => null,
];



if (!isset($_FILES["upfile"])) {
  $result["status"] = false;
  $result["message"] = "ファイルのアップロードに失敗しました";
} else {

  if (isset($result["status"])) {
    $upFile = $_FILES["upfile"];
    $moveFilePath = __DIR__ . "/asset/storage/{$upFile["name"]}";
    //condition File 
    if (!preg_match('/image/', $upFile["type"])) {
      $result["status"] = false;
      $result["message"] = "画像ファイル以外はアップロードできません";
    } else {

      //Save File
      if (move_uploaded_file($upFile["tmp_name"], $moveFilePath)) {
        $result["message"] = "ファイルのアップロードに成功しました";
        $result["result"] =
          "http://localhost/php1/asset/storage/{$upFile["name"]}";
      } else {
        $result["status"] = false;
        $result["message"] = "ファイルのアップロードに失敗しました";
      }
    }
  }
}






// print_r($file);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php1 - kadai05_2</title>
  <!-- TODO:bootstrapCSS読み込み -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>
  <div class="w-100">

    <!-- ▼▼ヘッダー▼▼--------------------------------- -->
    <header class="bg-info">
      <div class="text-light ms-3 pt-4 pb-3">
        <h1 class="h6">サーバーサイドスクリプト演習１</h1>
        <h2 class="pt-3">画像のアップロード結果</h2>
      </div><!--/.container-->
    </header>
    <!-- ▲▲ヘッダー▲▲--------------------------------- -->

    <!-- ▼▼メイン▼▼----------------------------------- -->
    <main>

      <div class="form-control">

        <h3 class="border-bottom border-3 border-info mb-4 mt-2 pb-2">アップロード結果</h3>

        <div id="frame" class="p-5 border-info rounded" style="border:1px dashed;">

          <!-- ファイル結果表示箇所 -->
          <div class="text-center">
            <?php if ($result["status"]) : ?>
              <figure class="d-inline-block me-1 mt-1 mb-5">
                <img class="img-fluid" src="<?= $result["result"] ?>">
              </figure>
            <?php else : ?>
              <p class="text-danger"><?= $result["message"] ?></p>
            <?php endif ?>

          </div>
        </div>

        <!-- TODO:戻るボタン押下で入力画面に戻る -->
        <div class="p-5 d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-secondary btn-lg" href="">戻る</a>
        </div>

      </div>
    </main>

  </div><!--/.w100-->

</body>

</html>