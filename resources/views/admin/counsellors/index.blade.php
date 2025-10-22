<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counsellors - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-langzy-dark">Counsellors</h1>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.counsellors.create') }}" class="rounded-full bg-langzy-blue text-white px-5 py-2 font-semibold">Add Counsellor</a>
                <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="px-4 py-2 rounded-lg border">Logout</button></form>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-6 py-3">Photo</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Role</th>
                        <th class="px-6 py-3">Address</th>
                        <th class="px-6 py-3">Price (Rs)</th>
                        <th class="px-6 py-3">Duration</th>
                        <th class="px-6 py-3">Priority</th>
                        <th class="px-6 py-3">Active</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($counsellors as $c)
                        <tr class="border-t">
                            <td class="px-6 py-3">
                                @if($c->photo_url)
                                    <img src="{{ $c->photo_url }}" alt="{{ $c->name }}" class="w-10 h-10 rounded-full object-cover" onerror="this.src='https://i.pravatar.cc/40'">
                                @else
                                    <img src="https://i.pravatar.cc/40" alt="{{ $c->name }}" class="w-10 h-10 rounded-full object-cover">
                                @endif
                            </td>
                            <td class="px-6 py-3 font-medium">{{ $c->name }}</td>
                            <td class="px-6 py-3">{{ $c->role ?? '-' }}</td>
                            <td class="px-6 py-3">{{ $c->address ?? '-' }}</td>
                            <td class="px-6 py-3">₹{{ number_format($c->price_rs) }}</td>
                            <td class="px-6 py-3">{{ $c->duration_minutes }} min</td>
                            <td class="px-6 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $c->priority > 0 ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $c->priority ?? 0 }}
                                </span>
                            </td>
                            <td class="px-6 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $c->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $c->is_active ? 'Yes' : 'No' }}
                                </span>
                            </td>
                            <td class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.counsellors.edit', $c) }}" class="text-langzy-blue hover:text-blue-600 text-sm font-medium">Edit</a>
                                    <form method="POST" action="{{ route('admin.counsellors.destroy', $c) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this counsellor?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td class="px-6 py-6 text-center text-gray-500" colspan="8">No counsellors yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">{{ $counsellors->links() }}</div>
    </div>
</body>
</html>


