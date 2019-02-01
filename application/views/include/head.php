<!DOCTYPE html>
<html lang= "en">

<head>

    <meta charset= "utf-8">
    <meta http-equiv= "X-UA-Compatible" content= "IE= edge">
    <meta name= "viewport" content= "width= device-width, initial-scale= 1">
    <meta name= "description" content= "">
    <meta name= "author" content= "">

    <title>Ticket Management</title>

    <!-- Bootstrap Core CSS -->
    <link href= "<?= base_url()  ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel= "stylesheet">

    <!-- MetisMenu CSS -->
    <link href= "<?= base_url()  ?>assets/vendor/metisMenu/metisMenu.min.css" rel= "stylesheet">

    <!-- Custom CSS -->
    <link href= "<?= base_url()  ?>assets/dist/css/styles.css" rel= "stylesheet">

    <!-- Morris Charts CSS -->
    <link href= "<?= base_url()  ?>assets/vendor/morrisjs/morris.css" rel= "stylesheet">

    <!-- Custom Fonts -->
    <link href= "<?= base_url()  ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel= "stylesheet" type= "text/css">

    
    <!-- DataTables CSS -->
    <link href="<?= base_url()  ?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?= base_url()  ?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src= "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src= "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        @media print{

            .trash a, .eye a, button.pull-left, a.pull-right, div.dataTables_filter, #dataTables_length{
                 display : none;
            }
        }
    </style>

</head>

<body>

    <div id= "wrapper">