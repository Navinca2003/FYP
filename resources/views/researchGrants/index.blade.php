<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Research Grants') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-green-100 via-yellow-100 to-red-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Add Research Grant Button -->
                    <a href="{{ route('researchGrants.create') }}" class="inline-block bg-gradient-to-r from-indigo-500 to-purple-500 text-white py-2 px-6 rounded-md shadow-md text-lg font-semibold hover:bg-indigo-600 transition duration-300 mb-6">
                        Add Research Grant
                    </a>
                    <!-- Research Grant Table -->
                    <table class="min-w-full table-auto bg-gray-50 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                        <thead class="bg-gradient-to-r from-yellow-400 to-red-500 text-white">
                            <tr>
                                <th class="px-6 py-3 text-sm">Project Title</th>
                                <th class="px-6 py-3 text-sm">Project Leader</th>
                                <th class="px-6 py-3 text-sm">Grant Amount</th>
                                <th class="px-6 py-3 text-sm">Start Date</th>
                                <th class="px-6 py-3 text-sm">Duration (Months)</th>
                                <th class="px-6 py-3 text-sm">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800 dark:text-gray-200">
                            @foreach ($researchGrants as $grant)
                                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-200">
                                    <td class="px-6 py-4 text-sm">{{ $grant->project_title }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $grant->projectLeader->name }}</td>
                                    <td class="px-6 py-4 text-sm">${{ number_format($grant->grant_amount, 2) }}</td>
                                    <td class="px-6 py-4 text-sm">{{ \Carbon\Carbon::parse($grant->start_date)->format('M d, Y') }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $grant->duration_months }}</td>
                                    <td class="px-6 py-4 text-sm flex space-x-6">
                                        <!-- View Button -->
                                        <a href="{{ route('researchGrants.show', $grant->id) }}" class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-white py-2 px-4 rounded-md shadow-md text-sm font-medium hover:bg-yellow-600 transition duration-300">
                                            View
                                        </a>
                                        <!-- Edit Button -->
                                        <a href="{{ route('researchGrants.edit', $grant->id) }}" class="bg-gradient-to-r from-green-400 to-green-500 text-white py-2 px-4 rounded-md shadow-md text-sm font-medium hover:bg-green-600 transition duration-300">
                                            Edit
                                        </a>
                                        <!-- Delete Button -->
                                        <form action="{{ route('researchGrants.destroy', $grant->id) }}" method="POST" style="display:inline-block" class="text-sm">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-gradient-to-r from-red-400 to-red-500 text-white py-2 px-4 rounded-md shadow-md font-medium hover:bg-red-600 transition duration-300" onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
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
