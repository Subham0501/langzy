<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers - Admin</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('Group 36.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('Group 36.png') }}">
    
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-langzy-dark">Teachers</h1>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.teachers.create') }}" class="rounded-full bg-langzy-blue text-white px-5 py-2 font-semibold">Add Teacher</a>
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg border">Back to Dashboard</a>
                <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="px-4 py-2 rounded-lg border">Logout</button></form>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-6 py-3">Photo</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Role</th>
                        <th class="px-6 py-3">Country</th>
                        <th class="px-6 py-3">Rating</th>
                        <th class="px-6 py-3">Priority</th>
                        <th class="px-6 py-3">Active</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teachers as $teacher)
                        <tr class="border-t">
                            <td class="px-6 py-3">
                                @if($teacher->photo_url)
                                    <img src="{{ $teacher->photo_url }}" alt="{{ $teacher->name }}" class="w-10 h-10 rounded-full object-cover" onerror="this.src='https://i.pravatar.cc/40'">
                                @else
                                    <img src="https://i.pravatar.cc/40" alt="{{ $teacher->name }}" class="w-10 h-10 rounded-full object-cover">
                                @endif
                            </td>
                            <td class="px-6 py-3 font-medium">{{ $teacher->name }}</td>
                            <td class="px-6 py-3">{{ $teacher->role }}</td>
                            <td class="px-6 py-3">{{ $teacher->country }}</td>
                            <td class="px-6 py-3">
                                <div class="flex items-center gap-1">
                                    <div class="flex items-center">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= floor($teacher->average_rating))
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            @else
                                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="text-sm text-gray-600">
                                        {{ number_format($teacher->average_rating, 1) }} ({{ $teacher->total_ratings }})
                                    </span>
                                </div>
                            </td>
                            <td class="px-6 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $teacher->priority > 0 ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $teacher->priority ?? 0 }}
                                </span>
                            </td>
                            <td class="px-6 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $teacher->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $teacher->is_active ? 'Yes' : 'No' }}
                                </span>
                            </td>
                            <td class="px-6 py-3">
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('admin.teachers.show', $teacher) }}" class="text-langzy-blue hover:text-blue-600 text-sm font-medium">View</a>
                                    <a href="{{ route('admin.teachers.edit', $teacher) }}" class="text-langzy-blue hover:text-blue-600 text-sm font-medium">Edit</a>
                                    <form method="POST" action="{{ route('admin.teachers.destroy', $teacher) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this teacher?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td class="px-6 py-6 text-center text-gray-500" colspan="8">No teachers yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">{{ $teachers->links() }}</div>
    </div>
</body>
</html>
