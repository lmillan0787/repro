<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="py-8 px-4">
                    <div class="flex flex-wrap -mx-4 -mb-8">
                        @forelse ($list as $data)
                            <div class="md:w-1/4 px-4 mb-8">
                                <td class="px-2 py-1">
                                    <a href="{{ route('music-styles.index', $data->id) }}"> {{ $data->style_name }}</a>
                            </div>
                        @empty
                            <td class="px-4 py-3">No styles registered</td>
                        @endforelse
                    </div>
                </section>
            </div>
        </div>
    </div>
