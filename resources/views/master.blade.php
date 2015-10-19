<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                width:80%;
                margin:auto;
            }

            .content {
                text-align: center;
                min-height: 500px;
            }

            .title {
                font-size: 96px;
            }
            
            .lyrics {
                font-size: 26px;
            }            
            
            .header
            {
                height:200px;
            }
            
            .footer
            {
                margin-top:50px;
                height:200px;
                font-family:fantasy;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header"><h2> Lyrics website </h2><div class="menu">@yield('menu')</div></div>
            <div class="content">
                <div class="title">
                    @yield('content')
                </div>
                <div class="lyrics">
                    @yield('content2')
                </div>                
            </div>
            <div class="footer">
                @yield('aboutLink')
                <div style="margin-top:15px">&copy; 2015 DeepHouseMix</div>
            </div>
        </div>
    </body>
</html>


