<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-white px-6">
    <div class="w-full max-w-md">
        <!-- added the heading -->
        <h1 class="text-2xl sm:text-3xl font-bold text-center text-red-600 mb-6">
            Panch Phoron
        </h1>

        <form method="POST" action="/login">
            @csrf
            <!-- added the text box to enter phone number -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 text-gray-700">Phone Number</label>
                <input id="phone" name="phone" type="text"
                    placeholder="Enter your phone number"
                    autocomplete="off"
                    value="{{ old('phone') }}"
                    class="w-full px-4 py-2 rounded-lg bg-white border
                        {{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }}
                        focus:outline-none focus:ring-2 focus:ring-red-400">
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- added the text box to enter password -->
                <div class="mb-3">
                    <label class="block text-sm font-medium mb-1 text-gray-700">Password</label>
                    <div class="relative">
                        <input id="password" name="password" type="password"
                            placeholder="Enter your password"
                            autocomplete="new-password"
                            class="w-full px-4 pr-10 py-2 rounded-lg bg-white border
                                {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}
                                focus:outline-none focus:ring-2 focus:ring-red-400">
                            <button type="button" onclick="togglePassword('password', 'eye1')"
                                class="absolute right-0 top-0 h-full w-10 flex items-center justify-center">
                                <svg id="eye1" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    fill="#dc2626" viewBox="0 0 24 24">
                                    <path d="M12 5c-7.63 0-9.93 6.62-9.95 6.68-.07.21-.07.43 0 .63.02.07 2.32 6.68 9.95 6.68s9.93-6.62 9.95-6.68c.07-.21.07-.43 0-.63C21.93 11.61 19.63 5 12 5m0 10c-1.64 0-3-1.36-3-3s1.36-3 3-3c.09 0 .17.02.26.03-.16.29-.26.62-.26.97 0 1.1.9 2 2 2 .36 0 .68-.1.97-.26 0 .09.03.17.03.26 0 1.64-1.36 3-3 3"/>
                                </svg>
                            </button>
                        </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

        <!-- added the opions -->
        <div class="flex items-center justify-between text-sm mb-4">
            <label class="flex items-center gap-1.5 text-gray-600">
                <input type="checkbox" class="accent-red-500">
                Remember me
            </label>
            <a href="#" class="text-red-500 font-medium hover:underline">Forgot password?</a>
        </div>

        <!-- added the login button -->
        <button class="w-full bg-red-600 text-white py-2 rounded-lg
            font-semibold shadow-md
            hover:bg-red-700 active:scale-95 transition">
            Login
        </button>

        <!-- added the register button -->
        <p class="text-center text-sm text-gray-600 mt-4">
            New here?
            <a href="/register" class="text-red-500 font-semibold">Register</a>
        </p>

        <!-- added the divider -->
        <div class="flex items-center my-3">
            <div class="grow h-px bg-gray-300"></div>
            <span class="px-3 text-gray-400 text-sm">or</span>
            <div class="grow h-px bg-gray-300"></div>
        </div>

        <!-- added the admin login button -->
        <button class="w-full border-2 border-red-500 text-red-500 py-2 rounded-lg
            font-semibold transition duration-300
            hover:bg-red-500 hover:text-white">
            Admin Login  →
        </button>
    </div>
    <script>
        // Force clear autofill on load
        window.addEventListener('load', () => {
            ['phone', 'password'].forEach(id => {
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