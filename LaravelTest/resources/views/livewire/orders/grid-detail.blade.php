@if ($order->doclines && $order->doclines->count())
            <div class="mt-6">
              <p class="text-sm font-semibold text-gray-600 mb-2">Líneas del Pedido</p>

              <div class="overflow-x-auto border rounded-lg">
                <table class="min-w-full text-sm text-left border-collapse">
                  <thead class="bg-[#0077c8]/10 text-[#003f66]">
                    <tr>
                      <th class="px-4 py-2 border-b font-semibold">Descripción</th>
                      <th class="px-4 py-2 border-b font-semibold text-right">Cantidad</th>
                      <th class="px-4 py-2 border-b font-semibold text-right">Precio</th>
                      <th class="px-4 py-2 border-b font-semibold text-right">Total</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-100">
                    @foreach ($order->doclines as $line)
                      <tr>
                        <td class="px-4 py-2">{{ $line->dli_description }}</td>
                        <td class="px-4 py-2 text-right">{{ number_format($line->dli_quantity,2) }}</td>
                        <td class="px-4 py-2 text-right">{{ number_format($line->dli_price, 2) }}€</td>
                        <td class="px-4 py-2 text-right">
                          {{ number_format($line->dli_quantity * $line->dli_price, 2) }}€
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          @endif