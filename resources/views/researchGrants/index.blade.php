<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Members') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-green-100 via-yellow-100 to-red-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Add/Update Project Member Button -->
                    <a href="{{ route('projectMembers.create') }}" class="inline-block bg-gradient-to-r from-indigo-500 to-purple-500 text-white py-2 px-6 rounded-md shadow-md text-lg font-semibold hover:bg-indigo-600 transition duration-300 mb-6">
                        Add/Update Project Member
                    </a>

                    @forelse($researchGrants as $grant)
                        <div class="mb-6 border-b border-gray-300 dark:border-gray-600 pb-4">
                            <!-- Link to view the specific research grant -->
                            <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200 mb-2">
                                <a href="{{ route('researchGrants.show', $grant->id) }}" class="hover:text-indigo-500">
                                    {{ $grant->project_title }}
                                </a>
                            </h3>

                            <!-- Display the Project Leader -->
                            <div class="mb-4">
                                <strong>Project Leader:</strong>
                                <span class="text-gray-900 dark:text-gray-100">{{ $grant->projectLeader->name }}</span>
                            </div>

                            <!-- Check if there are project members excluding the leader -->
                            @if($grant->projectMembers->where('id', '!=', $grant->projectLeader->id)->count() > 0)
                                <table class="min-w-full table-auto bg-gray-50 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                                    <thead class="bg-gradient-to-r from-yellow-400 to-red-500 text-white">
                                        <tr>
                                            <th class="px-6 py-3 text-sm">Name</th>
                                            <th class="px-6 py-3 text-sm">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-800 dark:text-gray-200">
                                        @foreach($grant->projectMembers as $member)
                                            @if ($member->id != $grant->projectLeader->id)
                                                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-600 transition duration-200">
                                                    <td class="px-6 py-4 text-sm">{{ $member->name }}</td>
                                                    <td class="px-6 py-4 text-sm">
                                                        <div class="flex space-x-6">
                                                            <!-- Edit Button -->
                                                            <a href="{{ route('academicians.edit', $member->id) }}" class="bg-gradient-to-r from-green-400 to-green-500 text-white py-2 px-4 rounded-md shadow-md text-sm font-medium hover:bg-green-600 transition duration-300">
                                                                Edit
                                                            </a>
                                                            <!-- Delete Button -->
                                                            <form action="{{ route('projectMembers.destroy', $member->pivot->id) }}" method="POST" style="display:inline-block" class="text-sm">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="bg-gradient-to-r from-red-400 to-red-500 text-white py-2 px-4 rounded-md shadow-md font-medium hover:bg-red-600 transition duration-300" onclick="return confirm('Are you sure?')">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="text-sm text-gray-500 dark:text-gray-400">No project members added yet.</p>
                            @endif
                        </div>
                    @empty
                        <p class="text-sm text-gray-500 dark:text-gray-400">No research grants available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
