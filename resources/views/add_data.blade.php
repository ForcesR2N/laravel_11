<x-admin-layout>
    <x-slot name="title">
        Add New Student
    </x-slot>

    <div class="bg-white rounded-lg shadow">
        <div class="p-4 border-b flex justify-between items-center">
            <h2 class="text-xl font-semibold">Add New Student</h2>
        </div>

        <div class="p-4">
            <form class="max-w-3xl mx-auto">
                <!-- Name Field -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs uppercase font-medium mb-2" for="name">
                        Name
                    </label>
                    <input type="text"
                           id="name"
                           name="name"
                           class="w-full px-6 py-3 border rounded bg-gray-50 text-sm text-gray-500 focus:outline-none focus:border-blue-500"
                           placeholder="Enter student's name">
                </div>

                <!-- Grade Field -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs uppercase font-medium mb-2" for="grade">
                        Grade
                    </label>
                    <select id="grade_student"
                            name="grade_student_id"
                            class="w-full px-6 py-3 border rounded bg-gray-50 text-sm text-gray-500 focus:outline-none focus:border-blue-500">
                        <option value="">Select Grade</option>
                        @foreach($grade_students as $grade_student)
                            <option value="{{ $grade_student->id }}">{{ $grade_student->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Department Field -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs uppercase font-medium mb-2" for="department">
                        Department
                    </label>
                    <select id="department"
                            name="department_id"
                            class="w-full px-6 py-3 border rounded bg-gray-50 text-sm text-gray-500 focus:outline-none focus:border-blue-500">
                        <option value="">Select Department</option>
                        @foreach($departmens as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs uppercase font-medium mb-2" for="email">
                        Email
                    </label>
                    <input type="email"
                           id="email"
                           name="email"
                           class="w-full px-6 py-3 border rounded bg-gray-50 text-sm text-gray-500 focus:outline-none focus:border-blue-500"
                           placeholder="Enter email address">
                </div>

                <!-- Address Field -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-xs uppercase font-medium mb-2" for="address">
                        Address
                    </label>
                    <textarea id="address"
                             name="address"
                             rows="3"
                             class="w-full px-6 py-3 border rounded bg-gray-50 text-sm text-gray-500 focus:outline-none focus:border-blue-500"
                             placeholder="Enter address"></textarea>
                </div>

                <!-- Button Group -->
                <div class="flex justify-end space-x-2 mt-6">
                    <a href='admin/student'
                       class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
                        Cancel
                    </a>
                    <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
