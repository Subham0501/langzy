<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Management - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-langzy-dark">Information Management</h1>
                <p class="text-langzy-gray mt-2">Manage information and files for different languages</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.information.create') }}" class="px-4 py-2 rounded-lg bg-gradient-to-r from-langzy-blue to-blue-600 text-white font-semibold">Add Information</a>
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg bg-white border">Back to Dashboard</a>
            </div>
        </div>

        @if(session('status'))
            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('status') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Language</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">File</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($information as $info)
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $info->title }}</div>
                                    @if($info->description)
                                        <div class="text-sm text-gray-500">{{ Str::limit($info->description, 50) }}</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                        @if($info->language === 'german') bg-yellow-100 text-yellow-800
                                        @elseif($info->language === 'french') bg-blue-100 text-blue-800
                                        @else bg-red-100 text-red-800
                                        @endif">
                                        {{ ucfirst($info->language) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($info->hasFile())
                                        <a href="{{ $info->file_url }}" target="_blank" class="text-langzy-blue hover:underline flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                            {{ Str::limit($info->file_name, 20) }}
                                        </a>
                                    @else
                                        <span class="text-gray-400">No file</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full {{ $info->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $info->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $info->priority }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.information.edit', $info) }}" class="text-langzy-blue hover:text-blue-900">Edit</a>
                                        <form method="POST" action="{{ route('admin.information.destroy', $info) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this information?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">No information found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($information->hasPages())
                <div class="px-6 py-3 border-t border-gray-200">
                    {{ $information->links() }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>
