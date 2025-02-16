<div>
    <input type="text" wire:model="search" placeholder="Cari Nama atau Email..."
        class="border p-2 rounded-md mb-3 w-full" />

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">ID</th>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Phone</th>
                <th class="border p-2">Role</th>
                <th class="border p-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td class="border p-2">{{ $employee->id }}</td>
                    <td class="border p-2">{{ $employee->name }}</td>
                    <td class="border p-2">{{ $employee->email }}</td>
                    <td class="border p-2">{{ $employee->phone }}</td>
                    <td class="border p-2">{{ $employee->role }}</td>
                    <td class="border p-2">{{ $employee->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $employees->links() }}
    </div>
</div>
