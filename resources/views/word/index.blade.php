<x-app-layout>
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
