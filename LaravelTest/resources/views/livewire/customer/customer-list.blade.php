<div class="space-y-6">
    <!-- Barra superior -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h1 class="text-xl font-semibold text-gray-900">Clientes</h1>

        <div class="flex items-center gap-2">
            <label class="text-sm text-gray-600">Por página:</label>
            <select
                wire:model.live="perPage"
                class="rounded-md border-gray-300 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>

    <!-- Tabla -->
    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr class="text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Razón social</th>
                    <th class="px-4 py-3">Nombre comercial</th>
                    <th class="px-4 py-3">RUC / Tax ID</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm">
                @forelse ($customers as $c)
                    <tr class="hover:bg-indigo-50/40">
                        <td class="px-4 py-3 font-medium text-gray-900">{{ $c->cus_id }}</td>
                        <td class="px-4 py-3 text-gray-800">{{ $c->cus_corporatename ?: '—' }}</td>
                        <td class="px-4 py-3 text-gray-800">{{ $c->cus_commercialname ?: '—' }}</td>
                        <td class="px-4 py-3 text-gray-800">{{ $c->cus_taxid ?: '—' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-10 text-center text-sm text-gray-600">
                            No hay clientes para mostrar.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Paginación + info -->
    <div class="flex flex-col items-center justify-between gap-3 sm:flex-row">
        <div class="text-sm text-gray-600">
            @if ($customers->total())
                Mostrando
                <span class="font-medium">{{ $customers->firstItem() }}</span>–<span class="font-medium">{{ $customers->lastItem() }}</span>
                de <span class="font-medium">{{ $customers->total() }}</span>
            @else
                Mostrando 0 resultados
            @endif
        </div>

        <div>
            {{ $customers->links() }}
        </div>
    </div>
</div>
