<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Information - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-langzy-dark">Add Information</h1>
                <p class="text-langzy-gray mt-2">Create new information with file upload</p>
            </div>
            <a href="{{ route('admin.information.index') }}" class="px-4 py-2 rounded-lg bg-white border">Back to List</a>
        </div>

        @if($errors->any())
            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-xl shadow p-6">
            <form method="POST" action="{{ route('admin.information.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="space-y-6">
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">{{ old('description') }}</textarea>
                    </div>

                    <!-- File Upload -->
                    <div>
                        <label for="file" class="block text-sm font-medium text-gray-700 mb-2">File (PDF, DOC, Image, etc.)</label>
                        <input type="file" name="file" id="file"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                        <p class="mt-1 text-sm text-gray-500">Maximum file size: 10MB</p>
                    </div>

                    <!-- Language -->
                    <div>
                        <label for="language" class="block text-sm font-medium text-gray-700 mb-2">Language *</label>
                        <select name="language" id="language" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                            <option value="german" {{ old('language') === 'german' ? 'selected' : '' }}>German</option>
                            <option value="french" {{ old('language') === 'french' ? 'selected' : '' }}>French</option>
                            <option value="austrian" {{ old('language') === 'austrian' ? 'selected' : '' }}>Austria</option>
                        </select>
                    </div>

                    <!-- Priority -->
                    <div>
                        <label for="priority" class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                        <input type="number" name="priority" id="priority" value="{{ old('priority', 0) }}" min="0"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                        <p class="mt-1 text-sm text-gray-500">Higher priority items appear first</p>
                    </div>

                    <!-- Is Active -->
                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                            class="w-4 h-4 text-langzy-blue border-gray-300 rounded focus:ring-langzy-blue">
                        <label for="is_active" class="ml-2 text-sm font-medium text-gray-700">Active</label>
                    </div>
                </div>

                <div class="mt-8 flex justify-end gap-3">
                    <a href="{{ route('admin.information.index') }}" class="px-4 py-2 rounded-lg border text-gray-700 hover:bg-gray-50">Cancel</a>
                    <button type="submit" class="px-6 py-2 rounded-lg bg-gradient-to-r from-langzy-blue to-blue-600 text-white font-semibold hover:from-blue-600 hover:to-blue-700">
                        Create Information
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
