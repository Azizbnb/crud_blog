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


        <div class="w-1/2 mx-auto pt-24">
            <a href="{{ route('admin.index') }}" class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </a>
            <p class="font-semibold text-xl mt-4">modifier le profil de {{ $user->name }}</p>
           <form action="{{ route('admin.update', $user->id) }}" method="POST" class="w-2/3 mx-auto mt-4">
                @csrf
                @method('PATCH')
                @include('roles.admin.edit.form')
                <button type="submit" class="mt-4 px-6 py-2 bg-green-400 text-white rounded-lg">
                    enregistrer
                </button>
           </form>

        </div>











    </div>
</x-app-layout>
