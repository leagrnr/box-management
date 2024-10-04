<div id="addBoxModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
        <h2 class="text-xl font-bold mb-4">{{ __('Ajouter un box') }}</h2>
        <form method="POST" action="{{ route('boxes.store') }}">
            @csrf
            <div class="mb-4">
                <label for="box_number" class="block text-gray-700">{{ __('Numéro du box') }}</label>
                <input type="text" id="box_number" name="box_number" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700">{{ __('Etat') }}</label>
                <select id="status" name="status" class="w-full border-gray-300 rounded-md shadow-sm" onchange="toggleTenantNameInput()">
                    <option value="libre">{{ __('libre') }}</option>
                    <option value="occupé">{{ __('occupé') }}</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tenant_name" class="block text-gray-700">{{ __('Nom du locataire') }}</label>
                <input type="text" id="tenant_name" name="tenant_name" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="surface" class="block text-gray-700">{{ __('Surface') }}</label>
                <input type="text" id="surface" name="surface" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="price_per_month" class="block text-gray-700">{{ __('Prix par mois') }}</label>
                <input type="text" id="price_per_month" name="price_per_month" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700">{{ __('Localisation') }}</label>
                <input type="text" id="location" name="location" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2" onclick="closeModal()">{{ __('Annuler') }}</button>
                <button type="submit" class="bg-blue-800 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded">{{ __('Sauvegarder') }}</button>
            </div>
        </form>
    </div>
</div>

<div id="editBoxModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
        <h2 class="text-xl font-bold mb-4">{{ __('Modifier un box') }}</h2>
        <form method="POST" action="" id="editBoxForm">
            @csrf
            @method('PATCH')
            <input type="hidden" id="edit_box_id" name="box_id">
            <div class="mb-4">
                <label for="edit_box_number" class="block text-gray-700">{{ __('Numéro du box') }}</label>
                <input type="text" id="edit_box_number" name="box_number" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="edit_status" class="block text-gray-700">{{ __('Etat') }}</label>
                <select id="edit_status" name="status" class="w-full border-gray-300 rounded-md shadow-sm">
                    <option value="libre">{{ __('libre') }}</option>
                    <option value="occupé">{{ __('occupé') }}</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="edit_tenant_name" class="block text-gray-700">{{ __('Nom du locataire') }}</label>
                <input type="text" id="edit_tenant_name" name="tenant_name" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="edit_surface" class="block text-gray-700">{{ __('Surface') }}</label>
                <input type="text" id="edit_surface" name="surface" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="edit_price_per_month" class="block text-gray-700">{{ __('Prix par mois') }}</label>
                <input type="text" id="edit_price_per_month" name="price_per_month" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="edit_location" class="block text-gray-700">{{ __('Localisation') }}</label>
                <input type="text" id="edit_location" name="location" class="w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2" onclick="closeEditModal()">{{ __('Annuler') }}</button>
                <button type="submit" class="bg-blue-800 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded">{{ __('Sauvegarder') }}</button>
            </div>
        </form>
    </div>
</div>
