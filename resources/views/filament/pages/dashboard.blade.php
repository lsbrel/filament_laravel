<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card 1 -->
        <div class="p-6 rounded-lg shadow dark:bg-dark dark:text-white">
            <h2 class="text-lg font-bold">Welcome, {{ auth()->user()->name }}!</h2>
            <p>Here’s an overview of your platform.</p>
        </div>

        <!-- Card 2 -->
        <div class="p-6 rounded-lg shadow">
            <h2 class="text-lg font-bold">Quick Actions</h2>
            <ul class="list-disc ml-4">
                <li><a href="" class="text-blue-600">Manage Products</a>
                </li>
                <li><a href="" class="text-blue-600">View Orders</a></li>
            </ul>
        </div>
    </div>
</x-filament-panels::page>
