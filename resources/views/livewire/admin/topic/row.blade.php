<tr class="hover:bg-gray-100 cursor-pointer">
    <td class="px-6 py-4 whitespace-nowrap" style="width: 5%;">
        <div class="text-sm text-gray-900">{{ $topic->id }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap" style="width: 20%;">
        <div class="text-sm font-medium text-gray-900">{{ $topic->topicLangs[0]->title }}</div>
    </td>
    <td class="px-6 py-4 max-w-xs whitespace-wrap break-words" style="width: 40%;">
        <div class="text-sm text-gray-900">
            {{ $topic->topicLangs[0]->short_description }}
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap w-32" style="width: 20%;">
        <div class="text-sm text-gray-900">{{ $topic->created_at }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap" style="width: 15%;">
        <div class="flex items-center space-x-2">
            <x-button class="bg-#0000ff">Edit</x-button>&nbsp;
            <x-danger-button>Delete</x-danger-button>
        </div>
    </td>
</tr>
