<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Daftar Semua User</h3>
                    <table class="w-full text-sm border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-3 border text-left">No</th>
                                <th class="p-3 border text-left">Nama</th>
                                <th class="p-3 border text-left">Email</th>
                                <th class="p-3 border text-left">No. HP</th>
                                <th class="p-3 border text-left">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $i => $user)
                                <tr class="hover:bg-gray-50">
                                    <td class="p-3 border">{{ $i + 1 }}</td>
                                    <td class="p-3 border">{{ $user->name }}</td>
                                    <td class="p-3 border">{{ $user->email }}</td>
                                    <td class="p-3 border">{{ $user->no_hp ?? '-' }}</td>
                                    <td class="p-3 border">
                                        <span
                                            class="px-2 py-1 rounded text-xs font-semibold {{ $user->role === 'admin' ? 'bg-red-100 text-red-700' : 'bg-green-100 text-green-700' }}">
                                            {{ $user->role }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>