<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
  <!-- Header / barra de acciones -->
  <div class="mb-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
    <h1 class="text-xl sm:text-2xl font-semibold text-[#003f66]">Pedidos</h1>

    {{-- <div class="flex items-center gap-2">
      <div class="relative">
        <input
          type="text"
          placeholder="Buscar (Código, Nombre, CIF)…"
          class="w-64 max-w-full rounded-md border border-gray-200 bg-white/90 px-3 py-2 text-sm
                placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#0077c8]/40"
          wire:model.live.debounce.500ms="searchText"
        />
      </div>

      <button type="button"
        class="inline-flex items-center rounded-md bg-[#f36f21] px-3 py-2 text-sm font-medium text-white
               shadow-sm hover:bg-[#e65f12] focus:outline-none focus:ring-2 focus:ring-[#f36f21]/50">
        Nuevo
      </button>
    </div> --}}
  </div>

  <!-- Tabla -->
  <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
    <table class="min-w-full text-sm">
      <thead>
        <tr class="bg-[#0077c8]/10 text-[#003f66]">
          <th class="px-4 py-3 text-left font-semibold">Código</th>
          <th class="px-4 py-3 text-left font-semibold">Fecha</th>
          <th class="px-4 py-3 text-left font-semibold">Nombre Cliente</th>
          <th class="px-4 py-3 text-left font-semibold">CIF</th>
          <th class="px-4 py-3 text-right font-semibold">Importe</th>
          <th class="px-4 py-3 text-right font-semibold">Acciones</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        @foreach ($orders as $o)
          <tr
            class="hover:bg-[#0077c8]/5 transition"
          >
            <!-- Click en celdas abre detalle -->
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $o['doh_id'] }})">
              <span class="inline-flex items-center rounded-md bg-[#0077c8]/10 px-2 py-1 font-medium text-[#003f66]">
                {{ $o['doh_id'] }}
              </span>
            </td>
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $o['doh_id'] }})">

              {{ $o['doh_date'] }}
            </td>
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $o['doh_id'] }})">

              {{ $o->customer->cus_commercialname ?? 'N/A' }}
            </td>
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $o['doh_id'] }})">

              {{ $o->customer->cus_taxid ?? 'N/A' }}
            </td>
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $o['doh_id'] }})">

              {{ $o['doh_totalamount']}}€
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center justify-end gap-2">
                <button type="button"
                  class="px-3 py-1.5 rounded-md bg-white/10 text-[#003f66] border border-[#0077c8]/30
                         hover:bg-[#0077c8] hover:text-white transition
                         focus:outline-none focus:ring-2 focus:ring-[#0077c8]/40"
                  wire:click="seeDetail({{ $o['doh_id'] }})"
                  >

                  Detalle
                </button>

                <button type="button"
                  class="px-3 py-1.5 rounded-md bg-[#f36f21] text-white
                         hover:bg-[#e65f12] transition
                         focus:outline-none focus:ring-2 focus:ring-[#f36f21]/50"
                 
                >
                {{--  wire:click="editCustomer({{ $c['cus_id'] }})" --}}
                Editar
                </button>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="p-4">
      {{ $orders->links() }}
    </div>
      
  </div>


</div>
