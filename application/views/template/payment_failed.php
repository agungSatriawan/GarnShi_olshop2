<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,700,600);

        .container {
            padding: 20px;
        }

        body {
            background-color: #f6f4f4;
            font-family: "Raleway", sans-serif;
        }

        .teal {
            background-color: #ffc952 !important;
            color: #444444 !important;
        }

        a {
            color: #47b8e0 !important;
        }

        .message {
            text-align: left;
        }

        .price1 {
            font-size: 40px;
            font-weight: 200;
            display: block;
            text-align: center;
        }

        .ui.message p {
            margin: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="ui middle aligned center aligned grid">
            <div class="ui eight wide column">

                <form class="ui large form">

                    <div class="ui icon negative message">
                        <i class="warning icon"></i>
                        <div class="content">
                            <div class="header">
                                Oops! Something went wrong.
                            </div>
                            <p>While trying to reserve money from your account</p>
                        </div>

                    </div>
                    <a href="<?= base_url('home') ?>" class="btn btn-primary">Back To Home</a>
                    <!-- <span class="ui large teal submit fluid button">Try again</span> -->

                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>

</html>