<div>
  <!-- Overlay -->
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
        <h2 class="text-lg font-semibold">Detalle del Cliente</h2>
        <button wire:click="closeModal" class="text-white hover:text-gray-200">
          ✕
        </button>
      </div>

      <!-- Body -->
      <div class="p-6 space-y-4">
        @if ($customer)
          <div>
            <p class="text-sm font-semibold text-gray-600">Código</p>
            <p class="text-gray-900">{{ $customer['cus_id'] }}</p>
          </div>
          <div>
            <p class="text-sm font-semibold text-gray-600">Nombre Comercial</p>
            <p class="text-gray-900">{{ $customer['cus_commercialname'] }}</p>
          </div>
          <div>
            <p class="text-sm font-semibold text-gray-600">Nombre Empresa</p>
            <p class="text-gray-900">{{ $customer['cus_corporatename'] }}</p>
          </div>
          <div>
            <p class="text-sm font-semibold text-gray-600">CIF</p>
            <p class="text-gray-900">{{ $customer['cus_taxid'] }}</p>
          </div>
        @else
          <p class="text-gray-500 text-sm">No se encontraron datos para este cliente.</p>
        @endif
      </div>

      <!-- Footer -->
      <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-end">
        <button wire:click="closeModal"
          class="px-4 py-2 rounded-md bg-[#0077c8] text-white font-medium
                 hover:bg-[#005f99] focus:outline-none focus:ring-2 focus:ring-[#0077c8]/40">
          Cerrar
        </button>
      </div>
    </div>
  </div>
</div>
