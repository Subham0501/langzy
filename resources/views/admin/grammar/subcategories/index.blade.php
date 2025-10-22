<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grammar Subcategories - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-langzy-dark">Grammar Subcategories</h1>
                <p class="text-langzy-gray mt-2">Manage grammar and vocabulary subcategories</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.grammar.subcategories.create') }}" class="px-4 py-2 rounded-lg bg-gradient-to-r from-langzy-blue to-blue-600 text-white font-semibold">Add Subcategory</a>
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
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sort Order</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($subcategories as $subcategory)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $subcategory->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $subcategory->slug }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">{{ Str::limit($subcategory->description, 50) }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full {{ $subcategory->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $subcategory->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $subcategory->sort_order }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.grammar.subcategories.edit', $subcategory) }}" class="text-langzy-blue hover:text-blue-900">Edit</a>
                                        <form method="POST" action="{{ route('admin.grammar.subcategories.destroy', $subcategory) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this subcategory?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">No subcategories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($subcategories->hasPages())
                <div class="px-6 py-3 border-t border-gray-200">
                    {{ $subcategories->links() }}
                </div>
            @endif
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('admin.grammar.categories') }}" class="px-4 py-2 rounded-lg border">Manage Categories</a>
            <a href="{{ route('admin.grammar.contents.index') }}" class="px-4 py-2 rounded-lg border">Manage Contents</a>
        </div>
    </div>
</body>
</html>
