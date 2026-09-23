@extends('layouts.frontend')
@section('content')


<style>
    .dash-wrap    { background: var(--bg); min-height: 100vh; padding: 2rem 0 4rem; }
    .dash-header  { background: linear-gradient(135deg, var(--teal-dark), var(--teal)); border-radius: 22px; padding: 2rem 2.5rem; color: #fff; margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; box-shadow: 0 8px 32px rgba(13,115,119,.2); }
    .dash-header h2 { font-family: 'DM Serif Display', serif; font-size: 1.9rem; margin: 0; }
    .dash-header p  { color: rgba(255,255,255,.8); margin: .2rem 0 0; font-size: .9rem; }
    .dash-add-btn { background: var(--gold); color: #fff; border: none; padding: .7rem 1.5rem; border-radius: 50px; font-weight: 700; font-size: .9rem; text-decoration: none; display: inline-flex; align-items: center; gap: .5rem; transition: opacity .2s, transform .2s; }
    .dash-add-btn:hover { opacity: .9; transform: translateY(-2px); color: #fff; }

    /* Stat cards */
    .stat-card { background: #fff; border-radius: 18px; border: 1px solid var(--border); padding: 1.6rem 1.8rem; display: flex; align-items: center; gap: 1.2rem; box-shadow: 0 4px 18px rgba(13,115,119,.06); transition: transform .25s, box-shadow .25s; }
    .stat-card:hover { transform: translateY(-5px); box-shadow: 0 12px 32px rgba(13,115,119,.12); }
    .stat-icon { width: 60px; height: 60px; border-radius: 16px; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0; }
    .stat-icon-teal { background: var(--mint); color: var(--teal); }
    .stat-icon-ink  { background: #eef0f5; color: var(--ink); }
    .stat-icon-gold { background: var(--gold-light); color: var(--gold); }
    .stat-label { font-size: .82rem; font-weight: 600; color: var(--muted); text-transform: uppercase; letter-spacing: .06em; }
    .stat-value { font-size: 2rem; font-weight: 800; color: var(--ink); line-height: 1.1; }

    /* Table card */
    .dash-card { background: #fff; border-radius: 18px; border: 1px solid var(--border); box-shadow: 0 4px 18px rgba(13,115,119,.06); overflow: hidden; }
    .dash-card-head { padding: 1.2rem 1.6rem; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; }
    .dash-card-head h5 { margin: 0; font-weight: 700; color: var(--ink); font-size: 1rem; }
    .dash-card-head a { font-size: .83rem; font-weight: 600; color: var(--teal); text-decoration: none; }
    .dash-card-head a:hover { color: var(--teal-dark); }
    .dash-table thead th { background: var(--mint); color: var(--teal-dark); font-size: .8rem; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; padding: .9rem 1rem; border: none; white-space: nowrap; }
    .dash-table tbody tr { border-bottom: 1px solid var(--border); transition: background .15s; }
    .dash-table tbody tr:hover { background: #f8fffe; }
    .dash-table td { padding: .9rem 1rem; color: var(--ink); font-size: .88rem; vertical-align: middle; border: none; }
    .sev-badge { display: inline-flex; align-items: center; gap: .4rem; font-weight: 700; font-size: .82rem; padding: .3rem .8rem; border-radius: 50px; }
    .sev-low  { background: #e6f9f0; color: #0d7377; }
    .sev-mid  { background: #fff8e6; color: #a87830; }
    .sev-high { background: #fde8e8; color: #c0392b; }
    .dash-empty { text-align: center; padding: 3rem 1rem; color: var(--muted); }
    .dash-empty i { font-size: 2.5rem; display: block; margin-bottom: .8rem; color: var(--teal-light); }
    .cell-muted { color: var(--muted); }
    .med-dose { color: var(--muted); font-size: .8rem; }
</style>

<nav class="main-navbar navbar navbar-expand-lg">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand me-3" href="/">
            <img src="{{ asset('backend/images/logo.jpeg') }}" alt="logo">
            SympTrack
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-4" style="color:var(--teal)"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-center gap-1">

                {{-- HOME dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/"><i class="bi bi-house me-2 text-muted"></i>Home</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/about"><i class="bi bi-info-circle me-2 text-muted"></i>About Us</a></li>
                        <li><a class="dropdown-item" href="/contact"><i class="bi bi-chat-dots me-2 text-muted"></i>Contact</a></li>
                        <li><a class="dropdown-item" href="/FAQs"><i class="bi bi-question-circle me-2 text-muted"></i>FAQs</a></li>
                    </ul>
                </li>

                {{-- DASHBOARD dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/dashboard" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dashboard</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid me-2 text-muted"></i>Overview</a></li>
                        <li><a class="dropdown-item" href="/add_symptom"><i class="bi bi-plus-circle me-2 text-muted"></i>Add Symptom</a></li>
                        <li><a class="dropdown-item" href="/symptom_history"><i class="bi bi-clock-history me-2 text-muted"></i>Symptom History</a></li>
                    </ul>
                </li>

                {{-- LOGIN --}}
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>

                {{-- GET STARTED CTA --}}
                <li class="nav-item ms-1">
                    <a class="nav-link nav-cta" href="/register">Get Started <i class="bi bi-arrow-right ms-1"></i></a>
                </li>

                {{-- LOGOUT--}}
                <li class="nav-item ms-1">
                    <a class="nav-link nav-cta" href="{{ route('logout')}}" style="background-color: red;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">    
                    Logout 
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="dash-wrap">
    <div class="container">

        <!-- Header -->
        <div class="dash-header">
            <div>
                <h2>Welcome back {{ Auth::user()->name }}</h2>
                <p>Here's what's happening with your health today</p>
            </div>
            <a href="/add_symptom" class="dash-add-btn">
                <i class="bi bi-plus-circle-fill"></i> Add Symptom
            </a>
        </div>

        <!-- Stats -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-icon stat-icon-teal"><i class="bi bi-clipboard2-pulse"></i></div>
                    <div>
                        <div class="stat-label">Today's Symptoms</div>
                        <div class="stat-value" id="todayCount">0</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-icon stat-icon-ink"><i class="bi bi-calendar-week"></i></div>
                    <div>
                        <div class="stat-label">This Week</div>
                        <div class="stat-value" id="weekCount">0</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-icon stat-icon-gold"><i class="bi bi-graph-up-arrow"></i></div>
                    <div>
                        <div class="stat-label">Avg Severity</div>
                        <div class="stat-value" id="avgSev">—</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Symptoms table -->
        <div class="dash-card">
            <div class="dash-card-head">
                <h5><i class="bi bi-clock-history me-2" style="color:var(--teal)"></i>Recent Symptoms</h5>
                <a href="/symptom_history">View all <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table dash-table mb-0">
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
                    <tbody id="recentBody"></tbody>
                </table>
            </div>
        </div>

        <div class="dash-card mt-4">
            <div class="dash-card-head">
                <h5><i class="bi bi-stars me-2" style="color:var(--teal)"></i>AI Insights</h5>
                <button id="getInsightBtn" class="btn btn-sm" style="background:var(--mint);color:var(--teal-dark);border-radius:8px;">
                    <i class="bi bi-magic"></i> Generate
                </button>
            </div>
            <div style="padding:1.4rem 1.6rem;">
                <p id="insightText" style="color:var(--muted);margin:0;">Click "Generate" to see patterns in your recent symptoms.</p>
                <p style="font-size:.75rem;color:var(--muted);margin-top:.8rem;margin-bottom:0;">
                    <i class="bi bi-info-circle"></i> AI-generated observations — not medical advice. Always consult a doctor.
                </p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function () {
    'use strict';

    const COLSPAN = 8; // must match the number of <th> above

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
    // Symptom names and notes are free text the user typed, so they must be
    // escaped before being injected as HTML.
    function esc(v) {
        return String(v == null ? '' : v)
            .replace(/&/g, '&amp;').replace(/</g, '&lt;')
            .replace(/>/g, '&gt;').replace(/"/g, '&quot;')
            .replace(/'/g, '&#39;');
    }

    const dash = '<span class="cell-muted">—</span>';

    // duration is saved as { value, unit }. Older entries may still be a
    // plain string like "3 hours", so handle both rather than printing
    // "[object Object]".
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

    function fmtDate(v) {
        const d = new Date(v);
        if (isNaN(d.getTime())) return dash;
        return esc(d.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' }));
    }

    function sevClass(s) { return s <= 3 ? 'sev-low' : s <= 6 ? 'sev-mid' : 'sev-high'; }

    async function render() {
        const all = (await readAll())
            .slice()
            .sort((a, b) => new Date(b.date) - new Date(a.date)); // newest first

        const now = new Date();

        // ---- stats (computed over everything, not just the visible 8) ----
        const today = all.filter(s => new Date(s.date).toDateString() === now.toDateString());
        const week  = all.filter(s => (now - new Date(s.date)) < 7 * 86400000);
        const avg   = all.length
            ? (all.reduce((a, s) => a + (Number(s.severity) || 0), 0) / all.length).toFixed(1)
            : '—';

        document.getElementById('todayCount').textContent = today.length;
        document.getElementById('weekCount').textContent  = week.length;
        document.getElementById('avgSev').textContent     = avg;

        // ---- table ----
        const tbody = document.getElementById('recentBody');
        const recent = all.slice(0, 8);

        if (!recent.length) {
            tbody.innerHTML =
                '<tr><td colspan="' + COLSPAN + '"><div class="dash-empty">' +
                '<i class="bi bi-inbox"></i>No symptoms logged yet.<br>' +
                '<a href="/add_symptom" style="color:var(--teal);font-weight:600;">Add your first symptom →</a>' +
                '</div></td></tr>';
            return;
        }

        // Build the whole table body once. The original appended with
        // `innerHTML +=` inside a loop, which re-parses the entire table on
        // every row and drops any listeners already attached.
        tbody.innerHTML = recent.map(s => {
            const sev = Number(s.severity) || 0;
            return '<tr>' +
                '<td style="color:var(--muted);font-size:.8rem;white-space:nowrap;">' + fmtDate(s.date) + '</td>' +
                '<td><strong>' + esc(s.name || '—') + '</strong></td>' +
                '<td><span class="sev-badge ' + sevClass(sev) + '">' + sev + '/10</span></td>' +
                '<td>' + (s.trigger ? esc(s.trigger) : dash) + '</td>' +
                '<td>' + fmtDuration(s.duration) + '</td>' +
                '<td>' + fmtMedication(s.medication) + '</td>' +
                '<td style="max-width:160px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="' + esc(s.notes || '') + '">' +
                    (s.notes ? esc(s.notes) : dash) + '</td>' +
                '<td style="white-space:nowrap;">' +
                    '<button class="btn btn-sm js-del" data-id="' + esc(s.id) + '" ' +
                        'style="background:#fde8e8;color:#c0392b;border:none;font-size:.78rem;border-radius:8px;" title="Delete">' +
                        '<i class="bi bi-trash"></i></button>' +
                '</td>' +
            '</tr>';
        }).join('');
    }

    // delegated, so it survives every re-render
    document.getElementById('recentBody').addEventListener('click', async function (e) {
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
    render();
});

    // keep other open tabs in sync

    document.addEventListener('DOMContentLoaded', render);
    if (document.readyState !== 'loading') render();
})();

document.getElementById('getInsightBtn').addEventListener('click', async function () {
    const btn = this;
    const textEl = document.getElementById('insightText');
    btn.disabled = true;
    textEl.textContent = 'Thinking…';

    try {
        const res = await fetch('/insights', { headers: { 'Accept': 'application/json' } });
        const json = await res.json();
        textEl.textContent = json.success ? json.insight : 'Could not generate insight right now.';
    } catch (e) {
        textEl.textContent = 'Something went wrong. Please try again.';
    } finally {
        btn.disabled = false;
    }
});
</script>

@endsection