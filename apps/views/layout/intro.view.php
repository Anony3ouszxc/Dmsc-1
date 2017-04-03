<!DOCTYPE html>
<html>
    <head>

        <meta name="keywords" content="กรมวิทยาศาสตร์การแพทย์">
        <meta name="description" content="กรมวิทยาศาสตร์การแพทย์ กระทรวงสาธารณสุข">
        <link rel="icon" href="images/favicon.ico">
        <title>
        <?php
        if(!$this->title){
          echo "กรมวิทยาศาสตร์การแพทย์ Department of Medical Sciences";
        }else {
          echo  $this->title;
        }
        ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- main style -->
        <!-- for ios 7 style, multi-resolution icon of 152x152 -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
        <link rel="apple-touch-icon" href="<?php echo $this->data['appLogo']?>">
        <meta name="apple-mobile-web-app-title" content="Flatkit">
        <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="<?php echo $this->data['appLogo']?>">
    </head>
    <body>
        <?php echo $yield;?>
    </body>
</html>
