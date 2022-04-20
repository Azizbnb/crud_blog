<div class="col-span-6 sm:col-span-3">
    <label for="nom" class="block text-sm font-medium text-gray-700">Nom complet</label>
    <input type="text" name="name" id="name" autocomplete="family-name" value="{{ old('name') ?? $user->name }}"
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
</div>

<div class="col-span-6 sm:col-span-4">
    <label for="email" class="block text-sm font-medium text-gray-700">
        Adresse e-mail
    </label>
    <input type="text" name="email" id="email" autocomplete="email" value="{{ old('email') ?? $user->email }}"
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
</div>

<div class="col-span-6 sm:col-span-3">
    <label for="role_id" class="block text-sm font-medium text-gray-700">Rôle</label>
    <select id="role_id" name="role_id" autocomplete="role_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
    focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option selected>...</option>
        @foreach ($roles as $role)
            <option value="{{ old('role_id') ?? $user->role_id }}" @if ($user->role_id === $role->id) selected='selected' @endif>{{ $role->libelle }}</option>
        @endforeach
    </select>
</div>
