<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Ajouter un Article</title>

    <!-- Icons font CSS-->
    <link href="/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets2/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Ajouter un article</h2>
                    <form method="POST" action="{{route('posts.store')}}">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Titre de l'article" name="title" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Description" name="content">
                        </div>
                        
                        <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/assets2vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/assets2/vendor/select2/select2.min.js"></script>
    <script src="/assets2vendor/datepicker/moment.min.js"></script>
    <script src="/assets2vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/assets2/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->