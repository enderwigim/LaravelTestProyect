<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

// Import the Customer model
use App\Models\Customer_cus;

class CustomerController extends Controller
{
    // public function index()
    // {
    //     $customers = Customer_cus::select(
    //         'cus_id',
    //         'cus_corporatename',
    //         'cus_commercialname',
    //         'cus_taxid'
    //     )->get();

    //     return view('customers.index', compact('customers'));
    // }
    public function index()
    {
        return view('customers.index');
    }
    public function show($id)
    {
        $customer = Customer_cus::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    /** UPDATE (PUT/PATCH /customers/{id}) */
    public function update(Request $request, $id)
    {
        // Valida solo lo editable
        $data = $request->validate([
            'cus_corporatename'  => ['nullable','string','max:100'],
            'cus_commercialname' => ['nullable','string','max:100'],
            'cus_taxid'          => ['nullable','string','max:30'],
        ]);

        $customer = Customer_cus::findOrFail($id);
        $customer->update($data);

        return redirect()
            ->route('customers.show', $id)
            ->with('status', 'Cliente actualizado correctamente.');
    }

    /** DELETE (DELETE /customers/{id}) */
    public function destroy($id)
    {
        $customer = Customer_cus::findOrFail($id);

        try {
            $customer->delete();
            return redirect()
                ->route('customers.index')
                ->with('status', 'Cliente eliminado correctamente.');
        } catch (QueryException $e) {
            // Código SQLSTATE 23503 = violación de FK en Postgres
            if ($e->getCode() === '23503') {
                return back()->withErrors('No se puede eliminar: el cliente tiene relaciones dependientes.');
            }
            // Otros errores de BD
            return back()->withErrors('Error al eliminar el cliente: '.$e->getMessage());
        }
    }
    
}
