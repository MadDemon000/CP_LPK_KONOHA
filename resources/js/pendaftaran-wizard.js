// Logika wizard pendaftaran: pindah langkah, validasi per langkah, dan ringkasan konfirmasi.
// Markup-nya ada di resources/views/pendaftaran.blade.php + components/wizard/*
// Di-import dari resources/js/app.js. Aman dimuat di semua halaman: kalau tidak ada form, langsung berhenti.
(() => {
    const form = document.getElementById('form-daftar');
    if (!form) return; // halaman sukses, tidak ada form

    const panels = [...form.querySelectorAll('[data-step-panel]')];
    const indicators = [...document.querySelectorAll('[data-step-indicator]')];
    const fill = document.getElementById('step-fill');
    const card = document.getElementById('wizard-card');
    const btnPrev = document.getElementById('btn-prev');
    const btnNext = document.getElementById('btn-next');
    const btnSubmit = document.getElementById('btn-submit');
    const summary = document.getElementById('ringkasan');
    const last = panels.length - 1;
    let current = 0;

    const fieldsOf = (i) => [...panels[i].querySelectorAll('input, select, textarea')];

    // Validasi satu step; kalau ada yang salah, tampilkan pesan browser pada field tersebut.
    const validateStep = (i) => {
        for (const f of fieldsOf(i)) {
            if (!f.checkValidity()) {
                f.reportValidity();
                return false;
            }
        }
        return true;
    };

    const render = () => {
        panels.forEach((p, i) => p.classList.toggle('hidden', i !== current));

        indicators.forEach((el, i) => {
            const state = i < current ? 'done' : i === current ? 'active' : 'idle';
            el.dataset.state = state;
            el.querySelector('.num').classList.toggle('hidden', state === 'done');
            el.querySelector('.check').classList.toggle('hidden', state !== 'done');
            if (i === current) el.setAttribute('aria-current', 'step');
            else el.removeAttribute('aria-current');
        });

        fill.style.width = `${(current / last) * 100}%`;
        btnPrev.classList.toggle('invisible', current === 0);
        btnNext.classList.toggle('hidden', current === last);
        btnSubmit.classList.toggle('hidden', current !== last);

        if (current === last) buildSummary();
    };

    const goTo = (i, { focus = true } = {}) => {
        current = Math.max(0, Math.min(last, i));
        render();
        card.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (focus) {
            const first = panels[current].querySelector('input:not([type=radio]), select, textarea');
            first?.focus({ preventScroll: true });
        }
    };

    // Nilai yang tampil di ringkasan
    const readValue = (field) => {
        if (field.type === 'radio') {
            const checked = form.querySelector(`input[name="${field.name}"]:checked`);
            return checked ? checked.value : '';
        }
        if (field.tagName === 'SELECT') return field.selectedOptions[0]?.text.trim() ?? '';
        return field.value.trim();
    };

    const buildSummary = () => {
        summary.replaceChildren();

        // hanya panel yang punya data-summary-title yang ikut diringkas
        panels.forEach((panel, i) => {
            if (!panel.dataset.summaryTitle) return;

            const box = document.createElement('div');
            box.className = 'rounded-lg border border-gray-200 p-5';

            const head = document.createElement('div');
            head.className = 'mb-4 flex items-center justify-between';
            const title = document.createElement('h3');
            title.className = 'font-semibold text-[#172241]';
            title.textContent = panel.dataset.summaryTitle;
            const edit = document.createElement('button');
            edit.type = 'button';
            edit.className = 'text-sm font-semibold text-[#c82036] hover:underline';
            edit.textContent = 'Ubah';
            edit.addEventListener('click', () => goTo(i));
            head.append(title, edit);

            const dl = document.createElement('dl');
            dl.className = 'grid gap-x-6 gap-y-3 sm:grid-cols-2';

            const seen = new Set();
            fieldsOf(i).forEach((f) => {
                if (!f.dataset.label || seen.has(f.name)) return;
                seen.add(f.name);

                const item = document.createElement('div');
                const dt = document.createElement('dt');
                dt.className = 'text-xs uppercase tracking-wide text-gray-500';
                dt.textContent = f.dataset.label;
                const dd = document.createElement('dd');
                dd.className = 'break-words text-sm text-gray-800';
                dd.textContent = readValue(f) || '-';
                item.append(dt, dd);
                dl.append(item);
            });

            box.append(head, dl);
            summary.append(box);
        });
    };

    btnNext.addEventListener('click', () => {
        if (validateStep(current)) goTo(current + 1);
    });
    btnPrev.addEventListener('click', () => goTo(current - 1));

    // Enter di dalam input tidak boleh langsung mengirim form; anggap sebagai "Lanjut".
    form.addEventListener('keydown', (e) => {
        if (e.key !== 'Enter' || e.target.tagName === 'TEXTAREA' || e.target.type === 'submit') return;
        e.preventDefault();
        if (current < last && validateStep(current)) goTo(current + 1);
    });

    // Sebelum kirim, pastikan semua step valid. Kalau ada yang salah, pindah ke step tersebut.
    form.addEventListener('submit', (e) => {
        const bad = panels.findIndex((_, i) => !fieldsOf(i).every((f) => f.checkValidity()));
        if (bad === -1) return;
        e.preventDefault();
        goTo(bad, { focus: false });
        validateStep(bad); // panel sudah terlihat, jadi pesan browser bisa muncul
    });

    // Jika server mengembalikan error validasi, buka step yang berisi field bermasalah.
    // Daftar field bermasalah dikirim dari Blade lewat atribut data-error-fields.
    const errorFields = JSON.parse(form.dataset.errorFields || '[]');
    const errorStep = panels.findIndex((p) => errorFields.some((n) => p.querySelector(`[name="${n}"]`)));
    if (errorStep >= 0) current = errorStep;

    render();
})();