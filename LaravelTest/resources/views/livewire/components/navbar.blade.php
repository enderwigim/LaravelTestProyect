<nav x-data="{ open:false }" class="sticky top-0 z-50 bg-[#0077c8]/95 backdrop-blur text-white shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex h-25 items-center justify-between"> {{-- aumentado de h-16 a h-20 --}}
      <!-- Brand -->
      <a class="flex items-center gap-2 cursor-pointer">
        <span class="text-2xl sm:text-3xl font-bold tracking-wide">
          Integra<span class="text-[#f36f21]">QS</span>
        </span>
      </a>

      <!-- Links (desktop) -->
      <div class="hidden md:flex items-center gap-4">
        <a
          class="px-4 py-2 rounded-md bg-white/10 text-white/90 font-medium
                 hover:bg-[#f36f21] hover:text-white transition
                 focus:outline-none focus:ring-2 focus:ring-[#f36f21]
                 data-[active=true]:bg-[#f36f21] data-[active=true]:text-white"
          data-active="true">Clientes</a>

        <a
          class="px-4 py-2 rounded-md bg-white/10 text-white/90 font-medium
                 hover:bg-[#f36f21] hover:text-white transition
                 focus:outline-none focus:ring-2 focus:ring-[#f36f21]">
          Pedidos</a>

        <button type="button"
          class="px-4 py-2 rounded-md bg-red-500/80 text-white font-medium
                 hover:bg-red-600 transition focus:outline-none focus:ring-2 focus:ring-red-400">
          Salir
        </button>
      </div>

      <!-- Mobile toggle -->
      <button @click="open = !open"
        class="md:hidden inline-flex items-center justify-center rounded-md p-2
               text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/40"
        aria-controls="mobile-menu" :aria-expanded="open">
        <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile menu -->
  <div x-show="open" x-transition.origin.top.left id="mobile-menu" class="md:hidden border-t border-white/10">
    <div class="space-y-2 px-4 py-4 bg-[#003f66]">
      <a class="block rounded-md px-3 py-2 bg-white/10 text-white/90 font-medium
                 hover:bg-[#f36f21] hover:text-white transition">Clientes</a>
      <a class="block rounded-md px-3 py-2 bg-white/10 text-white/90 font-medium
                 hover:bg-[#f36f21] hover:text-white transition">Pedidos</a>
      <button type="button"
        class="w-full text-left block rounded-md px-3 py-2 bg-red-500/80 text-white font-medium
               hover:bg-red-600 transition">Salir</button>
    </div>
  </div>
</nav>
