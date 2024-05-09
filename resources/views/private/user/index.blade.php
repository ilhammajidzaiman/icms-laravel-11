<x-app-layout>
    <x-slot name="breadcrumb">
        <x-breadcrumb>
            <x-breadcrumb.item :href="route('dashboard')" :value="__('Dashboard')" />
            <x-breadcrumb.item :href="route('user.index')" :value="__($title)" />
        </x-breadcrumb>
    </x-slot>

    <x-slot name="header">
        {{ __($title) }}
    </x-slot>

    <x-slot name="button">
        <x-link :href="route($title . '.create')" :value="__('Baru')" class="btn btn-primary" />
    </x-slot>

    <x-card>
        <x-card.body>
            <x-table>
                <x-table.thead>
                    <x-table.tr>
                        <x-table.th>#</x-table.th>
                        <x-table.th>nama</x-table.th>
                        <x-table.th>username</x-table.th>
                        <x-table.th>email</x-table.th>
                        <x-table.th>&nbsp;</x-table.th>
                    </x-table.tr>
                </x-table.thead>
                <x-table.tbody>
                    @foreach ($users as $key => $item)
                        <x-table.tr>
                            <x-table.th>{{ $users->firstItem() + $key }}</x-table.th>
                            <x-table.td>{{ $item->name }}</x-table.td>
                            <x-table.td>{{ $item->username }}</x-table.td>
                            <x-table.td>{{ $item->email }}</x-table.td>
                            <x-table.td>{{ $item->created_at->translatedFormat('l, j F Y H:i:s') }}</x-table.td>
                        </x-table.tr>
                    @endforeach
                </x-table.tbody>
            </x-table>

            {{ $users->links() }}
        </x-card.body>
    </x-card>
</x-app-layout>
