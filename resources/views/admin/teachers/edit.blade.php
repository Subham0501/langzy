<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-langzy-dark">Edit Teacher</h1>
            <a href="{{ route('admin.teachers.index') }}" class="text-langzy-blue">Back</a>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-red-700">
                <div class="font-semibold mb-2">Please fix the following:</div>
                <ul class="list-disc pl-6 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.teachers.update', $teacher) }}" enctype="multipart/form-data" class="bg-white rounded-xl shadow-lg p-6 space-y-5">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-sm font-medium mb-1">Name *</label>
                <input name="name" value="{{ old('name', $teacher->name) }}" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Role *</label>
                <input name="role" value="{{ old('role', $teacher->role) }}" placeholder="e.g., German Language Expert, Native Speaker" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Country *</label>
                <input name="country" value="{{ old('country', $teacher->country) }}" placeholder="e.g., Germany, Austria, Switzerland" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
            </div>
            
            @if($teacher->photo_url)
                <div>
                    <label class="block text-sm font-medium mb-1">Current Photo</label>
                    <div class="flex items-center gap-4">
                        <img src="{{ $teacher->photo_url }}" alt="{{ $teacher->name }}" class="w-16 h-16 rounded-full object-cover">
                        <div>
                            <p class="text-sm text-gray-600">Current photo</p>
                            <p class="text-xs text-gray-500">Upload a new photo to replace it</p>
                        </div>
                    </div>
                </div>
            @endif
            
            <div>
                <label class="block text-sm font-medium mb-1">Profile Photo</label>
                <input type="file" name="photo" accept="image/*" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-langzy-blue file:text-white hover:file:bg-blue-600">
                <p class="text-xs text-gray-500 mt-1">Upload JPG, PNG, GIF or WebP (max 2MB)</p>
                @error('photo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Description *</label>
                <textarea name="description" rows="4" placeholder="Tell us about the teacher's experience, qualifications, and teaching style..." required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">{{ old('description', $teacher->description) }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Priority</label>
                <input type="number" name="priority" value="{{ old('priority', $teacher->priority) }}" min="0" max="100" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
                <p class="text-xs text-gray-500 mt-1">Higher numbers = higher priority (0 = no priority, 100 = highest)</p>
            </div>
            <label class="inline-flex items-center gap-2">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $teacher->is_active) ? 'checked' : '' }} class="rounded"> Active
            </label>

            <button type="submit" class="w-full rounded-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-3 font-semibold shadow-md hover:shadow-lg transition-all">Update Teacher</button>
        </form>
    </div>
</body>
</html>
