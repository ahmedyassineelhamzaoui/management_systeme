<?php
namespace App\Exports;

    use App\Models\Product;
    use Maatwebsite\Excel\Concerns\FromCollection;
    use Maatwebsite\Excel\Concerns\WithHeadings;
    class ExportProduct implements FromCollection
    {
        /**
        * @return \Illuminate\Support\Collection
        */
        public function collection()
        {
            $data = Product::select("reference", "nom", "prix","quantite", "categories.name as category","marques.name as marque")
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->join('marques', 'products.marque_id', '=', 'marques.id')
                ->get()
                ->toArray();
    
            array_unshift($data, ["reference", "nom", "prix", "quantite", "category_id", "marque_id"]);
    
            return collect($data);
        }
        /**
         * Write code on Method
         *
         * @return response()
         */
        public function headings(): array
        {
            return ["Reference", "Nom", "Prix", "Quantité", "Category", "Marque"];
        }
        
    }