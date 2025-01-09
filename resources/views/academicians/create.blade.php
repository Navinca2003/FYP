<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Academician') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('academicians.store') }}" method="POST">
                        @csrf

                        <!-- User Dropdown -->
                        <div class="mb-6">
                            <label for="name" class="block font-bold text-lg text-white">Select User</label>
                            <select name="users_id" id="name" class="form-select block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                                <option value="" disabled selected>Select a name</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" data-email="{{ $user->email }}" data-name="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Name Field -->
<div class="mb-6">
    <label for="selected_name" class="block font-bold text-lg text-white">Selected Name</label>
    <input type="text" name="name" id="selected_name" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-white dark:bg-gray-600 dark:text-white border border-gray-300 dark:border-gray-500" required readonly>
</div>

<!-- Email Field -->
<div class="mb-6">
    <label for="email" class="block font-bold text-lg text-white">Email</label>
    <input type="email" name="email" id="email" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-white dark:bg-gray-600 dark:text-white border border-gray-300 dark:border-gray-500" required readonly>
</div>

                        <!-- Staff Number Field -->
                        <div class="mb-6">
                            <label for="staff_number" class="block font-bold text-lg text-white">Staff Number</label>
                            <input type="text" name="staff_number" id="staff_number" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                        </div>

                        <!-- College Field -->
                        <div class="mb-6">
                            <label for="college" class="block font-bold text-lg text-white">College</label>
                            <input type="text" name="college" id="college" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                        </div>

                        <!-- Department Field -->
                        <div class="mb-6">
                            <label for="department" class="block font-bold text-lg text-white">Department</label>
                            <input type="text" name="department" id="department" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                        </div>

                        <!-- Position Dropdown -->
                        <div class="mb-6">
                            <label for="position" class="block font-bold text-lg text-white">Position</label>
                            <select name="position" id="position" class="form-select block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                                <option value="Professor">Professor</option>
                                <option value="Associate Professor">Associate Professor</option>
                                <option value="Senior Lecturer">Senior Lecturer</option>
                                <option value="Lecturer">Lecturer</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-green-500 via-teal-500 to-blue-500 text-white rounded-lg shadow-md font-semibold text-lg hover:from-green-600 hover:via-teal-600 hover:to-blue-600 transform transition duration-300">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to dynamically update name and email fields based on selected user -->
    <script>
        document.getElementById('name').addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const name = selectedOption.getAttribute('data-name');
            const email = selectedOption.getAttribute('data-email');

            document.getElementById('selected_name').value = name;
            document.getElementById('email').value = email;
        });
    </script>
</x-app-layout>
