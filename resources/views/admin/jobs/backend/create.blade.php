<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

  <div class="modal-container w-10/10 md:max-w-md mx-auto rounded z-50 overflow-y-auto">

    <!--Title-->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <form class="form" action="{{route('admin.jobs.store')}}" method="post">
            @csrf
            <div class="mt-4">
              <label for="GU" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Grade / University</label>
              <input type="text" name="GU" id="GU" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>

            <div class="mt-4">
              <label for="SC" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject / Code</label>
              <input type="text" name="SC" id="SC" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>

            <div class="mt-4">
            <label for="session_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Session Type</label>
              <select name="session_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required aria-label="Default select example">
                @foreach($sessions as $s)
                <option value="{{$s->type}}" required>{{$s->type}}</option>
                @endforeach
              </select>
            </div>

            <div class="mt-4">
              <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
              <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>

            <div class="mt-4">
              <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">City</label>
              <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>

            <div class="mt-4">
            <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Province</label>
              <select name="province" id="province"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"" aria-label="Default select example">
                
                <option >Gauteng</option>
                <option >Western Cape</option>

                
              </select>
            </div>

            <div class="mt-4">
              <label for="postcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Postal code</label>
              <input type="number" name="postcode" id="postcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>

            <div class="bg-gray-10 px-4 py-3 mt-2 sm:px-6 sm:flex sm:flex-row-reverse">
              <button type="button" class="modal-close w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
              </button>
              <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                Add
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>