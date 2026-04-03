<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Panch Phoron Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="w-64 bg-white min-h-screen p-5 flex flex-col justify-between">
            <!-- added the nav items -->
            <ul class="space-y-4">
                <!-- added the dashboard tab -->
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center gap-3 border-2 border-red-500 text-red-500
                        rounded-lg px-4 py-3 font-semibold transition
                        hover:bg-red-500 hover:text-white group">
                        <svg class="w-5 h-5 transition group-hover:text-white"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 10l9-7 9 7v11H3z"/>
                        </svg>
                        Dashboard
                    </a>
                </li>

                <!-- added the menu tab -->
                <li>
                <a href="{{ route('admin.menu') }}"
                    class="flex items-center gap-3 border-2 border-red-500 text-red-500
                        rounded-lg px-4 py-3 font-semibold transition
                        hover:bg-red-500 hover:text-white group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    Menu
                </a>
            </li>

            <!-- added the orders tab -->
            <li>
                <a href="{{ route('admin.orders') }}"
                    class="flex items-center gap-3 border-2 border-red-500 text-red-500
                        rounded-lg px-4 py-3 font-semibold transition
                        hover:bg-red-500 hover:text-white group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 3h14l1 18H4L5 3z"/>
                    </svg>
                    Orders
                </a>
            </li>

            <!-- added the tables tab -->
            <li>
                <a href="{{ route('admin.tables') }}"
                    class="flex items-center gap-3 border-2 border-red-500 text-red-500
                        rounded-lg px-4 py-3 font-semibold transition
                        hover:bg-red-500 hover:text-white group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7"/>
                        <rect x="14" y="3" width="7" height="7"/>
                        <rect x="3" y="14" width="7" height="7"/>
                        <rect x="14" y="14" width="7" height="7"/>
                    </svg>
                    Tables
                </a>
            </li>

            <!-- added the bills tab -->
            <li>
                <a href="{{ route('admin.bills') }}"
                    class="flex items-center gap-3 border-2 border-red-500 text-red-500
                        rounded-lg px-4 py-3 font-semibold transition
                        hover:bg-red-500 hover:text-white group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 2h12v20l-3-2-3 2-3-2-3 2V2z"/>
                    </svg>
                    Bills
                </a>
            </li>

            <!-- added the promos tab -->
            <li>
                <a href="{{ route('admin.promos') }}"
                    class="flex items-center gap-3 border-2 border-red-500 text-red-500
                        rounded-lg px-4 py-3 font-semibold transition
                        hover:bg-red-500 hover:text-white group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 12l-8 8-8-8 8-8 8 8z"/>
                    </svg>
                    Promos
                </a>
            </li>
        </ul>

    <!-- added the logout tab -->
    <div>
        <a href="/logout"
            class="flex items-center gap-3 border-2 border-red-500 text-red-500
                rounded-lg px-4 py-3 font-semibold transition
                hover:bg-red-500 hover:text-white">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 16l4-4m0 0l-4-4m4 4H7"/>
                <path d="M3 21V3"/>
            </svg>
            Logout
        </a>
    </div>
</div>

    <!-- Main Content -->
    <div class="flex-1 p-6">

        <h2 class="text-2xl font-bold mb-6">Dashboard</h2>

        <!-- Cards -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">

            <div class="bg-white p-4 rounded shadow">
                <p>Today's Orders</p>
                <h2 class="text-xl font-bold">3</h2>
            </div>

            <div class="bg-white p-4 rounded shadow">
                <p>Revenue</p>
                <h2 class="text-xl font-bold">₹2420</h2>
            </div>

            <div class="bg-white p-4 rounded shadow">
                <p>Pending</p>
                <h2 class="text-xl font-bold">2</h2>
            </div>

            <div class="bg-white p-4 rounded shadow">
                <p>Tables</p>
                <h2 class="text-xl font-bold">3</h2>
            </div>

        </div>

        <!-- Orders Table -->
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-lg font-bold mb-4">Recent Orders</h3>

            <table class="w-full text-left">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Table</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>#1001</td>
                        <td>Table 2</td>
                        <td>₹1120</td>
                        <td class="text-blue-500">Preparing</td>
                    </tr>

                    <tr>
                        <td>#1002</td>
                        <td>Table 6</td>
                        <td>₹810</td>
                        <td class="text-yellow-500">Pending</td>
                    </tr>

                    <tr>
                        <td>#1003</td>
                        <td>Table 3</td>
                        <td>₹490</td>
                        <td class="text-green-500">Completed</td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>

</div>

</body>
</html>