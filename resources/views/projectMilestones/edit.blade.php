<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Project Milestone') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('projectMilestones.update', $projectMilestone->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="research_grant_id" class="block font-medium text-sm text-white">Research Grant</label>
                            <select name="research_grant_id" id="research_grant_id" class="form-select rounded-md shadow-sm mt-1 block w-full text-black" required>
                                @forelse ($researchGrants as $grant)
                                    <option value="{{ $grant->id }}" @selected($grant->id == $projectMilestone->research_grant_id)>{{ $grant->project_title }}</option>
                                @empty
                                    <option value="" disabled>No Research Grants available</option>
                                @endforelse
                            </select>
                            @error('research_grant_id')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="milestone_name" class="block font-medium text-sm text-white">Milestone Name</label>
                            <input type="text" name="milestone_name" id="milestone_name" value="{{ old('milestone_name', $projectMilestone->milestone_name) }}" class="form-input rounded-md shadow-sm mt-1 block w-full text-black" required>
                            @error('milestone_name')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="target_completion_date" class="block font-medium text-sm text-white">Target Completion Date</label>
                            <input type="date" name="target_completion_date" id="target_completion_date" value="{{ old('target_completion_date', $projectMilestone->target_completion_date) }}" class="form-input rounded-md shadow-sm mt-1 block w-full text-black" required>
                            @error('target_completion_date')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="deliverable" class="block font-medium text-sm text-white">Deliverable</label>
                            <textarea name="deliverable" id="deliverable" rows="3" class="form-input rounded-md shadow-sm mt-1 block w-full text-black" required>{{ old('deliverable', $projectMilestone->deliverable) }}</textarea>
                            @error('deliverable')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block font-medium text-sm text-white">Status</label>
                            <select name="status" id="status" class="form-select rounded-md shadow-sm mt-1 block w-full text-black" required>
                                <option value="Not Started" @selected($projectMilestone->status == 'Not Started')>Not Started</option>
                                <option value="In Progress" @selected($projectMilestone->status == 'In Progress')>In Progress</option>
                                <option value="Completed" @selected($projectMilestone->status == 'Completed')>Completed</option>
                            </select>
                            @error('status')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="remark" class="block font-medium text-sm text-white">Remarks (Optional)</label>
                            <textarea name="remark" id="remark" rows="3" class="form-input rounded-md shadow-sm mt-1 block w-full text-black">{{ old('remark', $projectMilestone->remark) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-green-500 via-teal-500 to-blue-500 text-white rounded-lg shadow-md font-semibold text-lg hover:from-green-600 hover:via-teal-600 hover:to-blue-600 transform transition duration-300">
                                Update Milestone
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
