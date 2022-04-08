<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petz BD</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    img.slider-img {
        height: 400px !important
    }

    .custom-product {
        height: 600px;
    }

    .slider-text {
        background-color: #35443585 !important;
    }

    .trending-image {
        height: 100px;
    }

    .trending-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 30px;
    }

    .detail-img {
        height: 200px;
    }

    .search-box {
        width: 500px !important
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .footer-basic-centered {
        background-color: #292c2f;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: center;
        font: normal 18px sans-serif;

        padding: 45px;
        margin-top: 80px;
    }

    .footer-basic-centered .footer-company-motto {
        color: #8d9093;
        font-size: 24px;
        margin: 0;
    }

    .footer-basic-centered .footer-company-name {
        color: #8f9296;
        font-size: 14px;
        margin: 0;
    }

    .footer-basic-centered .footer-links {
        list-style: none;
        font-weight: bold;
        color: #ffffff;
        padding: 35px 0 23px;
        margin: 0;
    }

    .footer-basic-centered .footer-links a {
        display: inline-block;
        text-decoration: none;
        color: inherit;
    }

    /* If you don't want the footer to be responsive, remove these media queries */

    @media (max-width: 600px) {

        .footer-basic-centered {
            padding: 35px;
        }

        .footer-basic-centered .footer-company-motto {
            font-size: 18px;
        }

        .footer-basic-centered .footer-company-name {
            font-size: 12px;
        }

        .footer-basic-centered .footer-links {
            font-size: 14px;
            padding: 25px 0 20px;
        }

        .footer-basic-centered .footer-links a {
            line-height: 1.8;
        }
    }
</style>

</html>