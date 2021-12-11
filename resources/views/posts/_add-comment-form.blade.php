@auth
                <x-panel>
                <form method="POST" action="/posts/{{$post->slug}}/comments" >
                @csrf
                <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full mr-4">
                <h2>Want to participate?</h2>
                </header>
                <div class="mt-6">
                <textarea name="body" class="w-full text=sm focus:outline-none focus:ring" cols="30" rows="5" required placeholder="Quick, thing of something to say!"></textarea>
                
                </div>
                @error('body')
                <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
                <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
               <x-submit-button>Post
               </x-submit-button>
                </div>
                </form>
                </x-panel>
                @else
                <p class="font-semibold">
                <a href="/register" class="hover:underline">Register</a> Or
                <a href="/login" class="hover:underline"> Login</a> to leave a comment!
                </p>
                @endauth