   <div class="width:90%">
        {{-- <div style="text-align: center;padding:4px;width:60%">
            <img style="width:100%" src="public\images\boncommande.png" alt="">
        </div> --}}
        <div  style="display:flex;justify-content:space-between;align-items:center;width:100%">
            <h3>Commercial : {{$commande->user_name}}</h3>
             <p>Date de créeation : {{$commande->created_at}}</p> 
        </div>

        <h2 style="color:rgb(1, 1, 120)">Bon de commande</h2>
        <table style="width:100%;color:rgb(54, 54, 54);border-collapse: collapse;" >
            <thead style="" >
                <tr>
                    <th scope="col" style="padding: 12px 8px; border: 1px solid #ddd;">
                        Réference
                    </th>
                    <th scope="col" style="padding: 12px 8px;  border: 1px solid #ddd;">
                        Nom
                    </th>
                    <th scope="col" style="padding: 12px 8px;  border: 1px solid #ddd;">
                        Quantité
                    </th>
                    <th cope="col" style="padding: 12px 8px;  border: 1px solid #ddd;">
                        prix
                    </th>
                    <th scope="col" style="padding: 12px 8px;  border: 1px solid #ddd;">
                        Marque
                    </th>
                    <th scope="col"style="padding: 12px 8px;  border: 1px solid #ddd;">
                        catégorie
                    </th>
                </tr>
            </thead>
            <tbody class="table-body-bg">
                @foreach($data as $items)
                <tr style="border:1px solid black">
                    <th scope="row" style="padding: 12px 8px;  border: 1px solid #ddd;">
                        {{ $items->reference }}
                    </th>
                    <td style="padding: 12px 8px;  border: 1px solid #ddd;">
                        {{ $items->nom }}
                    </td>
                    <td style="padding: 12px 8px;  border: 1px solid #ddd;">
                        {{ $items->quantity }}
                    </td>
                    <td style="padding: 12px 8px;  border: 1px solid #ddd;">
                        {{ $items->prix }}
                    </td>
                    <td style="padding: 12px 8px;  border: 1px solid #ddd;">
                        {{ $items->marque }}
                    </td>
                    <td style="padding: 12px 8px;  border: 1px solid #ddd;">
                        {{ $items->categorie }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 4px">
            prix Totole : {{$prixtotale}} Dh
        </div>
    </div>
@include('layouts.dashboardFooter')