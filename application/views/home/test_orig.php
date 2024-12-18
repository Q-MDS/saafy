<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive CSS Grid</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/normalize.css">
    <style>
        .containerx {
            display: grid;
            grid-template-columns: minmax(200px, 1fr) repeat(5, 140px); /* 4 columns by default */
            gap: 10px;
            width: 100%;
            height: 100vh;
        }

        .panel {
            background-color: #e5e5e5;
            padding: 20px;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        @media (max-width: 945px) {
            .containerx {
                grid-template-columns: repeat(1, 1fr); /* 2 columns for medium screens */
            }
        }

        @media (max-width: 480px) {
            .containerx {
                grid-template-columns: 1fr; /* 1 column for small screens */
            }
        }
    </style>
</head>
<body>
    <div class="containerx">
        <div class="panel"><img src="<?php echo base_url(); ?>res/images/logo_top.svg" alt="Responsive image"></div>
        <div class="panel">How it works</div>
        <div class="panel">About Us</div>
        <div class="panel">Contact Us</div>
        <div class="panel">Login</div>
        <div class="panel">Become a Pro</div>
    </div>
</body>
</html>
