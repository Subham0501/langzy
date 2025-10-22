<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Grammar Content - Admin</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-langzy-dark">{{ $content->title }}</h1>
                <p class="text-langzy-gray mt-2">Content Details</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.grammar.contents.edit', $content) }}" class="px-4 py-2 rounded-lg bg-gradient-to-r from-langzy-blue to-blue-600 text-white font-semibold">Edit Content</a>
                <a href="{{ route('admin.grammar.contents.index') }}" class="px-4 py-2 rounded-lg bg-white border">Back to Contents</a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Content</h2>
                    <div class="prose max-w-none">
                        {!! $content->content !!}
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-xl shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Details</h3>
                    <dl class="space-y-3">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Category</dt>
                            <dd class="text-sm text-gray-900">{{ $content->category ? $content->category->name : 'No Category' }}</dd>
                        </div>
                        @if($content->subcategory)
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Subcategory</dt>
                                <dd class="text-sm text-gray-900">{{ $content->subcategory->name }}</dd>
                            </div>
                        @endif
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Slug</dt>
                            <dd class="text-sm text-gray-900">{{ $content->slug }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="text-sm">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full {{ $content->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $content->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Featured</dt>
                            <dd class="text-sm">
                                @if($content->is_featured)
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Featured</span>
                                @else
                                    <span class="text-gray-400">No</span>
                                @endif
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Sort Order</dt>
                            <dd class="text-sm text-gray-900">{{ $content->sort_order }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Created</dt>
                            <dd class="text-sm text-gray-900">{{ $content->created_at->format('M d, Y') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Updated</dt>
                            <dd class="text-sm text-gray-900">{{ $content->updated_at->format('M d, Y') }}</dd>
                        </div>
                    </dl>
                </div>

                @if($content->thumbnail_image)
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Thumbnail</h3>
                        <img src="{{ $content->thumbnail_image }}" alt="{{ $content->title }}" class="w-full rounded-lg">
                    </div>
                @endif

                @if($content->teaching_material_pdf)
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Teaching Material</h3>
                        <a href="{{ Storage::url($content->teaching_material_pdf) }}" target="_blank" class="inline-flex items-center px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download PDF
                        </a>
                    </div>
                @endif

                @if($content->meta_description)
                    <div class="bg-white rounded-xl shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Meta Description</h3>
                        <p class="text-sm text-gray-700">{{ $content->meta_description }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
