<x-app-layout title="Users">
    <div class="container">
        <x-card title="Users" subtitle="Table of users">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Twitter</th>
                </thead>
                <tbody>
                    @forelse ($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['phone'] }}</td>
                            <td>{{ $user['twitter'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class="text-center">Data is currently empty.</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </x-card>
</x-app-layout>
