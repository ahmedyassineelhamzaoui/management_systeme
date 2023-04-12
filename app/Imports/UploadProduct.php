<?php
namespace App\Imports;
use App\Models\Product;
use App\Models\Category;
use App\Models\Marque;
use Illuminate\Validation\ValidationException;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UploadProduct implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $marque = Marque::where('name', $row['marque_id'])->first();
        $category = Category::where('name', $row['category_id'])->first();
        $product = Product::where('reference', $row['reference'])->first();
        if ($product) {
            throw ValidationException::withMessages([
                'reference' => ['The product with reference ' . $row['reference'] . ' already exists.']
            ]);
        }
        $product = Product::firstOrCreate([
            'reference' => $row['reference']
        ], [
            'nom' => $row['nom'],
            'quantite' => $row['quantite'],
            'prix' => $row['prix'],
            'category_id' => $category ? $category->id : null,
            'marque_id' => $marque ? $marque->id : null,
        ]);

        return $product;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return Excel::XLSX;
    }
}