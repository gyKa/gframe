<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/960.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/common.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/text.css" />
        
        <base href="<?php echo BASE_URL; ?>">
    </head>
    
    <body>
        <div class="container_12">
            <h1>Administration</h1>
            <?php $this->get_view(); ?>
        </div>
    </body>
</html>