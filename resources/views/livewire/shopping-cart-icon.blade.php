<a wire:navigate href="{{ route('shopping-cart') }}" class="relative">
<svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6"><path d="M29.986 24.765l-1.782-15a2 2 0 00-2-1.765H22a6 6 0 00-12 0H5.791a2 2 0 00-2 1.765l-1.782 15a2 2 0 001.169 2.057c.258.117.539.177.822.178h23.99a2.018 2.018 0 001.51-.675 2 2 0 00.486-1.56zM16 4a4 4 0 014 4h-8a4 4 0 014-4zM4 25l1.791-15H10v3a1 1 0 102 0v-3h8v3a1 1 0 102 0v-3h4.219l1.771 15H4z" fill="#000"></path></svg>

      <span class="absolute top-[3px] -right-2 inline-flex items-center text-[10px] justify-center w-4 h-4 text-center text-white bg-red-600 rounded-full">
    {{ $cartCount }}
</span>

</a>

