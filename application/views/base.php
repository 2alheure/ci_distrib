<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= toAbsolute($this->assets->img('favicon')) ?>" type="image/png">
    <link rel="stylesheet" href="<?= toAbsolute($this->assets->css('bootstrap')) ?>">

    <title><?= $title ?></title>
    
    <?php     
        if (isset($data['js']['header']['remote'])) {
            foreach ($data['js']['header']['remote'] as $js) {
                echo '<script src="'.$js.'"></script>'.PHP_EOL;
            }
        }

        if (isset($data['js']['header']['inner']))
            echo '<script>'.PHP_EOL.$data['js']['header']['inner'].PHP_EOL.'</script>'.PHP_EOL;

        if (isset($data['css']['remote'])) {
            foreach ($data['css']['remote'] as $css) {
                echo '<link rel="stylesheet" href="'.$css.'">'.PHP_EOL;
            }
        }

        if (isset($data['css']['inner']))
            echo '<style>'.PHP_EOL.$data['css']['inner'].PHP_EOL.'</style>'.PHP_EOL;
    ?>
</head>
<body>
    <div class="container">
        <?php if (isset($layout)) {
                include $layout;
            } else {
                if (isset($data['html']['header'])) 
                    echo $data['html']['header'].PHP_EOL;
    
                if (isset($data['html']['blocs'])) {
                    foreach ($data['html']['blocs'] as $bloc) {
                        echo $bloc.PHP_EOL;
                    }
                }
                
                if (isset($data['html']['footer'])) 
                    echo $data['html']['footer'].PHP_EOL;
            }
                
            if (isset($data['js']['footer']['remote'])) {
                foreach ($data['js']['footer']['remote'] as $js) {
                    echo '<script src="'.$js.'"></script>'.PHP_EOL;
                }
            }

            if (isset($data['js']['footer']['inner']))
                echo '<script>'.PHP_EOL.$data['js']['footer']['inner'].PHP_EOL.'</script>'.PHP_EOL;

        ?>
    </div>
</body>
</html>