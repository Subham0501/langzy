<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-langzy-dark">Users</h1>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.users.create') }}" class="rounded-full bg-langzy-blue text-white px-5 py-2 font-semibold">Add User</a>
                <a href="{{ route('admin.counsellors.index') }}" class="text-langzy-blue">Back to Counsellors</a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Role</th>
                        <th class="px-6 py-3">Joined</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $u)
                        <tr class="border-t">
                            <td class="px-6 py-3">{{ $u->name }}</td>
                            <td class="px-6 py-3">{{ $u->email }}</td>
                            <td class="px-6 py-3">{{ $u->role ?? 'u' }}</td>
                            <td class="px-6 py-3">{{ $u->created_at?->format('Y-m-d') }}</td>
                        </tr>
                    @empty
                        <tr><td class="px-6 py-6 text-center text-gray-500" colspan="4">No users found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">{{ $users->links() }}</div>
    </div>
</body>
</html>


