<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Counsellor - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-langzy-dark">Edit Counsellor</h1>
            <a href="{{ route('admin.counsellors.index') }}" class="text-langzy-blue">Back</a>
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

        <form method="POST" action="{{ route('admin.counsellors.update', $counsellor) }}" enctype="multipart/form-data" class="bg-white rounded-xl shadow-lg p-6 space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium mb-1">Name</label>
                <input name="name" value="{{ old('name', $counsellor->name) }}" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Role</label>
                <input name="role" value="{{ old('role', $counsellor->role) }}" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Address</label>
                <input name="address" value="{{ old('address', $counsellor->address) }}" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue" placeholder="City, Country or full address">
            </div>
            
            <!-- Current Photo Display -->
            @if($counsellor->photo_url)
            <div>
                <label class="block text-sm font-medium mb-1">Current Photo</label>
                <div class="flex items-center gap-4">
                    <img src="{{ $counsellor->photo_url }}" alt="Current photo" class="w-20 h-20 rounded-full object-cover border-2 border-gray-200">
                    <div>
                        <p class="text-sm text-gray-600">Current profile photo</p>
                        <button type="button" onclick="document.getElementById('photo').click()" class="text-sm text-langzy-blue hover:underline">Change photo</button>
                    </div>
                </div>
            </div>
            @endif

            <div>
                <label class="block text-sm font-medium mb-1">{{ $counsellor->photo_url ? 'New Profile Photo (optional)' : 'Profile Photo' }}</label>
                <input type="file" name="photo" id="photo" accept="image/*" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-langzy-blue file:text-white hover:file:bg-blue-600">
                <p class="text-xs text-gray-500 mt-1">Upload JPG, PNG, GIF or WebP (max 5MB)</p>
                @error('photo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-1">Description</label>
                <textarea name="description" rows="4" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">{{ old('description', $counsellor->description) }}</textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Price (Rs)</label>
                    <input type="number" name="price_rs" value="{{ old('price_rs', $counsellor->price_rs) }}" min="0" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Duration (minutes)</label>
                    <input type="number" name="duration_minutes" value="{{ old('duration_minutes', $counsellor->duration_minutes) }}" min="10" max="240" required class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Priority</label>
                <input type="number" name="priority" value="{{ old('priority', $counsellor->priority ?? 0) }}" min="0" max="999" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:ring-2 focus:ring-langzy-blue">
                <p class="text-xs text-gray-500 mt-1">Higher numbers = higher priority (0 = no priority)</p>
            </div>
            <label class="inline-flex items-center gap-2">
                <input type="checkbox" name="is_active" {{ old('is_active', $counsellor->is_active) ? 'checked' : '' }} class="rounded"> Active
            </label>

            <div class="flex gap-3">
                <button type="submit" class="flex-1 rounded-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-3 font-semibold shadow-md hover:shadow-lg transition-all">Update Counsellor</button>
                <a href="{{ route('admin.counsellors.index') }}" class="px-6 py-3 rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-all">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
