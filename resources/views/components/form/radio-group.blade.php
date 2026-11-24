<div>
    {{-- <x-form.radio-group name="jenis_kelamin" label="Jenis kelamin" :options="['Laki-laki', 'Perempuan']" /> --}}
    @props(['name', 'label', 'options' => [], 'required' => true])

    @php $current = old($name); @endphp

    <fieldset>
        <legend class="mb-1.5 block text-sm font-medium text-gray-700">
            {{ $label }}
            @if ($required)
                <span class="text-red-600">*</span>
            @endif
        </legend>

        <div class="grid gap-3 grid-cols-[repeat(auto-fit,minmax(8rem,1fr))]">
            @foreach ($options as $option)
                <label class="cursor-pointer">
                    <input type="radio" name="{{ $name }}" value="{{ $option }}"
                        data-label="{{ $label }}" class="peer sr-only" @required($required)
                        @checked($current === $option)>
                    <span
                        class="block rounded-lg border border-gray-300 px-4 py-2.5 text-center text-sm text-gray-700 transition
                           hover:border-blue-950
                           peer-checked:border-[#172241] peer-checked:bg-[#172241] peer-checked:text-white
                           peer-focus-visible:ring-2 peer-focus-visible:ring-blue-950/40">{{ $option }}</span>
                </label>
            @endforeach
        </div>
    </fieldset>
</div>
