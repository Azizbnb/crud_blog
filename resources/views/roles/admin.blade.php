<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as admin!
                </div>
            </div>
        </div>

        <div class=" my-40 mx-36 grid grid-cols-4">
            <table class="col-span-4 shadow-xl">
                <thead class="">
                    <tr class="bg-indigo-400 font-bold rounded-md">
                        <th class="w-40">Name</th>
                        <th class="w-40">Email</th>
                        <th class="w-40">Role</th>
                    </tr>
                </thead>

                <tbody class="bg-white w-40 text-center">
                    @foreach ( $users as $user )
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->libelle }}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>











    </div>
</x-app-layout>
