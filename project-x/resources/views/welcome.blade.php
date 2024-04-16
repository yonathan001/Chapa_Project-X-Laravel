<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project-X</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
       

        <!-- Styles -->
        <style>
body {
    background-color: #232323; /* Change this to your desired dark color */
    color: #fff; /* Change text color to white or light color for better visibility */
    font-size: 34px;
    text-align: center
}
          
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            
                        </div>
                      
                    </header>

                    <main class="mt-1">
                        
                        
                    </main>
                    <p>{{ $what }} - {{$when}} </P>

                   
                </div>
            </div>
        </div>
    </body>
</html>
