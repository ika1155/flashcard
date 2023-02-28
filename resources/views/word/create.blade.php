<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        	{{$flashcard->name}}: 単語の追加
        </h2>
		<x-message :message="session('message')" />
		<x-input-error class="mb-4" :messages="$errors->all()"/>
    </x-slot>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-4 sm:p-8">
                <form method="POST" action="{{route('word.store')}}">
					@csrf
					<div class="form-group mb-6">
						<label for="a_side" class="form-label inline-block mb-2 text-gray-700">表</label>
						<input type="text" class="form-control
							block
							w-full
							px-3
							py-1.5
							text-base
							font-normal
							text-gray-700
							bg-white bg-clip-padding
							border border-solid border-gray-300
							rounded
							transition
							ease-in-out
							m-0
							focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
							name="a_side" placeholder="Enter Word" value="{{old('a_side')}}">
					</div>
					<div class="form-group mb-6">
						<label for="b_side" class="form-label inline-block mb-2 text-gray-700">裏</label>
						<input type="text" class="form-control
							block
							w-full
							px-3
							py-1.5
							text-base
							font-normal
							text-gray-700
							bg-white bg-clip-padding
							border border-solid border-gray-300
							rounded
							transition
							ease-in-out
							m-0
							focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
							name="b_side" placeholder="Enter Word" value="{{old('b_side')}}">
					</div>
					<button type="submit" class="
						px-6
						py-2.5
						bg-blue-600
						text-white
						font-medium
						text-xs
						leading-tight
						uppercase
						rounded
						shadow-md
						hover:bg-blue-700 hover:shadow-lg
						focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
						active:bg-blue-800 active:shadow-lg
						transition
						duration-150
						ease-in-out">
						登録
					</button>
                </form>
            </div>
        </div>

</x-app-layout>
