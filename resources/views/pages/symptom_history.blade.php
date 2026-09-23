@extends('layouts.frontend')
@section('content')

<style>
    .sh-wrap { background: var(--bg); min-height: 100vh; padding: 2rem 0 5rem; }

    /* Header */
    .sh-hero { background: linear-gradient(135deg, var(--teal-dark), var(--teal)); border-radius: 22px; padding: 2rem 2.5rem; color: #fff; margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; box-shadow: 0 8px 32px rgba(13,115,119,.2); }
    .sh-hero h2 { font-family: 'DM Serif Display', serif; font-size: 1.8rem; margin: 0; }
    .sh-hero p  { color: rgba(255,255,255,.8); margin: .2rem 0 0; font-size: .88rem; }
    .sh-add-btn { background: var(--gold); color: #fff; border: none; padding: .65rem 1.4rem; border-radius: 50px; font-weight: 700; font-size: .88rem; text-decoration: none; display: inline-flex; align-items: center; gap: .45rem; transition: opacity .2s, transform .2s; }
    .sh-add-btn:hover { opacity: .9; transform: translateY(-2px); color: #fff; }

    /* Filter bar */
    .sh-filters { background: #fff; border-radius: 16px; border: 1px solid var(--border); padding: 1.2rem 1.6rem; margin-bottom: 1.5rem; display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; box-shadow: 0 2px 12px rgba(13,115,119,.05); }
    .sh-search { flex: 1; min-width: 200px; display: flex; align-items: center; gap: .6rem; background: var(--mint); border-radius: 10px; padding: .6rem 1rem; border: 1.5px solid var(--border); }
    .sh-search input { border: none; background: transparent; outline: none; font-size: .9rem; color: var(--ink); flex: 1; }
    .sh-search i { color: var(--teal); }
    .sh-filter-select { padding: .6rem 1rem; border-radius: 10px; border: 1.5px solid var(--border); font-size: .88rem; color: var(--ink); background: #fff; outline: none; cursor: pointer; }
    .sh-filter-select:focus { border-color: var(--teal); }

    /* Table card */
    .sh-card { background: #fff; border-radius: 20px; border: 1px solid var(--border); box-shadow: 0 4px 24px rgba(13,115,119,.07); overflow: hidden; }
    .sh-card-head { padding: 1.2rem 1.6rem; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; }
    .sh-card-head h5 { margin: 0; font-weight: 700; color: var(--ink); }
    .sh-card-head span { font-size: .82rem; color: var(--muted); }
    .sh-table thead th { background: linear-gradient(135deg, var(--teal-dark), var(--teal)); color: #fff; font-size: .78rem; font-weight: 700; text-transform: uppercase; letter-spacing: .07em; padding: .9rem 1rem; border: none; white-space: nowrap; }
    .sh-table tbody tr { border-bottom: 1px solid var(--border); transition: background .15s; }
    .sh-table tbody tr:last-child { border-bottom: none; }
    .sh-table tbody tr:hover { background: #f8fffe; }
    .sh-table td { padding: .9rem 1rem; color: var(--ink); font-size: .87rem; vertical-align: middle; border: none; }

    /* Severity badge */
    .sev-pill { display: inline-flex; align-items: center; gap: .35rem; font-weight: 700; font-size: .8rem; padding: .3rem .8rem; border-radius: 50px; }
    .sev-low  { background: #e6f9f0; color: var(--teal-dark); }
    .sev-mid  { background: #fff8e6; color: #a87830; }
    .sev-high { background: #fde8e8; color: #c0392b; }
    .sev-dot  { width: 7px; height: 7px; border-radius: 50%; display: inline-block; }
    .sev-dot-low  { background: var(--teal); }
    .sev-dot-mid  { background: var(--gold); }
    .sev-dot-high { background: #c0392b; }

    /* Actions */
    .sh-btn-edit { background: var(--mint); color: var(--teal); border: none; padding: .35rem .7rem; border-radius: 8px; font-size: .8rem; cursor: pointer; transition: background .2s; }
    .sh-btn-edit:hover { background: var(--teal); color: #fff; }
    .sh-btn-del  { background: #fde8e8; color: #c0392b; border: none; padding: .35rem .7rem; border-radius: 8px; font-size: .8rem; cursor: pointer; transition: background .2s; }
    .sh-btn-del:hover  { background: #c0392b; color: #fff; }

    /* Empty state */
    .sh-empty { text-align: center; padding: 4rem 2rem; color: var(--muted); }
    .sh-empty i { font-size: 3rem; display: block; margin-bottom: 1rem; color: var(--teal-light); }
    .sh-empty a { color: var(--teal); font-weight: 600; text-decoration: none; }

    /* Pagination */
    .sh-pager { display: flex; justify-content: center; gap: .5rem; padding: 1.2rem; }
    .sh-pager button { border: 1.5px solid var(--border); background: #fff; color: var(--ink); border-radius: 9px; padding: .4rem .9rem; font-size: .85rem; cursor: pointer; transition: all .2s; }
    .sh-pager button.active, .sh-pager button:hover { background: var(--teal); color: #fff; border-color: var(--teal); }

    .cell-muted { color: var(--muted); }
    .med-dose { color: var(--muted); font-size: .78rem; }
</style>

<div class="sh-wrap">
    <div class="container">

        <!-- Header -->
        <div class="sh-hero">
            <div>
                <h2><i class="bi bi-clock-history me-2"></i>Symptom History</h2>
                <p>All your recorded symptoms in one place</p>
            </div>
            <a href="/add_symptom" class="sh-add-btn">
                <i class="bi bi-plus-circle-fill"></i> Add Symptom
            </a>
        </div>

        <!-- Filter bar -->
        <div class="sh-filters">
            <div class="sh-search">
                <i class="bi bi-search"></i>
                <input type="text" id="searchInput" placeholder="Search symptoms…">
            </div>
            <select id="severityFilter" class="sh-filter-select">
                <option value="">All Severities</option>
                <option value="low">Low (1–3)</option>
                <option value="mid">Moderate (4–6)</option>
                <option value="high">High (7–10)</option>
            </select>
            <select id="sortFilter" class="sh-filter-select">
                <option value="newest">Newest First</option>
                <option value="oldest">Oldest First</option>
                <option value="sev-high">Highest Severity</option>
                <option value="sev-low">Lowest Severity</option>
            </select>
        </div>

        <!-- Table -->
        <div class="sh-card">
            <div class="sh-card-head">
                <h5><i class="bi bi-table me-2" style="color:var(--teal)"></i>All Symptoms</h5>
                <span id="countLabel">— entries</span>
            </div>
            <div class="table-responsive">
                <table class="table sh-table mb-0">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Symptom</th>
                            <th>Severity</th>
                            <th>Trigger</th>
                            <th>Duration</th>
                            <th>Medicine</th>
                            <th>Notes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="historyBody"></tbody>
                </table>
            </div>
            <div class="sh-pager" id="pager"></div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function () {
    'use strict';

    const STORAGE_KEY = 'symptoms';
    const PAGE_SIZE = 10;
    const COLSPAN = 8; // must match the number of <th> above

    let allSymptoms = [];
    let filtered = [];
    let page = 1;

    async function readAll() {
        try {
            const res = await fetch('/user-data', { headers: { 'Accept': 'application/json' } });
            const json = await res.json();
            return json.success ? json.data : [];
        } catch (e) {
            console.warn('Could not load symptoms.', e);
            return [];
        }
    }

async function loadAndRender() {
    allSymptoms = await readAll();
    applyFilters();
}

    function esc(v) {
        return String(v == null ? '' : v)
            .replace(/&/g, '&amp;').replace(/</g, '&lt;')
            .replace(/>/g, '&gt;').replace(/"/g, '&quot;')
            .replace(/'/g, '&#39;');
    }

    const dash = '<span class="cell-muted">—</span>';

    // duration is saved as { value, unit }; older entries may be a plain
    // string like "3 hours", so both are handled.
    function fmtDuration(d) {
        if (!d) return dash;
        if (typeof d === 'string') return esc(d);
        if (typeof d === 'object' && d.value != null) {
            const n = Number(d.value);
            const unit = String(d.unit || '');
            return esc(n + ' ' + (n === 1 ? unit.replace(/s$/, '') : unit));
        }
        return dash;
    }

    // medication is saved as { name, dosage } or null
    function fmtMedication(m) {
        if (!m) return dash;
        if (typeof m === 'string') return esc(m);
        if (!m.name) return dash;
        return esc(m.name) + (m.dosage ? ' <span class="med-dose">(' + esc(m.dosage) + ')</span>' : '');
    }

    // plain-text version, used so medication is searchable too
    function medText(m) {
        if (!m) return '';
        if (typeof m === 'string') return m;
        return [m.name, m.dosage].filter(Boolean).join(' ');
    }

    function sevClass(s) { return s <= 3 ? 'sev-low' : s <= 6 ? 'sev-mid' : 'sev-high'; }
    function sevDot(s)   { return s <= 3 ? 'sev-dot-low' : s <= 6 ? 'sev-dot-mid' : 'sev-dot-high'; }

    function render() {
        const tbody = document.getElementById('historyBody');
        const pager = document.getElementById('pager');
        const total = filtered.length;

        document.getElementById('countLabel').textContent =
            total + ' entr' + (total === 1 ? 'y' : 'ies');

        const pages = Math.ceil(total / PAGE_SIZE);
        if (page > pages && pages > 0) page = pages; // e.g. after deleting the last row on a page
        const slice = filtered.slice((page - 1) * PAGE_SIZE, page * PAGE_SIZE);

        if (!slice.length) {
            tbody.innerHTML =
                '<tr><td colspan="' + COLSPAN + '"><div class="sh-empty">' +
                '<i class="bi bi-inbox"></i>No symptoms found.<br>' +
                '<a href="/add_symptom">Log your first symptom →</a>' +
                '</div></td></tr>';
            pager.innerHTML = '';
            return;
        }

        tbody.innerHTML = slice.map(s => {
            const sev = Number(s.severity) || 0;
            const d = new Date(s.date);
            const dateStr = isNaN(d.getTime())
                ? '—'
                : d.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' });

            return '<tr>' +
                '<td style="color:var(--muted);font-size:.8rem;white-space:nowrap;">' + esc(dateStr) + '</td>' +
                '<td><strong>' + esc(s.name || '—') + '</strong></td>' +
                '<td><span class="sev-pill ' + sevClass(sev) + '">' +
                    '<span class="sev-dot ' + sevDot(sev) + '"></span>' + sev + '/10</span></td>' +
                '<td>' + (s.trigger ? esc(s.trigger) : dash) + '</td>' +
                '<td>' + fmtDuration(s.duration) + '</td>' +
                '<td>' + fmtMedication(s.medication) + '</td>' +
                '<td style="max-width:160px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="' + esc(s.notes || '') + '">' +
                    (s.notes ? esc(s.notes) : dash) + '</td>' +
                '<td style="white-space:nowrap;">' +
                    '<button class="sh-btn-del js-del" data-id="' + esc(s.id) + '" title="Delete">' +
                        '<i class="bi bi-trash"></i></button>' +
                '</td>' +
            '</tr>';
        }).join('');

        // Pager
        pager.innerHTML = '';
        for (let i = 1; i <= pages; i++) {
            const b = document.createElement('button');
            b.textContent = i;
            if (i === page) b.classList.add('active');
            b.addEventListener('click', () => { page = i; render(); });
            pager.appendChild(b);
        }
    }

    function applyFilters() {
        const term = document.getElementById('searchInput').value.toLowerCase().trim();
        const sev  = document.getElementById('severityFilter').value;
        const sort = document.getElementById('sortFilter').value;

        filtered = allSymptoms.filter(s => {
            const haystack = [
                s.name, s.notes, s.trigger, medText(s.medication)
            ].filter(Boolean).join(' ').toLowerCase();

            const matchTerm = !term || haystack.includes(term);

            const sv = Number(s.severity) || 0;
            const matchSev = !sev
                || (sev === 'low'  && sv <= 3)
                || (sev === 'mid'  && sv >= 4 && sv <= 6)
                || (sev === 'high' && sv >= 7);

            return matchTerm && matchSev;
        });

        filtered.sort((a, b) => {
            if (sort === 'oldest')   return new Date(a.date) - new Date(b.date);
            if (sort === 'sev-high') return (Number(b.severity) || 0) - (Number(a.severity) || 0);
            if (sort === 'sev-low')  return (Number(a.severity) || 0) - (Number(b.severity) || 0);
            return new Date(b.date) - new Date(a.date); // newest
        });

        page = 1;
        render();
    }

    // delegated so it keeps working across re-renders and pagination
    document.getElementById('historyBody').addEventListener('click', async function (e) {
        const btn = e.target.closest('.js-del');
        if (!btn) return;
        if (!confirm('Delete this symptom?')) return;

        await fetch(`/user-data/${btn.dataset.id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content,
                'Accept': 'application/json',
            }
        });
    loadAndRender();
});

    document.getElementById('searchInput').addEventListener('input', applyFilters);
    document.getElementById('severityFilter').addEventListener('change', applyFilters);
    document.getElementById('sortFilter').addEventListener('change', applyFilters);


    loadAndRender(); // fetches from backend, then sorts newest-first
})();
</script>

@endsection