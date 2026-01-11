<x-app-layout>
        <!-- Header -->
        <div class="bg-gray-50">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Riset & Pengabdian</h1>
                <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">
                    Kontribusi nyata civitas akademika dalam pengembangan ilmu pengetahuan dan kesejahteraan masyarakat.
                </p>
                
                <!-- Search Form -->
                <div class="mt-8 max-w-xl mx-auto">
                    <form action="{{ route('riset-pengabdian.index') }}" method="GET" class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Judul atau Nama Peneliti..." 
                            class="w-full pl-12 pr-4 py-3 rounded-full border-gray-300 shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-200 transition duration-200">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        @if(request('search'))
                            <a href="{{ route('riset-pengabdian.index') }}" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <div class="py-16 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                
                <!-- TABEL RISET -->
                <div class="mb-16">
                    <div class="flex items-center mb-6">
                        <div class="w-2 h-8 bg-blue-600 rounded-full mr-3"></div>
                        <h2 class="text-2xl font-bold text-gray-900">Penelitian (Riset)</h2>
                    </div>
                    
                    <div class="overflow-hidden bg-white shadow-md rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-12">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">Nama Peneliti</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul Penelitian</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-24">Link</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($riset as $index => $item)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $item->nama }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600">{{ $item->judul }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            @if($item->link)
                                                <a href="{{ $item->link }}" target="_blank" class="text-blue-600 hover:text-blue-900 bg-blue-50 px-3 py-1 rounded-full text-xs font-bold transition-colors">
                                                    Buka
                                                </a>
                                            @else
                                                <span class="text-gray-400">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-10 text-center text-gray-500 italic">Tidak ada data penelitian ditemukan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- TABEL PENGABDIAN -->
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-2 h-8 bg-green-600 rounded-full mr-3"></div>
                        <h2 class="text-2xl font-bold text-gray-900">Pengabdian</h2>
                    </div>

                    <div class="overflow-hidden bg-white shadow-md rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-12">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">Nama Pelaksana</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul Pengabdian</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-24">Link</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($pengabdian as $index => $item)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $item->nama }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600">{{ $item->judul }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            @if($item->link)
                                                <a href="{{ $item->link }}" target="_blank" class="text-green-600 hover:text-green-900 bg-green-50 px-3 py-1 rounded-full text-xs font-bold transition-colors">
                                                    Buka
                                                </a>
                                            @else
                                                <span class="text-gray-400">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-10 text-center text-gray-500 italic">Tidak ada data pengabdian ditemukan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </x-app-layout>