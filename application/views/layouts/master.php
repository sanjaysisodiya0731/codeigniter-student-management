<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'My Website'; ?></title>
    <!-- Bootstrap CDN link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header section -->
        
        <!-- Content section -->
        <?php
        $this->load->view($content);
        ?>
        <!-- Footer section -->
        <div>
            <p><?php echo date('Y');?></p>
        </div> 
    </div>
</body>
</html>