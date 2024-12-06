<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div id="warpper">
        <div id="header">
            <h1>Header</h1>
        </div>
        <div id="wp-content">
            <div id="content">
                @yield('content')
            </div>
            <div id="sideber">
                @section('sidebar')
                    <p>Khoi search</p>
                @show
            </div>
        </div>
        <div id="foorter">
            Footer
        </div>
    </div>
</body>
</html>