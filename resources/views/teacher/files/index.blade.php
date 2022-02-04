<x-teacher-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    </h2>
  </x-slot>

  <div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden sm:rounded-lg">

        <!-- component -->


        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-2 overflow-x-auto">
          <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
              <thead>
                <tr>
                  <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    File Name
                  </th>
                  <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                  </th>
                  <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                  </th>
                  <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                  </th>
                  <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 w-10 h-10">
                        <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/000000/external-file-multimedia-kiranshastry-lineal-kiranshastry-2.png" alt="" />
                      </div>
                      <div class="ml-3">
                        <p class="text-gray-900 whitespace-no-wrap">
                          cv
                        </p>
                      </div>
                    </div>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap"></p>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">

                    </p>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">

                    </p>
                  </td>

                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <form action="#" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="text-red-600 hover:text-indigo-900 flex-shrink-0 w-10 h-10" onclick="return confirm('Are you sure you want to delete this')"><img src="https://img.icons8.com/plasticine/100/000000/filled-trash.png" /></button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>


</x-teacher-layout>