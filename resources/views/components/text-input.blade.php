@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-slate-900 dark:border-slate-900 bg-slate-900 dark:bg-slate-900 text-gray-400 dark:text-gray-400 focus:border-blue-600 dark:focus:border-blue-600 focus:ring-blue-600 dark:focus:ring-blue-600 rounded-md shadow-sm']) }}>
