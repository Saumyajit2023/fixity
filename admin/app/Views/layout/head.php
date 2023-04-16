<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="">
    <!-- Page Title  -->
    <title>Fixity</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?php echo base_url('admin/assets/css/dashlite.css?ver=2.9.0');?>">
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url('admin/assets/css/theme.css?ver=2.9.0');?>">
    <?php 
            if(isset($css))
            {
                 foreach ($css as $value) 
                 {
                    echo '<link rel="stylesheet" href="'.base_url($value).'"/>';
                    echo "\n";
                 }
            }
    ?>
</head>
<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">