<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>Members</title>
            <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700;800&display=swap" rel="stylesheet">
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                theme: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        },
                    extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                    }
                }
                }
            </script>
        </head>
    <body class="font-sans">
        @yield('content')
    </body>
</html>
