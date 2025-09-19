<div>
    @if ($open)
        <div class="fixed inset-0 z-40 bg-black/50" wire:click="$set('open', false)"></div>

        <div class="fixed inset-0 z-50 flex items-center justify-center px-4">
            <div class="w-full max-w-lg rounded-lg bg-white p-6 shadow-xl">
                <h2 class="mb-4 text-lg font-semibold text-gray-900">Editar Cliente</h2>

                <form wire:submit.prevent="update" class="space-y-4">
                    <div>
                        <label class="text-sm font-medium text-gray-700">Razón social</label>
                        <input type="text" wire:model="cus_corporatename"
                               class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @error('cus_corporatename') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Nombre comercial</label>
                        <input type="text" wire:model="cus_commercialname"
                               class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @error('cus_commercialname') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">RUC / Tax ID</label>
                        <input type="text" wire:model="cus_taxid"
                               class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @error('cus_taxid') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-6 flex justify-end gap-3">
                        <button type="button" wire:click="$set('open', false)"
                                class="rounded-md border border-gray-300 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                            Cancelar
                        </button>
                        <button type="submit"
                                class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
