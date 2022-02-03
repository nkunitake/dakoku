<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勤怠打刻くん | 入力画面</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
</head>

<body>
    <form action="create.php" method="POST">
        <div class="main-wrapper">
            <div class="title">
                勤怠打刻くん
            </div>
            <div class="item">
                <p id="item"></p>
            </div>
            <div class="workstyle-wrapper">
                <div class="title-wrapper">オフィス
                </div>
                <div class="btn-wrapper">
                    <button type='submit' name='status' value='出勤,オフィス' class="btn"><span>出勤</span></button>
                    <button type='submit' name='status' value='退勤,オフィス' class="btn"><span>退勤</span></button>
                </div>
            </div>
            <div class="workstyle-wrapper">
                <div class="title-wrapper">在宅勤務
                </div>
                <div class="btn-wrapper">
                    <button type='submit' name='status' value='出勤,在宅' class="btn"><span>出勤</span></button>
                    <button type='submit' name='status' value='退勤,在宅' class="btn"><span>退勤</span></button>
                </div>
            </div>
            <div class="workstyle-wrapper">
                <div class="title-wrapper">出張
                </div>
                <div class="btn-wrapper">
                    <button type='submit' name='status' value='出勤,出張' class="btn"><span>出勤</span></button>
                    <button type='submit' name='status' value='退勤,出張' class="btn"><span>退勤</span></button>
                </div>
            </div>
            <section>
                <a href="read.php" class="btn-toread">一覧画面</a>
            </section>
        </div>
    </form>

    <script>
        const item = document.getElementById('item');

        function time() {
            let today = new Date();
            item.innerHTML = today.toLocaleString("ja");
            window.requestAnimationFrame(time);
        };

        time();
    </script>
</body>

</html>