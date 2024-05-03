<div>
    @error('movie_name')
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">¡Error!</span> {{ $message }}
    </div>
    @enderror
    @error('genre')
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">¡Error!</span> {{ $message }}
    </div>
    @enderror
    @error('duration')
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">¡Error!</span> {{ $message }}
    </div>
    @enderror
    @error('director')
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">¡Error!</span> {{ $message }}
    </div>
    @enderror
</div>