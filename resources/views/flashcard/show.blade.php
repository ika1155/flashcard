<x-app-layout>
    <x-slot name="header">
		<div class="flex justify-between">
			<h2 class="flex items-center font-semibold text-xl text-gray-800">
				{{$flashcard->name}}
			</h2>

			<div class=" rounded-lg p-3 w-2/4">
				<form method="GET" action="{{route('word.index')}}">
					<div class="flex">
						<div class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg border-r border-gray-200 bg-white p-5">
							<svg viewBox="0 0 20 20" aria-hidden="true" class="pointer-events-none absolute w-5 fill-gray-500 transition">
								<path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
							</svg>
						</div>
						<input type="text" name="keyword" class="w-full bg-white pl-2 text-base font-semibold outline-0" >
						<input type="submit" value="検索" class="bg-blue-500 p-2 rounded-tr-lg rounded-br-lg text-white font-semibold hover:bg-blue-800 transition-colors">
					</div>
				</form>
			</div>
		</div>
		<a href="{{route('word.create', $flashcard)}}">
			<button class="bg-green-600 hover:bg-green-500 text-white rounded px-4 py-2">
				単語の追加
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