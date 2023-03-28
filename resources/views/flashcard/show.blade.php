<x-app-layout>
    <x-slot name="header">
		<div class="flex justify-between">
			<h2 class="flex items-center font-semibold text-xl text-gray-800">
				{{$flashcard->name}}
			</h2>
		</div>
		<a href="{{route('flashcard.word.create', $flashcard)}}">
			<button class="bg-green-600 hover:bg-green-500 text-white rounded px-4 py-2">
				単語の追加
			</button>
		</a>
		<a href="{{route('flashcard.word.index', $flashcard->id)}}">
			<button class="bg-green-600 hover:bg-green-500 text-white rounded px-4 py-2">
				表示
			</button>
		</a> 
		<x-message :message="session('message')" />
    </x-slot>
	
	<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
		<div class="flex flex-col shadow">		
			<div class="overflow-hidden">
				<table class="min-w-full">
					<thead class="bg-white border-b text-gray-900"">
						<tr>
							<th scope="col" class="text-sm font-medium px-6 py-4">
								表
							</th>
							<th scope="col" class="text-sm font-medium px-6 py-4">
								裏
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($words as $word)
							<tr class="border-b transition duration-300 ease-in-out hover:bg-gray-100 bg-white  align="center">
								<td class="text-sm px-6 py-4 whitespace-nowrap" align="left">
									{{$word->a_side}}
								</td>
								<td class="text-sm px-6 py-4 whitespace-nowrap" align="left">
									{{$word->b_side}}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</x-app-layout>