<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Research Grants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('researchGrants.create') }}" class="btn btn-primary mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add Research Grant</a>
                    <table class="min-w-full table-auto bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-600 text-left text-sm text-gray-700 dark:text-gray-300">
                                <th class="px-6 py-3">Project Title</th>
                                <th class="px-6 py-3">Project Leader</th>
                                <th class="px-6 py-3">Grant Amount</th>
                                <th class="px-6 py-3">Start Date</th>
                                <th class="px-6 py-3">Duration (Months)</th>
                                <th class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($researchGrants as $grant)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $grant->project_title }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $grant->projectLeader->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">${{ number_format($grant->grant_amount, 2) }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ \Carbon\Carbon::parse($grant->start_date)->format('M d, Y') }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $grant->duration_months }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200 flex space-x-8">
                                        <a href="{{ route('researchGrants.show', $grant->id) }}" class="btn btn-info text-blue-600 hover:text-blue-800">View</a>
                                        <a href="{{ route('researchGrants.edit', $grant->id) }}" class="btn btn-warning text-yellow-600 hover:text-yellow-800">Edit</a>
                                        <form action="{{ route('researchGrants.destroy', $grant->id) }}" method="POST" style="display:inline-block">
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
