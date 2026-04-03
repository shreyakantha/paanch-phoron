<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Paanch Phoron</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet">
</head>
<body class="font-[Inter] m-0 p-0 overflow-hidden">
    <div class="flex flex-col w-screen h-screen">
        <!-- added the elements of the white section at the top -->
        <div class="bg-white flex flex-col items-center justify-center flex-1">
            <!-- added the logo -->
            <img src="/images/logo.png"
                class="object-contain -mb-9"
                style="width: clamp(120px, 30vh, 200px); height: clamp(120px, 30vh, 200px);">

            <!-- added the name -->
            <h2 class="font-extrabold tracking-tight text-red-600 text-center"
                style="font-size: clamp(1.4rem, 4vh, 2.6rem); white-space: nowrap;">
                Paanch Phoron
            </h2>
        </div>

        <!-- added the elements of the red section at the bottom -->
        <div class="bg-red-500 rounded-t-[40px] flex flex-col justify-between"
            style="height: 40vh; padding: clamp(1.5rem, 4vh, 3rem) clamp(1.5rem, 5vw, 4rem);">
            <!-- added the welcome message -->
            <div>
                <h1 class="font-extrabold text-white tracking-tight"
                    style="font-size: clamp(1.6rem, 5vh, 3rem);">
                    Welcome
                </h1>

                <!-- added the about section -->
                <p class="text-red-100 mt-2 leading-relaxed"
                    style="font-size: clamp(0.7rem, 2vh, 1.1rem);">
                    Discover Authentic Bengali flavors, crafted with heritage, and plated with heart.
                </p>
            </div>

            <!-- added the button which redirected users to the login page -->
            <div class="flex justify-end">
                <a href="/login" class="flex items-center gap-3 text-white font-semibold"
                    style="font-size: clamp(1rem, 2.5vh, 1.3rem);">
                    Continue
                    <span class="flex items-center justify-center rounded-full bg-white text-red-500 font-bold shadow"
                            style="width: clamp(2.5rem, 6vh, 3.5rem); height: clamp(2.5rem, 6vh, 3.5rem); font-size: clamp(1rem, 2.5vh, 1.5rem);">
                            →
                    </span>
                </a>
            </div>
        </div>
    </div>
    <script>
    // // check if we arrived here properly from splash
    // if (!sessionStorage.getItem('splashShown')) {
    //     window.location.href = '/';
    // }
    // // Immediately clear the flag so any refresh sends back to splash
    // sessionStorage.removeItem('splashShown');
</script>
</body>
</html>