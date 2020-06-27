<!doctype html>

<?php $this->beginPage(); ?>

<html lang="en">

    <head>
        <?php $this->head(); ?>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Video School</title>
    </head>

    <body>
        <?php $this->beginBody(); ?>
        <?php
            \yii\bootstrap\NavBar::begin([
                'brandLabel' => 'TWYW',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top'
                ]
            ]);

            \yii\bootstrap\NavBar::end();
        ?>
        <div class="container" style="margin-top: 60px">
            <?= $content ?>
        </div>

        <?php $this->endBody(); ?>

    </body>

</html>

<?php $this->endPage(); ?>