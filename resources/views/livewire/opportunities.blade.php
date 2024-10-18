<div class="p-2">
    <div class="flex gap-10 border-b mb-3">
        <!-- Items per page selection -->
        <div>
            <label for="perPage">Items per page:</label>
            <select wire:model="perPage" wire:change="update" id="perPage" class="bg-red-100 rounded-sm">
                @foreach($options as $option)
                <option value="{{ $option }}">{{ $option }}</option>
                @endforeach
            </select>
        </div>

        <!-- Items search -->
        <div>
            <label for="search">Search:</label>
            <input type="text" wire:model.live="search" placeholder="Type to search..."
                class="bg-red-100 rounded-sm px-2">
        </div>
    </div>

    <!-- Items list -->
    <div>
        <div class="flex  bg-slate-600 p-2 text-white">
            <h1 class="w-52 flex-1 cursor-pointer" wire:click="sortBy('name')">
                Name
                <span class="ml-2">
                    @if($sortField === 'name')
                    @if($sortDirection === 'asc')
                    ▲
                    @else
                    ▼
                    @endif
                    @endif
                </span>
            </h1>
            <p class=" flex-1">Description</p>
        </div>
        @forelse($items as $item)
        <div class="flex px-2 py-1">
            <h2 class="w-52 flex-1">{{ $item->name }}</h2>
            <p class="flex-1">{{ $item->description }}</p>
        </div>
        @empty
        <div class="text-red-600 text-center py-5">Sorry, no items found!</div>
        @endforelse
    </div>
    <!-- Pagination links -->
    <div class="mt-3">
        {{ $items->links() }}
    </div>
</div>