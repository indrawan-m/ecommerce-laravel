<section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:items-center">
    <div class="mx-auto max-w-xl text-center">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        Online Marketplace
        <strong class="font-extrabold text-red-700 sm:block text-3xl"> Discovery Quality Products Online Now </strong>
      </h1>

      <p class="mt-4 sm:text-xl/relaxed">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
        numquam ea!
      </p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        @if (auth()->check())
          <a
            class="block w-full rounded-sm bg-red-600 px-12 py-3 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:ring-3 focus:outline-hidden sm:w-auto"
            href="/offer"
          >
            Reedeem your offer Now!
          </a>  

        @else
          <a
            class="block w-full rounded-sm bg-red-600 px-12 py-3 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:ring-3 focus:outline-hidden sm:w-auto"
            href="/auth/login"
          >
            Get Started
          </a>        
        @endif
        

        <a
          class="block w-full rounded-sm px-12 py-3 text-sm font-medium text-red-600 shadow-sm hover:text-red-700 focus:ring-3 focus:outline-hidden sm:w-auto"
          href="#"
        >
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>