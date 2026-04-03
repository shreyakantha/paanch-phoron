<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paanch Phoron</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="splash-screen" class="fixed inset-0 bg-white z-50 flex flex-col items-center justify-center px-4 overflow-hidden">
        <!-- added the logo -->
        <img src="/images/logo.png" 
            class="object-contain -mb-9 mx-auto"
            style="width: clamp(140px, 52vmin, 280px); height: clamp(140px, 52vmin, 280px);">

        <!-- added the text -->
        <h1 class="font-extrabold tracking-tight text-red-600 text-center mx-auto"
            style="font-size: clamp(1.4rem, 5vw, 3rem); white-space: nowrap;">
            Paanch Phoron
        </h1>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('splash-screen').style.opacity = '0';
            setTimeout(() => {
                sessionStorage.setItem('splashShown', 'true');
                window.location.href = "/welcome";
            }, 500);
        }, 2500);
    </script>
    <style>
        #splash-screen {
            transition: opacity 0.5s ease;
        }
</style>
</body>
</html>