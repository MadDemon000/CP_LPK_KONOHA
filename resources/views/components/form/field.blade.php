<div>
    {{--
    Satu komponen untuk input / select / textarea.

    <x-form.field name="nama" label="Nama" placeholder="..." />
    <x-form.field name="kota" label="Kota" type="select" :options="$kota" placeholder="Pilih kota" />
    <x-form.field name="alamat" label="Alamat" type="textarea" rows="3" />

    Props   : name, label, type, options, placeholder, required, hint, summary
    summary : nama field di halaman konfirmasi (default = label)
    Atribut lain (pattern, min, max, maxlength, inputmode, autocomplete, rows, ...) diteruskan apa adanya.
--}}
    @props([
        'name',
        'label',
        'type' => 'text',
        'options' => [],
        'placeholder' => null,
        'required' => true,
        'hint' => null,
        'summary' => null,
    ])

    @php
        $class =
            'w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-800 placeholder-gray-400 outline-none transition focus:border-blue-950 focus:ring-2 focus:ring-blue-950/20';
        $value = old($name);

        $attrs = $attributes->merge([
            'id' => $name,
            'name' => $name,
            'data-label' => $summary ?? $label,
            'placeholder' => $type === 'select' ? null : $placeholder,
            'class' => $class,
        ]);
    @endphp

    <div>
        <label for="{{ $name }}" class="mb-1.5 block text-sm font-medium text-gray-700">
            {{ $label }}
            @if ($required)
                <span class="text-red-600">*</span>
            @else
                <span class="font-normal text-gray-400">(opsional)</span>
            @endif
        </label>

        @if ($type === 'select')
            <select {{ $attrs }} @required($required)>
                <option value="">{{ $placeholder }}</option>
                @foreach ($options as $option)
                    <option value="{{ $option }}" @selected($value === $option)>{{ $option }}</option>
                @endforeach
            </select>
        @elseif ($type === 'textarea')
            <textarea {{ $attrs }} @required($required)>{{ $value }}</textarea>
        @else
            <input type="{{ $type }}" value="{{ $value }}" {{ $attrs }} @required($required)>
        @endif

        @if ($hint)
            <p class="mt-1 text-xs text-gray-500">{{ $hint }}</p>
        @endif
    </div>
</div>
