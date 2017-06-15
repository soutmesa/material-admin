<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            .btn {
                display: inline-block;
                padding: 9px 12px;
                padding-top: 7px;
                margin-bottom: 0;
                font-size: 14px;
                line-height: 20px;
                color: #5e5e5e;
                text-align: center;
                vertical-align: middle;
                cursor: pointer;
                background-color: #d1dade;
                -webkit-border-radius: 3px;
                -webkit-border-radius: 3px;
                -webkit-border-radius: 3px;
                background-image: none !important;
                border: none;
                text-shadow: none;
                box-shadow: none;
                transition: all 0.12s linear 0s !important;
                font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
                text-decoration: none;
            }
            .btn-primary {
                color: #fff;
                background-color: #428bca;
                border-color: #357ebd;
            }
            .btn-cons {
                margin-right: 5px;
                min-width: 120px;
                margin-bottom: 8px;
            }
            .btn-link, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
                background-color: transparent;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
                border-color: transparent;
            }
            .btn-link {
                color: #5e5e5e;
                background-color: transparent;
                border: none;
            }
            .btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
                border-color: transparent;
            }
            .btn-primary {
                text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
                -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);
                box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Opps! you couldn't access with this link</div>
                <a class="btn btn-primary" href="{{ url('') }}">Home</a>
            </div>
        </div>
    </body>
</html>
