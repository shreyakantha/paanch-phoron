<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center bg-white overflow-hidden px-8 sm:px-6">
    <div class="w-full max-w-[320px] sm:max-w-md">
        <!-- added the heading text -->
        <h1 class="font-bold text-center text-red-600 mb-1"
            style="font-size: clamp(1.4rem, 5vh, 2rem);">
            Create an Account
        </h1>

        <!-- added the sub heading text -->
        <p class="text-center text-gray-400 mb-4"
            style="font-size: clamp(0.75rem, 2vh, 0.9rem);">
            Join our Paanch Phoron family
        </p>

        <form method="POST" action="/register">
            @csrf
            <!-- added the textbox to enter full name -->
            <div class="mb-2">
                <label class="block text-sm font-medium mb-1 text-gray-700">Full Name</label>
                <input id="name" name="name" type="text"
                    placeholder="enter your full name"
                    autocomplete="off"
                    value="{{ old('name') }}"
                    class="w-full px-4 pr-12 rounded-lg bg-white border
                        {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }}
                        focus:outline-none focus:ring-2 focus:ring-red-400"
                    style="padding-top: clamp(0.4rem, 1.5vh, 0.75rem); padding-bottom: clamp(0.4rem, 1.5vh, 0.75rem);">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- added the textbox to enter phone number -->
            <div class="mb-2">
                <label class="block text-sm font-medium mb-1 text-gray-700">Phone Number</label>
                <input id="phone" name="phone" type="tel"
                    placeholder="enter your phone number"
                    autocomplete="off"
                    value="{{ old('phone') }}"
                    class="w-full px-4 rounded-lg bg-white border
                        {{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }}
                        focus:outline-none focus:ring-2 focus:ring-red-400"
                    style="padding-top: clamp(0.4rem, 1.5vh, 0.75rem); padding-bottom: clamp(0.4rem, 1.5vh, 0.75rem);">
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- added the textbox to enter password -->
            <div class="mb-2">
                <label class="block text-sm font-medium mb-1 text-gray-700">Password</label>
                <div class="relative">
                    <input id="password" name="password" type="password"
                    placeholder="create a password"
                    autocomplete="new-password"
                    class="w-full px-4 pr-14 rounded-lg bg-white border
                        {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}
                        focus:outline-none focus:ring-2 focus:ring-red-400"
                    style="padding-top: clamp(0.4rem, 1.5vh, 0.75rem); padding-bottom: clamp(0.4rem, 1.5vh, 0.75rem);">

                    <button type="button" onclick="togglePassword('password', 'eye1')"
                        class="absolute right-0 top-0 h-full w-10 flex items-center justify-center">
                        <svg id="eye1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="#dc2626" viewBox="0 0 24 24">
                            <path d="M12 5c-7.63 0-9.93 6.62-9.95 6.68-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68s9.93-6.62 9.95-6.68c.07-.21.07-.43 0-.63C21.93 11.61 19.63 5 12 5m0 10c-1.64 0-3-1.36-3-3s1.36-3 3-3c.09 0 .17.02.26.03-.16.29-.26.62-.26.97 0 1.1.9 2 2 2 .36 0 .68-.1.97-.26 0 .09.03.17.03.26 0 1.64-1.36 3-3 3"/>
                        </svg>
                    </button>
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- added the textbox to Confirm Password -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 text-gray-700">Confirm Password</label>
                <div class="relative">
                    <input id="confirm" name="password_confirmation" type="password"
                        placeholder="confirm your password"
                        autocomplete="new-password"
                        class="w-full px-4 pr-12 rounded-lg bg-white border
                            {{ $errors->has('password_confirmation') ? 'border-red-500' : 'border-gray-300' }}
                            focus:outline-none focus:ring-2 focus:ring-red-400"
                        style="padding-top: clamp(0.4rem, 1.5vh, 0.75rem); padding-bottom: clamp(0.4rem, 1.5vh, 0.75rem);">

                    <button type="button" onclick="togglePassword('confirm', 'eye2')"
                        class="absolute right-0 top-0 h-full w-10 flex items-center justify-center">
                        <svg id="eye2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="#dc2626" viewBox="0 0 24 24">
                            <path d="M12 5c-7.63 0-9.93 6.62-9.95 6.68-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68s9.93-6.62 9.95-6.68c.07-.21.07-.43 0-.63C21.93 11.61 19.63 5 12 5m0 10c-1.64 0-3-1.36-3-3s1.36-3 3-3c.09 0 .17.02.26.03-.16.29-.26.62-.26.97 0 1.1.9 2 2 2 .36 0 .68-.1.97-.26 0 .09.03.17.03.26 0 1.64-1.36 3-3 3"/>
                        </svg>
                    </button>
                </div>
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- added the register button -->
            <button type="submit"
                class="w-full bg-red-600 text-white rounded-lg font-semibold
                    shadow-md hover:bg-red-700 active:scale-95 transition"
                style="padding-top: clamp(0.5rem, 1.5vh, 0.75rem); padding-bottom: clamp(0.5rem, 1.5vh, 0.75rem);">
                Create Account
            </button>
        </form>

        <!-- added the login link -->
        <p class="text-center text-gray-600 mt-3"
            style="font-size: clamp(0.75rem, 2vh, 0.9rem);">
            Already have an account?
            <a href="/login" class="text-red-500 font-semibold hover:underline">Login</a>
        </p>
    </div>

    <script>
        window.addEventListener('load', () => {
            ['name', 'phone', 'password', 'confirm'].forEach(id => {
                document.getElementById(id).value = '';
            });
        });

        function togglePassword(inputId, eyeId) {
            const input = document.getElementById(inputId);
            const eye = document.getElementById(eyeId);
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';

            eye.innerHTML = isPassword
            // eye CLOSE icon (password is now visible)
                ? `<path d="M12 5c-1.84 0-3.35.39-4.62.97L3.7 2.29 2.29 3.7l3.32 3.32C3 8.97 2.07 11.64 2.05 11.68c-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68 1.84 0 3.35-.39 4.62-.97l3.68 3.68 1.41-1.41-3.32-3.32c2.61-1.95 3.54-4.62 3.56-4.66.07-.21.07-.43 0-.63C21.93 11.61 19.63 5 12 5m-7.93 7c.1-.24.27-.59.52-.99l5.87 5.87c-4.21-.65-5.94-3.84-6.39-4.88m9.25 4.91L5.84 9.43c.34-.34.74-.67 1.19-.98l8.05 8.05c-.53.19-1.12.33-1.76.41m3.65-1.35-1.53-1.53c.61-1.03.71-2.28.31-3.38-.18.21-.45.36-.75.36-.55 0-1-.45-1-1 0-.44.29-.81.69-.94a3.98 3.98 0 0 0-4.71-.5L8.92 7.51c.88-.31 1.9-.5 3.08-.5 5.35 0 7.42 3.85 7.93 5-.3.69-1.17 2.34-2.96 3.56Z"/>`
            // eye OPEN icon (password is hidden)
            : `<path d="M12 5c-7.63 0-9.93 6.62-9.95 6.68-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68s9.93-6.62 9.95-6.68c.07-.21.07-.43 0-.63C21.93 11.61 19.63 5 12 5m0 10c-1.64 0-3-1.36-3-3s1.36-3 3-3c.09 0 .17.02.26.03-.16.29-.26.62-.26.97 0 1.1.9 2 2 2 .36 0 .68-.1.97-.26 0 .09.03.17.03.26 0 1.64-1.36 3-3 3"/>`;
        }
    </script>
</body>
</html>