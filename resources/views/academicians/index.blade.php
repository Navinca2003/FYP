<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Academicians') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('academicians.create') }}" class="btn btn-primary mb-4">Add Academician</a>
                    <table class="min-w-full table-auto bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-600 text-left text-sm text-gray-700 dark:text-gray-300">
                                <th class="px-6 py-3">Name</th>
                                <th class="px-6 py-3">Staff Number</th>
                                <th class="px-6 py-3">Email</th>
                                <th class="px-6 py-3">College</th>
                                <th class="px-6 py-3">Department</th>
                                <th class="px-6 py-3">Position</th>
                                <th class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($academicians as $academician)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->staff_number }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->email }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->college }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->department }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $academician->position }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200 flex space-x-8">
                                        <a href="{{ route('academicians.show', $academician->id) }}" class="btn btn-info text-blue-600 hover:text-blue-800">View</a>
                                        <a href="{{ route('academicians.edit', $academician->id) }}" class="btn btn-warning text-yellow-600 hover:text-yellow-800">Edit</a>
                                        <form action="{{ route('academicians.destroy', $academician->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
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
