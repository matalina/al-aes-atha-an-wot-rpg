<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>al'Aes Atha'an</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
      
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
      
    </head>
    <body>
        <div id="app">
            @include('layouts.menu')
            <div class="container is-fluid">
                <router-view></router-view>
            </div>
        </div>
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
