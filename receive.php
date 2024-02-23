
<?php 

$paragraph = $_POST["paragraph"];
$badword  = $_POST["badword"];

$new_paragraph = str_replace($badword, ' ***', $paragraph);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Receive Paragraph</title>

        <!-- import bootstrap -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
        />

        <link rel="stylesheet" href="./styles/receive.css" />
    </head>
    <body>
        <div class="container">
            <h1 class="text-success mb-3">RESULT:</h1>
            <div class="row">
                <div class="col-6 text-center">
                    <h2 class="mb-3"> First Paragraph </h2>
                    <p class="mb-3">
                        <?= $paragraph ?>
                    </p>
                    <span><?php echo strlen($paragraph)?></span>
                </div>
                <div class="col-6 text-center">
                    <h2 class="mb-3"> Second Paragraph </h2>
                    <p class="mb-3">
                        <?= $new_paragraph ?>
                    </p>
                    <span><?php echo strlen($new_paragraph)?></span>
                </div>
            </div>
        </div> 
    </body>
</html>