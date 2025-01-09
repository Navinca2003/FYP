<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Page Background with Gradient Colors -->
    <div class="py-12" style="background: linear-gradient(to right, #ff6a00, #ee0979, #ffb199, #f6d02f); min-height: 100vh;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Academicians Section -->
            <div class="bg-blue-500 text-white shadow-md rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-black">Manage Academicians</h3>
                    <p class="text-sm mt-2 mb-4 text-black">
                        Access and manage all academicians with ease.
                    </p>
                    <a href="{{ route('academicians.index') }}" 
                       class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">
                        Go to Academicians
                    </a>
                </div>
            </div>

            <!-- Research Grants Section -->
            <div class="bg-yellow-500 text-gray-900 shadow-md rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-black">Manage Research Grants</h3>
                    <p class="text-sm mt-2 mb-4 text-black">
                        Track and organize your research grants efficiently.
                    </p>
                    <a href="{{ route('researchGrants.index') }}" 
                       class="px-4 py-2 bg-yellow-600 text-white font-semibold rounded hover:bg-yellow-700">
                        Go to Research Grants
                    </a>
                </div>
            </div>

            <!-- Project Milestones Section -->
            <div class="bg-red-500 text-white shadow-md rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-black">Manage Project Milestones</h3>
                    <p class="text-sm mt-2 mb-4 text-black">
                        Keep track of milestones and project timelines.
                    </p>
                    <a href="{{ route('projectMilestones.index') }}" 
                       class="px-4 py-2 bg-red-600 text-white font-semibold rounded hover:bg-red-700">
                        Go to Milestones
                    </a>
                </div>
            </div>

            <!-- Project Members Section -->
            <div class="bg-green-500 text-white shadow-md rounded-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-black">Manage Project Members</h3>
                    <p class="text-sm mt-2 mb-4 text-black">
                        Add, edit, or remove project members with ease.
                    </p>
                    <a href="{{ route('projectMembers.index') }}" 
                       class="px-4 py-2 bg-green-600 text-white font-semibold rounded hover:bg-green-700">
                        Go to Members
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
