<?php $current_page_name = isset($current_page_name) && $current_page_name ? ' – ' . $current_page_name : ''; ?>
<?php $description = isset($description) ? $description : ''; ?>
<?php $bodyclass = isset($bodyclass) ? $bodyclass : '';

?>
<!DOCTYPE html>
<html lang="en_US">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <meta name="author" content="IHA">
    <meta name="description" content="">
    <link rel="stylesheet" href="Prod/prod.main.css?v=<?php echo time(); ?>">
   
</head>

<body class="<?php echo $bodyclass; ?>">a