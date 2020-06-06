<x-layout title="Comment Edit">
    <x-section>
        <x-form 
            method="PATCH"
            action="/blade-components-cookbook-ep3/comments/{{ $comment->id }}" 
            class="bg-red-400"
            >

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Body
                </label>
                <textarea name="body" id="body" class="border border-gray-400 p-2 w-full">{{ $comment->body }}</textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Submit         
                </button>
            </div>
    	</x-form>
        
        <x-form-button 
            method="DELETE"
            action="/blade-components-cookbook-ep3/comments/{{ $comment->id }}"
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
        >
            Delete
        </x-form-button>
    </x-section>
</x-layout>