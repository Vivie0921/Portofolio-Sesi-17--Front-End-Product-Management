<?php

namespace App\Http\Controllers;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::withCount('products')->get();

        return view('product-category.index', compact('productCategories'));
    }

    public function destroy($id)
{
    $productCategories = ProductCategory::findOrFail($id);

    // Cek apakah ada produk yang terkait
    if ($productCategories->products()->count() > 0) {
        return redirect()->route('product-category.index')->with('error', 'Tidak dapat menghapus kategori karena ada produk terkait.');
    }

    // Hapus kategori jika tidak ada produk terkait
    $productCategories->delete();

    return redirect()->route('product-category.index')->with('success', 'Kategori berhasil dihapus.');
}

public function edit($id)
{
    $category = ProductCategory::findOrFail($id);
    return view('product-category.edit', compact('category'));
}

// Menyimpan kategori baru
public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
    ]);

    ProductCategory::create([
        'name' => $request->nama,
    ]);

    return redirect()->route('product-category.index')->with('success', 'Kategori berhasil ditambahkan.');
}


public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
    ]);

    $category = ProductCategory::findOrFail($id);
    $category->update([
        'name' => $request->nama,
    ]);

    return redirect()->route('product-category.index')->with('success', 'Kategori berhasil diperbarui.');
}


}
