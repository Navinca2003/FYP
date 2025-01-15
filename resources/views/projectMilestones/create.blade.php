<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Project Milestone') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('projectMilestones.store') }}" method="POST">
                        @csrf

                        <!-- Research Grant Field -->
<div class="mb-6">
    <label for="research_grant_id" class="block font-bold text-lg text-white">Research Grant</label>
    <select name="research_grant_id" id="research_grant_id" class="form-select block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
        @forelse ($researchGrants as $grant)
            <option value="{{ $grant->id }}">{{ $grant->project_title }}</option>
        @empty
            <option value="" disabled>No Research Grants available</option>
        @endforelse
    </select>
    @error('research_grant_id')
        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
    @enderror
</div>


                        <!-- Milestone Name Field -->
                        <div class="mb-6">
                            <label for="milestone_name" class="block font-bold text-lg text-white">Milestone Name</label>
                            <input type="text" name="milestone_name" id="milestone_name" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-white dark:bg-gray-600 dark:text-white border border-gray-300 dark:border-gray-500" required>
                            @error('milestone_name')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Target Completion Date Field -->
                        <div class="mb-6">
                            <label for="target_completion_date" class="block font-bold text-lg text-white">Target Completion Date</label>
                            <input type="date" name="target_completion_date" id="target_completion_date" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-white dark:bg-gray-600 dark:text-white border border-gray-300 dark:border-gray-500" required>
                            @error('target_completion_date')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deliverable Field -->
                        <div class="mb-6">
                            <label for="deliverable" class="block font-bold text-lg text-white">Deliverable</label>
                            <textarea name="deliverable" id="deliverable" rows="3" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-white dark:bg-gray-600 dark:text-white border border-gray-300 dark:border-gray-500" required></textarea>
                            @error('deliverable')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status Field -->
                        <div class="mb-6">
                            <label for="status" class="block font-bold text-lg text-white">Status</label>
                            <select name="status" id="status" class="form-select block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                                <option value="Not Started">Not Started</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                            @error('status')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remark Field -->
                        <div class="mb-6">
                            <label for="remark" class="block font-bold text-lg text-white">Remarks (Optional)</label>
                            <textarea name="remark" id="remark" rows="3" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-white dark:bg-gray-600 dark:text-white border border-gray-300 dark:border-gray-500"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-green-500 via-teal-500 to-blue-500 text-white rounded-lg shadow-md font-semibold text-lg hover:from-green-600 hover:via-teal-600 hover:to-blue-600 transform transition duration-300">
                                Save Milestone
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
