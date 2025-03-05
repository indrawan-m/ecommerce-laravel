<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                Product
              </h2>
              <p class="text-sm text-gray-600 dark:text-neutral-400">
                Add product, edit and more.
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <input type="text" wire:model="search" class="border p-2" placeholder="Search products...">


                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/add/product">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                  Add Product
                </a>
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
            <thead class="bg-gray-50 dark:bg-neutral-800">
              <tr>
                

                <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                  <div class="flex items-center gap-x-2 px-5 whitespace-nowrap">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Product Name
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Description
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      price
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Category
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Created
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-end"></th>
                <th scope="col" class="px-6 py-3 text-end"></th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              @foreach ($products as $product)
                
              <tr>           
                <td class="size-px whitespace-nowrap px-5">
                  <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                    <div class="flex items-center gap-x-3">
                      @if ($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="" class="inline-block size-[38px] rounded-lg">
                      @endif
                      <div class="grow">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $product->name }}</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-72 ">
                  <div class="px-6 py-3">
                    <span class="block text-sm text-justify text-gray-800 dark:text-neutral-200">{{ $product->description }}</span>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium  rounded-full dark:bg-teal-500/10 dark:text-teal-500"> 
                      {{ $product->price }}                  
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                      <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </svg>
                      {{ $product->category->name }}
                    </span>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-3">
                    <div class="flex items-center gap-x-3">
                      <span class="text-xs text-gray-500 dark:text-neutral-500">
                        {{ \Carbon\Carbon::parse($product->created_at)->locale('id')->isoFormat('ddd MMM YYYY, HH:mm') }}
                      </span>
                    </div>
                  </div>
                </td>
                
                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="/edit/{{$product->id}}/product">
                      Edit
                    </a>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <a wire:navigate wire:click="delete({{$product->id}})" wire:confirm="Are you sure? Type DELETE to confirm" class="inline-flex items-center gap-x-1 text-sm text-red-600 decoration-2 hover:underline focus:outline-none cursor-pointer focus:underline font-medium dark:text-blue-500">
                      Delete
                    </a>
                  </div>
                </td>
              </tr>

              @endforeach

            </tbody>
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
          <div class="mb-4">
              <label for="perPage" class="mr-2">per page:</label>
              <select wire:model="perPage" id="perPage" class="form-select">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
              </select>
          </div>


            <!-- Pagination -->
            <div class="">
                {{ $products->links() }}
            </div>
            
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->