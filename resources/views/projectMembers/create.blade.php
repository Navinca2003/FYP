<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Project Member') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('projectMembers.store') }}" method="POST">
                        @csrf

                        <!-- Research Grant Dropdown -->
                        <div class="mb-6">
                            <label for="research_grant_id" class="block font-bold text-lg text-white">Research Grant</label>
                            <select name="research_grant_id" id="research_grant_id" class="form-select block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700" required>
                                <option value="">Select Research Grant</option>
                                @foreach ($researchGrants as $grant)
                                    <option value="{{ $grant->id }}" data-project-leader="{{ $grant->projectLeader->name }}">
                                        {{ $grant->project_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Selected Project -->
                        @if ($selectedGrant)
                            <div class="mb-6">
                                <strong class="block font-bold text-lg text-white">Selected Project:</strong>
                                <span class="block text-black dark:text-gray-200">{{ $selectedGrant->project_title }}</span>
                            </div>
                        @endif

                        <!-- Project Leader -->
                        <div class="mb-6">
                            <label for="project_leader" class="block font-bold text-lg text-white">Project Leader</label>
                            <input type="text" name="project_leader" id="project_leader" class="form-input block w-full mt-2 rounded-lg shadow-md text-black bg-white dark:bg-gray-600 dark:text-white border border-gray-300 dark:border-gray-500" readonly>
                        </div>

                        <!-- Project Members Dropdown -->
                        <div class="mb-6" id="members-section" style="display: none;">
                            <label for="academicians" class="block font-bold text-lg text-white">Project Members</label>
                            <select name="academicians[]" id="academicians" multiple class="form-select block w-full mt-2 rounded-lg shadow-md text-black bg-gradient-to-r from-white to-gray-200 dark:from-gray-800 dark:to-gray-700">
                                @foreach ($academicians as $academician)
                                    <option value="{{ $academician->id }}" class="member-option">{{ $academician->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-green-500 via-teal-500 to-blue-500 text-white rounded-lg shadow-md font-semibold text-lg hover:from-green-600 hover:via-teal-600 hover:to-blue-600 transform transition duration-300">
                                Add Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to dynamically update the project leader and toggle the members section -->
    <script>
        document.getElementById('research_grant_id').addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const projectLeaderName = selectedOption.getAttribute('data-project-leader');
            const projectLeaderInput = document.getElementById('project_leader');
            const membersSection = document.getElementById('members-section');
            const membersSelect = document.getElementById('academicians');

            projectLeaderInput.value = projectLeaderName || '';

            if (this.value) {
                membersSection.style.display = 'block';
            } else {
                membersSection.style.display = 'none';
            }

            const options = membersSelect.querySelectorAll('option');
            options.forEach(option => {
                option.style.display = option.text === projectLeaderName ? 'none' : 'block';
            });

            membersSelect.selectedIndex = -1;
        });
    </script>
</x-app-layout>
