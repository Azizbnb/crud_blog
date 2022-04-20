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
            <p class="font-semibold text-xl">modifier le profil de {{ $user->name }}</p>
           <form action="{{ route('admin.update', $user->id) }}" method="POST" class="">
            @csrf
            @method('PATCH')
            @include('roles.admin.edit.form')
            <button type="submit" class="bg-indigo-600 text-gray-900">
                enregistrer
            </button>
           </form>

        </div>











    </div>
</x-app-layout>
