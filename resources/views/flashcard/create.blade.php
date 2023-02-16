<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            単語帳の作成
        </h2>
		<x-message :message="session('message')" />
		<x-input-error class="mb-4" :messages="$errors->all()"/>
    </x-slot>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">
                <form method="POST" action="{{route('flashcard.store')}}">
				@csrf
                    <div class="md:flex items-center mt-8">
                        <div class="w-full flex flex-col">
                        <label for="body" class="font-semibold leading-none mt-4">件名</label>
                        <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" 
							id="name" placeholder="Enter Name" value ="{{ old('name') }}">
                        </div>
                    </div>

                    <x-primary-button class="mt-4">
                        送信する
                    </x-primary-button>
                    
                </form>
            </div>
        </div>

</x-app-layout>
