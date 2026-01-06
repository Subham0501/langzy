<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Grammar Subcategory - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-langzy-dark">Create Grammar Subcategory</h1>
                <p class="text-langzy-gray mt-2">Add a new grammar or vocabulary subcategory</p>
            </div>
            <a href="{{ route('admin.grammar.subcategories') }}" class="px-4 py-2 rounded-lg bg-white border">Back to Subcategories</a>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <form method="POST" action="{{ route('admin.grammar.subcategories.store') }}">
                @csrf
                
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Subcategory Name *</label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               value="{{ old('name') }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent"
                               required>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="language" class="block text-sm font-medium text-gray-700 mb-2">Language *</label>
                        <select id="language" 
                                name="language" 
                                required
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                            <option value="german" {{ old('language', 'german') === 'german' ? 'selected' : '' }}>German</option>
                            <option value="french" {{ old('language') === 'french' ? 'selected' : '' }}>French</option>
                        </select>
                        @error('language')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                        <input type="text" 
                               id="slug" 
                               name="slug" 
                               value="{{ old('slug') }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent"
                               placeholder="Leave empty to auto-generate">
                        @error('slug')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea id="description" 
                                  name="description" 
                                  rows="4"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                            <input type="number" 
                                   id="sort_order" 
                                   name="sort_order" 
                                   value="{{ old('sort_order', 0) }}"
                                   min="0"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                            @error('sort_order')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" 
                                   id="is_active" 
                                   name="is_active" 
                                   value="1"
                                   {{ old('is_active', true) ? 'checked' : '' }}
                                   class="h-4 w-4 text-langzy-blue focus:ring-langzy-blue border-gray-300 rounded">
                            <label for="is_active" class="ml-2 block text-sm text-gray-700">Active</label>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ route('admin.grammar.subcategories') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50">Cancel</a>
                    <button type="submit" class="px-4 py-2 rounded-lg bg-gradient-to-r from-langzy-blue to-blue-600 text-white font-semibold hover:from-blue-600 hover:to-blue-700">Create Subcategory</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Auto-generate slug from name
        document.getElementById('name').addEventListener('input', function() {
            const slugField = document.getElementById('slug');
            if (!slugField.value) {
                slugField.value = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
            }
        });
    </script>
</body>
</html>
