<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <!-- Buttons to link to academicians, research grants, project milestones, and project members -->
                    <div class="mt-6 space-x-4">
                        <a href="{{ route('academicians.index') }}" class="btn btn-primary">Manage Academicians</a>
                        <a href="{{ route('researchGrants.index') }}" class="btn btn-primary">Manage Research Grants</a>
                        <a href="{{ route('projectMilestones.index') }}" class="btn btn-primary">Manage Project Milestones</a>
                        <a href="{{ route('projectMembers.index') }}" class="btn btn-primary">Manage Project Members</a> <!-- Added button -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
