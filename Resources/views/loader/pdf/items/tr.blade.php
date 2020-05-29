@if($setting_pdf_size->show)
<td class="border-bottom border-dark p-2">{{ (!is_null($item->product->size))? $item->product->size->size:'N/A' }}</td>
@endif