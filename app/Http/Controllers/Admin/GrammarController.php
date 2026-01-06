<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GrammarCategory;
use App\Models\GrammarSubcategory;
use App\Models\GrammarContent;
use App\Services\ImageUploadService;
use App\Services\PdfUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GrammarController extends Controller
{
    protected $imageUploadService;
    protected $pdfUploadService;

    public function __construct(ImageUploadService $imageUploadService, PdfUploadService $pdfUploadService)
    {
        $this->imageUploadService = $imageUploadService;
        $this->pdfUploadService = $pdfUploadService;
    }

    // Categories Management
    public function categories()
    {
        $categories = GrammarCategory::orderBy('sort_order')->orderBy('name')->paginate(10);
        return view('admin.grammar.categories.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.grammar.categories.create');
    }

    public function storeCategory(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|unique:grammar_categories,slug',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
            'language' => 'required|in:german,french'
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        GrammarCategory::create($data);
        return redirect()->route('admin.grammar.categories')->with('status', 'Category created successfully');
    }

    public function editCategory(GrammarCategory $category)
    {
        return view('admin.grammar.categories.edit', compact('category'));
    }

    public function updateCategory(Request $request, GrammarCategory $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|unique:grammar_categories,slug,' . $category->id,
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
            'language' => 'required|in:german,french'
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $category->update($data);
        return redirect()->route('admin.grammar.categories')->with('status', 'Category updated successfully');
    }

    public function destroyCategory(GrammarCategory $category)
    {
        $category->delete();
        return redirect()->route('admin.grammar.categories')->with('status', 'Category deleted successfully');
    }

    // Subcategories Management
    public function subcategories()
    {
        $subcategories = GrammarSubcategory::orderBy('sort_order')->orderBy('name')->paginate(10);
        return view('admin.grammar.subcategories.index', compact('subcategories'));
    }

    public function createSubcategory()
    {
        return view('admin.grammar.subcategories.create');
    }

    public function storeSubcategory(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|unique:grammar_subcategories,slug',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
            'language' => 'required|in:german,french'
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        GrammarSubcategory::create($data);
        return redirect()->route('admin.grammar.subcategories')->with('status', 'Subcategory created successfully');
    }

    public function editSubcategory(GrammarSubcategory $subcategory)
    {
        return view('admin.grammar.subcategories.edit', compact('subcategory'));
    }

    public function updateSubcategory(Request $request, GrammarSubcategory $subcategory)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|unique:grammar_subcategories,slug,' . $subcategory->id,
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
            'language' => 'required|in:german,french'
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $subcategory->update($data);
        return redirect()->route('admin.grammar.subcategories')->with('status', 'Subcategory updated successfully');
    }

    public function destroySubcategory(GrammarSubcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('admin.grammar.subcategories')->with('status', 'Subcategory deleted successfully');
    }

    // Content Management
    public function index()
    {
        $contents = GrammarContent::with(['category', 'subcategory'])->orderBy('sort_order')->orderBy('title')->paginate(10);
        return view('admin.grammar.contents.index', compact('contents'));
    }

    public function create()
    {
        $selectedLanguage = session('selected_language', 'german');
        $categories = GrammarCategory::where('is_active', true)
            ->byLanguage($selectedLanguage)
            ->orderBy('name')->get();
        $subcategories = GrammarSubcategory::where('is_active', true)
            ->byLanguage($selectedLanguage)
            ->orderBy('name')->get();
        return view('admin.grammar.contents.create', compact('categories', 'subcategories', 'selectedLanguage'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'grammar_category_id' => 'required|exists:grammar_categories,id',
            'grammar_subcategory_id' => 'nullable|exists:grammar_subcategories,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'nullable|string|unique:grammar_contents,slug',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'teaching_material_pdf' => 'nullable|file|mimes:pdf|max:10240',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'language' => 'required|in:german,french'
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle thumbnail image upload
        if ($request->hasFile('thumbnail_image')) {
            $data['thumbnail_image'] = $this->imageUploadService->uploadImage($request->file('thumbnail_image'), 'grammar/thumbnails');
        }

        // Handle PDF upload
        if ($request->hasFile('teaching_material_pdf')) {
            $pdfUrl = $this->pdfUploadService->uploadPdf($request->file('teaching_material_pdf'), 'course-materials/pdfs');
            if ($pdfUrl) {
                $data['teaching_material_pdf'] = $pdfUrl;
            }
        }

        GrammarContent::create($data);
        return redirect()->route('admin.grammar.contents.index')->with('status', 'Content created successfully');
    }

    public function show(GrammarContent $content)
    {
        $content->load(['category', 'subcategory']);
        return view('admin.grammar.contents.show', compact('content'));
    }

    public function edit(GrammarContent $content)
    {
        $selectedLanguage = $content->language ?? session('selected_language', 'german');
        $categories = GrammarCategory::where('is_active', true)
            ->byLanguage($selectedLanguage)
            ->orderBy('name')->get();
        $subcategories = GrammarSubcategory::where('is_active', true)
            ->byLanguage($selectedLanguage)
            ->orderBy('name')->get();
        return view('admin.grammar.contents.edit', compact('content', 'categories', 'subcategories', 'selectedLanguage'));
    }

    public function update(Request $request, GrammarContent $content)
    {
        $data = $request->validate([
            'grammar_category_id' => 'required|exists:grammar_categories,id',
            'grammar_subcategory_id' => 'nullable|exists:grammar_subcategories,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'nullable|string|unique:grammar_contents,slug,' . $content->id,
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'teaching_material_pdf' => 'nullable|file|mimes:pdf|max:10240',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'language' => 'required|in:german,french'
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle thumbnail image upload
        if ($request->hasFile('thumbnail_image')) {
            // Delete old thumbnail if exists
            if ($content->thumbnail_image) {
                $this->imageUploadService->deleteImage($content->thumbnail_image);
            }
            $data['thumbnail_image'] = $this->imageUploadService->uploadImage($request->file('thumbnail_image'), 'grammar/thumbnails');
        }

        // Handle PDF upload
        if ($request->hasFile('teaching_material_pdf')) {
            // Delete old PDF if exists
            if ($content->teaching_material_pdf) {
                $this->pdfUploadService->deletePdf($content->teaching_material_pdf);
            }
            $pdfUrl = $this->pdfUploadService->uploadPdf($request->file('teaching_material_pdf'), 'course-materials/pdfs');
            if ($pdfUrl) {
                $data['teaching_material_pdf'] = $pdfUrl;
            }
        }

        $content->update($data);
        return redirect()->route('admin.grammar.contents.index')->with('status', 'Content updated successfully');
    }

    public function destroy(GrammarContent $content)
    {
        // Delete associated files
        if ($content->thumbnail_image) {
            $this->imageUploadService->deleteImage($content->thumbnail_image);
        }
        if ($content->teaching_material_pdf) {
            $this->pdfUploadService->deletePdf($content->teaching_material_pdf);
        }

        $content->delete();
        return redirect()->route('admin.grammar.contents.index')->with('status', 'Content deleted successfully');
    }
}
