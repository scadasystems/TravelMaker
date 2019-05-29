<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
            include('simple_html_dom.php');
            $html = file_get_html('https://www.tripadvisor.co.kr/TravelersChoice-Hotels-cRomance');
            echo $html -> find('.mainName', 0) -> plaintext;
    ?>
</body>
</html>
