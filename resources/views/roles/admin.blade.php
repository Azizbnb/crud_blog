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
                        <th class="w-40">Edit</th>

                    </tr>
                </thead>

                <tbody class="bg-white w-40 text-center overflow-y-scroll">
                    @foreach ( $users as $user )
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->libelle }}</td>
                        <td class="flex justify-center">
                            <a  href="{{ route('admin.edit', $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>

                            <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" onclick="return confirm('etes-vous sur de bien vouloir supprimer ?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>

                        </td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>











    </div>
</x-app-layout>
