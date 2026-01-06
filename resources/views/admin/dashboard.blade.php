<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Langzy</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('Group 36.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('Group 36.png') }}">
    
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-langzy-dark">Dashboard</h1>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.counsellors.index') }}" class="px-4 py-2 rounded-lg bg-white border">Counsellors</a>
                <a href="{{ route('admin.teachers.index') }}" class="px-4 py-2 rounded-lg bg-white border">Teachers</a>
                <a href="{{ route('admin.users.index') }}" class="px-4 py-2 rounded-lg bg-white border">Users</a>
                <a href="{{ route('admin.grammar.categories') }}" class="px-4 py-2 rounded-lg bg-white border">Grammar & Vocab</a>
                <a href="{{ route('admin.information.index') }}" class="px-4 py-2 rounded-lg bg-white border">Information</a>
                <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="px-4 py-2 rounded-lg bg-gradient-to-r from-langzy-blue to-blue-600 text-white">Logout</button></form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Total Users</div>
                <div class="text-3xl font-extrabold">{{ $stats['users'] }}</div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Counsellors</div>
                <div class="text-3xl font-extrabold">{{ $stats['counsellors'] }}</div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Active Counsellors</div>
                <div class="text-3xl font-extrabold">{{ $stats['active_counsellors'] }}</div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Grammar Categories</div>
                <div class="text-3xl font-extrabold">{{ $stats['grammar_categories'] }}</div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Subcategories</div>
                <div class="text-3xl font-extrabold">{{ $stats['grammar_subcategories'] }}</div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Total Contents</div>
                <div class="text-3xl font-extrabold">{{ $stats['grammar_contents'] }}</div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Active Contents</div>
                <div class="text-3xl font-extrabold">{{ $stats['active_contents'] }}</div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Teachers</div>
                <div class="text-3xl font-extrabold">{{ $stats['teachers'] }}</div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="text-sm text-langzy-gray">Active Teachers</div>
                <div class="text-3xl font-extrabold">{{ $stats['active_teachers'] }}</div>
            </div>
        </div>

        <div class="mt-10 bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Quick Actions</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('admin.counsellors.create') }}" class="rounded-full bg-langzy-blue text-white px-6 py-3 font-semibold">Add Counsellor</a>
                <a href="{{ route('admin.teachers.create') }}" class="rounded-full bg-langzy-blue text-white px-6 py-3 font-semibold">Add Teacher</a>
                <a href="{{ route('admin.counsellors.index') }}" class="rounded-full border px-6 py-3">Manage Counsellors</a>
                <a href="{{ route('admin.teachers.index') }}" class="rounded-full border px-6 py-3">Manage Teachers</a>
                <a href="{{ route('admin.users.index') }}" class="rounded-full border px-6 py-3">View Users</a>
                <a href="{{ route('admin.grammar.categories') }}" class="rounded-full border px-6 py-3">Manage Categories</a>
                <a href="{{ route('admin.grammar.subcategories') }}" class="rounded-full border px-6 py-3">Manage Subcategories</a>
                <a href="{{ route('admin.grammar.contents.index') }}" class="rounded-full border px-6 py-3">Manage Contents</a>
                <a href="{{ route('admin.information.create') }}" class="rounded-full bg-green-500 text-white px-6 py-3 font-semibold">Add Information</a>
                <a href="{{ route('admin.information.index') }}" class="rounded-full border px-6 py-3">Manage Information</a>
            </div>
        </div>
    </div>
</body>
</html>


