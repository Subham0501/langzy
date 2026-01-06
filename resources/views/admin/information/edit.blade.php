<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-langzy-dark">Edit Information</h1>
                <p class="text-langzy-gray mt-2">Update information details and file</p>
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
            <form method="POST" action="{{ route('admin.information.update', $information) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="space-y-6">
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $information->title) }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">{{ old('description', $information->description) }}</textarea>
                    </div>

                    <!-- Current File -->
                    @if($information->hasFile())
                        <div class="bg-gray-50 rounded-lg p-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Current File</label>
                            <div class="flex items-center justify-between">
                                <a href="{{ $information->file_url }}" target="_blank" class="text-langzy-blue hover:underline flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    {{ $information->file_name }}
                                </a>
                                <div class="flex items-center">
                                    <input type="checkbox" name="remove_file" id="remove_file" value="1"
                                        class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                                    <label for="remove_file" class="ml-2 text-sm text-red-600">Remove file</label>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- File Upload -->
                    <div>
                        <label for="file" class="block text-sm font-medium text-gray-700 mb-2">{{ $information->hasFile() ? 'Replace File' : 'Upload File' }} (PDF, DOC, Image, etc.)</label>
                        <input type="file" name="file" id="file"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                        <p class="mt-1 text-sm text-gray-500">Maximum file size: 10MB</p>
                    </div>

                    <!-- Language -->
                    <div>
                        <label for="language" class="block text-sm font-medium text-gray-700 mb-2">Language *</label>
                        <select name="language" id="language" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                            <option value="german" {{ old('language', $information->language) === 'german' ? 'selected' : '' }}>German</option>
                            <option value="french" {{ old('language', $information->language) === 'french' ? 'selected' : '' }}>French</option>
                            <option value="austrian" {{ old('language', $information->language) === 'austrian' ? 'selected' : '' }}>Austrian</option>
                        </select>
                    </div>

                    <!-- Priority -->
                    <div>
                        <label for="priority" class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                        <input type="number" name="priority" id="priority" value="{{ old('priority', $information->priority) }}" min="0"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-langzy-blue focus:border-transparent">
                        <p class="mt-1 text-sm text-gray-500">Higher priority items appear first</p>
                    </div>

                    <!-- Is Active -->
                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $information->is_active) ? 'checked' : '' }}
                            class="w-4 h-4 text-langzy-blue border-gray-300 rounded focus:ring-langzy-blue">
                        <label for="is_active" class="ml-2 text-sm font-medium text-gray-700">Active</label>
                    </div>
                </div>

                <div class="mt-8 flex justify-end gap-3">
                    <a href="{{ route('admin.information.index') }}" class="px-4 py-2 rounded-lg border text-gray-700 hover:bg-gray-50">Cancel</a>
                    <button type="submit" class="px-6 py-2 rounded-lg bg-gradient-to-r from-langzy-blue to-blue-600 text-white font-semibold hover:from-blue-600 hover:to-blue-700">
                        Update Information
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
