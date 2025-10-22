<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Grammar Content - Admin</title>
    @include('components.shared-assets')
    <script src="https://cdn.tiny.cloud/1/ege0m3xlv6lznjdox9ohegjvnkqtgxlpxak542bszrjk3q3r/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-langzy-dark">Create Grammar Content</h1>
                <p class="text-langzy-gray mt-2">Add new grammar or vocabulary content</p>
            </div>
            <a href="{{ route('admin.grammar.contents.index') }}" class="px-4 py-2 rounded-lg bg-white border">Back to Contents</a>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <form method="POST" action="{{ route('admin.grammar.contents.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="grid grid-cols-1 gap-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="grammar_category_id" class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                            <select id="grammar_category_id" 
                                    name="grammar_category_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent"
                                    required>
                                <option value="">Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('grammar_category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('grammar_category_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="grammar_subcategory_id" class="block text-sm font-medium text-gray-700 mb-2">Subcategory</label>
                            <select id="grammar_subcategory_id" 
                                    name="grammar_subcategory_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                                <option value="">Select a subcategory</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}" {{ old('grammar_subcategory_id') == $subcategory->id ? 'selected' : '' }}>
                                        {{ $subcategory->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('grammar_subcategory_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                        <input type="text" 
                               id="title" 
                               name="title" 
                               value="{{ old('title') }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent"
                               required>
                        @error('title')
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
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content *</label>
                        <textarea id="content" 
                                  name="content" 
                                  rows="15"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                        <textarea id="meta_description" 
                                  name="meta_description" 
                                  rows="3"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent">{{ old('meta_description') }}</textarea>
                        @error('meta_description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="thumbnail_image" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail Image</label>
                            <input type="file" 
                                   id="thumbnail_image" 
                                   name="thumbnail_image" 
                                   accept="image/*"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                            @error('thumbnail_image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="teaching_material_pdf" class="block text-sm font-medium text-gray-700 mb-2">Teaching Material PDF</label>
                            <input type="file" 
                                   id="teaching_material_pdf" 
                                   name="teaching_material_pdf" 
                                   accept=".pdf"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                            @error('teaching_material_pdf')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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

                        <div class="flex items-center">
                            <input type="checkbox" 
                                   id="is_featured" 
                                   name="is_featured" 
                                   value="1"
                                   {{ old('is_featured') ? 'checked' : '' }}
                                   class="h-4 w-4 text-langzy-blue focus:ring-langzy-blue border-gray-300 rounded">
                            <label for="is_featured" class="ml-2 block text-sm text-gray-700">Featured</label>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ route('admin.grammar.contents.index') }}" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50">Cancel</a>
                    <button type="submit" class="px-4 py-2 rounded-lg bg-gradient-to-r from-langzy-blue to-blue-600 text-white font-semibold hover:from-blue-600 hover:to-blue-700">Create Content</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Initialize TinyMCE
        tinymce.init({
            selector: '#content',
            height: 400,
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; }',
            branding: false,
            promotion: false
        });

        // Auto-generate slug from title
        document.getElementById('title').addEventListener('input', function() {
            const slugField = document.getElementById('slug');
            if (!slugField.value) {
                slugField.value = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
            }
        });
    </script>
</body>
</html>
