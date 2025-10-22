<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-langzy-dark">Add User</h1>
            <a href="{{ route('admin.users.index') }}" class="text-langzy-blue">Back</a>
        </div>

        <form method="POST" action="{{ route('admin.users.store') }}" class="bg-white rounded-xl shadow-lg p-6 space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1">Name</label>
                <input name="name" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Password</label>
                <input type="password" name="password" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Role</label>
                <select name="role" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
                    <option value="u">User</option>
                    <option value="a">Admin</option>
                </select>
            </div>
            <button type="submit" class="w-full rounded-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-3 font-semibold shadow-md hover:shadow-lg transition-all">Save User</button>
        </form>
    </div>
</body>
</html>


