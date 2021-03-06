<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobs') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                  <!-- This example requires Tailwind CSS v2.0+ -->
                  <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Grade / University
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Subject / University
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Type
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Address
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                City
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Province
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Postal Code
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Apply</span>
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse($jobs as $j)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$j->GU}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$j->SC}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    {{$j->session_type}}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$j->address}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$j->city}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$j->province}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$j->postcode}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium ">
                                                <a href="#" class="modal-open text-indigo-600 hover:text-indigo-900 rounded-full bg-blue-100 text-blue-900">Apply</a>
                                            </td>
                                            
                                        </tr>

                                        @empty
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">No Jobs</td>
                                            <td class="px-6 py-4 whitespace-nowrap"></td>
                                            <td class="px-6 py-4 whitespace-nowrap"></td>
                                            <td class="px-6 py-4 whitespace-nowrap"></td>
                                            <td class="px-6 py-4 whitespace-nowrap"></td>
                                            <td class="px-6 py-4 whitespace-nowrap"></td>
                                            <td class="px-6 py-4 whitespace-nowrap"></td>
                                            <td class="px-6 py-4 whitespace-nowrap"></td>
                                        </tr>
                                        @endforelse

                                        <!-- More people... -->
                                    </tbody>
                                </table>
                                @include("teacher.apply.create")
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-teacher-layout>