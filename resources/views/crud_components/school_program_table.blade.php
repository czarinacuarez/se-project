<tbody>
    @forelse($school_lists as $lists)
        <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex items-center mr-3">
                    <img src="{{ asset('storage/images/' . $lists->school_logo) }}" alt="{{ $lists->school_initials }}" class="h-8 w-auto mr-3">
                    <span>{{ $lists->school_initials }}</span>
                    &#34;
                </div>
            </th>
            <td class="px-4 py-3">
                <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">{{ $lists->school_name }}</span>
            </td>
            <td class="px-4 py-3">
                <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">{{ $lists->points }}</span>
            </td>
        </tr>
    @empty
        
    @endforelse   
</tbody>