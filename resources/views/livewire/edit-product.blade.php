<div>

    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-900">
            <form wire:submit="update">
            <!-- Section -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-400 dark:border-neutral-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    Edit Product
                </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                    Product Name
                </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input wire:model="product_name" id="af-submit-application-name" type="text" class="py-2 px-3 pe-11 block w-full border border-gray-400 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    @error('product_name')
                        <span class="text-red-500 text-xs">{{$message}}</span>
                    @enderror               
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                <label for="af-submit-application-price" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                    Price
                </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input wire:model="product_price" id="af-submit-application-price" type="number" class="py-2 px-3 pe-11 block w-full border border-gray-400 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    @error('product_price')
                        <span class="text-red-500 text-xs">{{$message}}</span>
                    @enderror
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                        <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                            Category
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
						<select wire:model="category_id" class="border border-gray-400 py-3 px-4 pe-9 block w-full rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
							<option selected="">Select Product Category</option>
							@foreach ($all_categories as $category)
								<option value="{{ $category->id }}" wire:key="{{ $category->id }}" {{ $product_details->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
							@endforeach
							
						</select>
						@error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
					</div>
                <!-- End Col -->
                
            </div>
            <!-- End Section -->

            <!-- Section -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-400 dark:border-neutral-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                    More Details
                </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                <label for="file" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                    Product Image
                </label>
                </div>
                <!-- End Col -->

               
                
                <div class="sm:col-span-8">
                    <label for="file" class="sr-only">Choose file</label>
                    <input wire:model="photo" type="file"  id="file" class="block w-full border border-gray-400 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-gray-50 file:border-0 file:bg-gray-100 file:me-4 file:py-2 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400">
                    @error('photo') <span class="text-red-500">{{ $message }}</span> @enderror

                </div>

                <div class="sm:col-span-1"> 
                @if (is_string($photo))
                    <img src="{{ Storage::url($photo) }}" alt="Product Image" class="size-9">
                @elseif ($photo)
                    <img src="{{ $photo->temporaryUrl() }}" alt="Product Image" class="size-9">
                @else
                <img src="{{ asset('default-image.jpg') }}" alt="default image" class="size-9">
                @endif

                </div>  

                <!-- End Col -->

                <div class="sm:col-span-3">
                        <div class="inline-block">
                            <label for="af-submit-application-bio" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Product description
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <textarea id="af-submit-application-bio" wire:model="product_description" class="border border-gray-400 py-2 px-3 block w-full rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" rows="6" placeholder="Add a product description here!"></textarea>
						@error('product_description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
					</div>
                <!-- End Col -->
            </div>
            <!-- End Section -->


            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Update
            </button>
            </form>
        </div>
        <!-- End Card -->
        </div>
    <!-- End Card Section -->
</div>
