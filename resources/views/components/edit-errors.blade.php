<div>
    @error('movie_name')
    <div class="absolute top-0 right-0 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 w-fit">
        <p>¡Error! <span class="text-slate-300">{{ $message }}</span></p>
    </div>
    @enderror
    @error('genre')
    <div class="absolute top-0 right-0 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 w-fit">
        <p>¡Error! <span class="text-slate-300">{{ $message }}</span></p>
    </div>
    @enderror
    @error('duration')
    <div class="absolute top-0 right-0 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 w-fit">
        <p>¡Error! <span class="text-slate-300">{{ $message }}</span></p>
    </div>
    @enderror
    @error('director')
    <div class="absolute top-0 right-0 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 w-fit">
        <p>¡Error! <span class="text-slate-300">{{ $message }}</span></p>
    </div>
    @enderror
</div>
