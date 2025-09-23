
<div>
  <div
    x-data
    x-show="$wire.open"
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm"
    x-transition.opacity
  >
    <!-- Modal -->
    <div class="bg-white rounded-lg shadow-xl w-full max-w-lg mx-4 overflow-hidden">
      <!-- Header -->
      <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 bg-[#0077c8] text-white">
        <h2 class="text-lg font-semibold">Editar Cliente</h2>
        <button wire:click="closeModal" class="text-white hover:text-gray-200">✕</button>
      </div>

      <!-- Body -->
      <div class="p-6 space-y-4">
        @if ($customer)
          <div>
            <label class="text-sm font-semibold text-gray-600">Código</label>
            <p class="text-gray-900">{{ $customer->cus_id }}</p>
          </div>

          <div>
            <label class="text-sm font-semibold text-gray-600">Nombre Comercial</label>
            <input type="text" wire:model="cus_commercialname"
              class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:ring-[#0077c8]/40 focus:outline-none" />
            @error('cus_commercialname') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
          </div>

          <div>
            <label class="text-sm font-semibold text-gray-600">Nombre Empresa</label>
            <input type="text" wire:model="cus_corporatename"
              class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:ring-[#0077c8]/40 focus:outline-none" />
            @error('cus_corporatename') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
          </div>

          <div>
            <label class="text-sm font-semibold text-gray-600">CIF</label>
            <input type="text" wire:model="cus_taxid"
              class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:ring-[#0077c8]/40 focus:outline-none" />
            @error('cus_taxid') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
          </div>
        @else
          <p class="text-gray-500 text-sm">No se encontró el cliente.</p>
        @endif
      </div>

      <!-- Footer -->
      <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-between">
        <button wire:click="closeModal"
          class="px-4 py-2 rounded-md bg-gray-300 text-gray-700 font-medium hover:bg-gray-400">
          Cancelar
        </button>

        <button wire:click="save"
          class="px-4 py-2 rounded-md bg-[#f36f21] text-white font-medium hover:bg-[#e65f12]">
          Guardar
        </button>
      </div>
    </div>
  </div>
</div>
