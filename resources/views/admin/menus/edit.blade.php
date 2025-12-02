@extends('admin.layout')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">Edit Menu: {{ $menu->name }}</h1>

    <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST">
        @csrf

        <div id="menu-items">

            @foreach($items as $i => $item)
                <div class="border p-4 mb-3 rounded">
                    <label class="block mb-1 font-semibold">Label</label>
                    <input type="text" name="items[{{ $i }}][label]" value="{{ $item->label }}"
                           class="w-full border p-2 mb-3 rounded">

                    <label class="block mb-1 font-semibold">URL</label>
                    <input type="text" name="items[{{ $i }}][url]" value="{{ $item->url }}"
                           class="w-full border p-2 mb-3 rounded">
                </div>
            @endforeach

        </div>

        <button type="button" onclick="addItem()"
                class="bg-green-600 text-white px-4 py-2 rounded mb-4">
            + Add Menu Item
        </button>

        <br>

        <button type="submit"
                class="bg-blue-600 text-white px-5 py-2 rounded">
            Save Menu
        </button>

    </form>
</div>

<script>
function addItem() {
    const index = document.querySelectorAll('#menu-items > div').length;

    const html = `
        <div class="border p-4 mb-3 rounded">
            <label class="block mb-1 font-semibold">Label</label>
            <input type="text" name="items[${index}][label]" class="w-full border p-2 mb-3 rounded">

            <label class="block mb-1 font-semibold">URL</label>
            <input type="text" name="items[${index}][url]" class="w-full border p-2 mb-3 rounded">
        </div>
    `;

    document.querySelector('#menu-items').insertAdjacentHTML('beforeend', html);
}
</script>

@endsection