<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
  <!-- Header / barra de acciones -->
  <div class="mb-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
    <h1 class="text-xl sm:text-2xl font-semibold text-[#003f66]">Clientes</h1>

    <div class="flex items-center gap-2">
      <div class="relative">
        <input
          type="text"
          placeholder="Buscar (Código, Nombre, CIF)…"
          class="w-64 max-w-full rounded-md border border-gray-200 bg-white/90 px-3 py-2 text-sm
                 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#0077c8]/40"
          disabled
        />
        <span class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-400 text-xs">WIP</span>
      </div>

      <button type="button"
        class="inline-flex items-center rounded-md bg-[#f36f21] px-3 py-2 text-sm font-medium text-white
               shadow-sm hover:bg-[#e65f12] focus:outline-none focus:ring-2 focus:ring-[#f36f21]/50">
        Nuevo
      </button>
    </div>
  </div>

  <!-- Tabla -->
  <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
    <table class="min-w-full text-sm">
      <thead>
        <tr class="bg-[#0077c8]/10 text-[#003f66]">
          <th class="px-4 py-3 text-left font-semibold">Código</th>
          <th class="px-4 py-3 text-left font-semibold">Nombre comercial</th>
          <th class="px-4 py-3 text-left font-semibold">Empresa</th>
          <th class="px-4 py-3 text-left font-semibold">CIF</th>
          <th class="px-4 py-3 text-right font-semibold">Acciones</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        @foreach ($clientes as $c)
          <tr
            class="hover:bg-[#0077c8]/5 transition"
          >
            <!-- Click en celdas abre detalle -->
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $c['id'] }})">
              <span class="inline-flex items-center rounded-md bg-[#0077c8]/10 px-2 py-1 font-medium text-[#003f66]">
                {{ $c['codigo'] }}
              </span>
            </td>
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $c['id'] }})">
              {{ $c['nombre_comercial'] }}
            </td>
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $c['id'] }})">
              {{ $c['empresa'] }}
            </td>
            <td class="px-4 py-3 cursor-pointer" wire:click="seeDetail({{ $c['id'] }})">
              {{ $c['cif'] }}
            </td>

            <td class="px-4 py-3">
              <div class="flex items-center justify-end gap-2">
                <button type="button"
                  class="px-3 py-1.5 rounded-md bg-white/10 text-[#003f66] border border-[#0077c8]/30
                         hover:bg-[#0077c8] hover:text-white transition
                         focus:outline-none focus:ring-2 focus:ring-[#0077c8]/40"
                  wire:click="seeDetail({{ $c['id'] }})">
                  Detalle
                </button>

                <button type="button"
                  class="px-3 py-1.5 rounded-md bg-[#f36f21] text-white
                         hover:bg-[#e65f12] transition
                         focus:outline-none focus:ring-2 focus:ring-[#f36f21]/50"
                  {{-- wire:click="editar({{ $c['id'] }})"> --}}
                  Editar
                </button>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Pie con info -->
  <div class="mt-3 text-xs text-gray-500">
    * Datos de ejemplo (estáticos). Conectarás Eloquent / paginación después.
  </div>
</div>
