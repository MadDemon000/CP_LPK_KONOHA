<div>
    {{-- Kotak error validasi dari server --}}
    @if ($errors->any())
        <div id="server-errors" class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700"
            role="alert">
            <p class="mb-1 font-semibold">Data belum bisa dikirim:</p>
            <ul class="list-inside list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
