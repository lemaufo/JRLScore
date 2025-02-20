<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-600 dark:bg-blue-600 border border-transparent rounded-md font-semibold text-base text-white dark:text-white tracking-widest hover:bg-blue-400 dark:hover:bg-blue-400 focus:bg-blue-600 dark:focus:bg-blue-600 active:bg-blue-600 dark:active:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-blue-700 dark:focus:ring-offset-blue-700 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
