@extends('layouts.frontend')
@section('content')

<style>
    .as-wrap { background: var(--bg); min-height: 100vh; padding: 2rem 0 5rem; }

    /* Page header strip */
    .as-hero { background: linear-gradient(135deg, var(--teal-dark), var(--teal)); border-radius: 22px; padding: 2rem 2.5rem; color: #fff; margin-bottom: 2.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; box-shadow: 0 8px 32px rgba(13,115,119,.2); }
    .as-hero h2 { font-family: 'DM Serif Display', serif; font-size: 1.8rem; margin: 0; }
    .as-hero p  { color: rgba(255,255,255,.8); margin: .2rem 0 0; font-size: .88rem; }
    .as-back-btn { background: rgba(255,255,255,.15); color: #fff; border: 1.5px solid rgba(255,255,255,.35); padding: .55rem 1.3rem; border-radius: 50px; font-weight: 600; font-size: .88rem; text-decoration: none; display: inline-flex; align-items: center; gap: .45rem; transition: background .2s; }
    .as-back-btn:hover { background: rgba(255,255,255,.28); color: #fff; }

    /* Form card */
    .as-card { background: #fff; border-radius: 22px; border: 1px solid var(--border); box-shadow: 0 8px 40px rgba(13,115,119,.08); overflow: hidden; }
    .as-card-header { background: linear-gradient(135deg, var(--teal-dark), var(--teal)); padding: 1.3rem 2rem; }
    .as-card-header h4 { color: #fff; margin: 0; font-family: 'DM Serif Display', serif; font-size: 1.25rem; }
    .as-card-body { padding: 2rem 2.5rem 2.5rem; background: var(--mint); }

    /* Field labels */
    .as-label { display: block; font-weight: 600; color: var(--ink); margin-bottom: .4rem; font-size: .88rem; }
    .as-label .req { color: var(--gold); }

    /* Inputs */
    .as-input {
        width: 100%; padding: .85rem 1.1rem; border-radius: 12px;
        border: 1.5px solid var(--border); background: #fff;
        font-size: .93rem; color: var(--ink); outline: none;
        transition: border-color .25s, box-shadow .25s;
    }
    .as-input:focus { border-color: var(--teal); box-shadow: 0 0 0 3px rgba(13,115,119,.1); }
    .as-textarea { height: 110px; resize: vertical; }

    /* ---- VALIDATION STATES (mirrors the register page look) ---- */
    .as-input.is-invalid { border-color: #c0392b; background: #fff6f5; }
    .as-input.is-invalid:focus { box-shadow: 0 0 0 3px rgba(192,57,43,.12); }
    .as-input.is-valid { border-color: var(--teal); }
    .as-error {
        color: #c0392b; font-size: .82rem; margin-top: .35rem;
        display: none; align-items: center; gap: .35rem;
    }
    .as-error.show { display: flex; }

    /* Alert shown at the top of the form when submit fails / succeeds */
    .as-alert {
        display: none; align-items: flex-start; gap: .6rem;
        padding: .9rem 1.1rem; border-radius: 12px;
        font-size: .88rem; margin-bottom: 1.4rem; line-height: 1.5;
    }
    .as-alert.show { display: flex; }
    .as-alert-error   { background: #fdecea; border: 1.5px solid #f5c2bd; color: #a5332a; }
    .as-alert-success { background: #e7f6f4; border: 1.5px solid #a8ddd6; color: var(--teal-dark); }

    /* Severity slider */
    .sev-track { display: flex; align-items: center; gap: 1rem; }
    .sev-track input[type=range] { flex: 1; accent-color: var(--teal); height: 6px; }
    .sev-badge-live { background: var(--teal); color: #fff; font-weight: 800; font-size: 1.05rem; padding: .3rem .9rem; border-radius: 50px; min-width: 56px; text-align: center; transition: background .25s; }
    .sev-labels { display: flex; justify-content: space-between; font-size: .75rem; color: var(--muted); margin-top: .4rem; }

    /* Section divider inside form */
    .as-divider { border: none; border-top: 1.5px dashed var(--border); margin: 1.8rem 0; }

    /* Submit / Cancel */
    .as-submit { background: linear-gradient(135deg, var(--teal-dark), var(--teal)); color: #fff; border: none; padding: .85rem 2.2rem; border-radius: 50px; font-weight: 700; font-size: .95rem; cursor: pointer; display: inline-flex; align-items: center; gap: .5rem; transition: opacity .2s, transform .2s; box-shadow: 0 6px 20px rgba(13,115,119,.3); }
    .as-submit:hover { opacity: .9; transform: translateY(-2px); }
    .as-submit:disabled { opacity: .55; cursor: not-allowed; transform: none; }
    .as-cancel { background: #fff; color: var(--ink); border: 1.5px solid var(--border); padding: .83rem 1.8rem; border-radius: 50px; font-weight: 600; font-size: .95rem; cursor: pointer; display: inline-flex; align-items: center; gap: .5rem; transition: border-color .2s, color .2s; text-decoration: none; }
    .as-cancel:hover { border-color: var(--teal); color: var(--teal); }

    .as-hint { font-size: .78rem; color: var(--muted); margin-top: .35rem; }
</style>

<div class="as-wrap">
    <div class="container">

        <!-- Header -->
        <div class="as-hero">
            <div>
                <h2><i class="bi bi-plus-circle-fill me-2" style="font-size:1.5rem;"></i>Add New Symptom</h2>
                <p>Record how you're feeling right now</p>
            </div>
            <a href="/dashboard" class="as-back-btn">
                <i class="bi bi-arrow-left"></i> Back to Dashboard
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="as-card">
                    <div class="as-card-header">
                        <h4><i class="bi bi-clipboard2-pulse me-2"></i>Symptom Details</h4>
                    </div>
                    <div class="as-card-body">

                        <!-- Top-level feedback -->
                        <div class="as-alert as-alert-error" id="formAlert">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            <span id="formAlertText"></span>
                        </div>
                        <div class="as-alert as-alert-success" id="formSuccess">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Symptom saved. Taking you to your history…</span>
                        </div>

                        <form id="symptomForm" novalidate>

                            <!-- Name + Date -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-7">
                                    <label class="as-label" for="symptomName">Symptom Name <span class="req">*</span></label>
                                    <input type="text" id="symptomName" class="as-input"
                                           placeholder="e.g. Headache, Fatigue…" maxlength="60" required>
                                    <div class="as-error" id="err-symptomName">
                                        <i class="bi bi-x-circle"></i><span></span>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label class="as-label" for="symptomDate">When did it occur? <span class="req">*</span></label>
                                    <input type="datetime-local" id="symptomDate" class="as-input" required>
                                    <div class="as-error" id="err-symptomDate">
                                        <i class="bi bi-x-circle"></i><span></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Severity -->
                            <div class="mb-3">
                                <label class="as-label" for="severity">Severity <span class="req">*</span></label>
                                <div class="sev-track">
                                    <input type="range" id="severity" min="1" max="10" value="5">
                                    <span class="sev-badge-live" id="sevVal">5/10</span>
                                </div>
                                <div class="sev-labels"><span>Mild (1)</span><span>Moderate (5)</span><span>Severe (10)</span></div>
                            </div>

                            <!-- Duration -->
                            <div class="mb-3">
                                <label class="as-label">Duration <span class="req">*</span></label>
                                <div class="d-flex gap-2">
                                    <input type="number" id="durationValue" class="as-input"
                                           min="1" max="999" value="1" style="max-width:120px;" required>
                                    <select id="durationUnit" class="as-input" style="max-width:150px;">
                                        <option value="minutes">Minutes</option>
                                        <option value="hours" selected>Hours</option>
                                        <option value="days">Days</option>
                                    </select>
                                </div>
                                <div class="as-error" id="err-durationValue">
                                    <i class="bi bi-x-circle"></i><span></span>
                                </div>
                            </div>

                            <hr class="as-divider">

                            <!-- Trigger -->
                            <div class="mb-3">
                                <label class="as-label" for="symptomTrigger">Trigger <span class="req">*</span></label>
                                <select id="symptomTrigger" class="as-input" required>
                                    <option value="" disabled selected>Select a likely trigger…</option>
                                    <option value="Stress">Stress</option>
                                    <option value="Poor sleep">Poor sleep</option>
                                    <option value="Food">Food / diet</option>
                                    <option value="Weather">Weather</option>
                                    <option value="Exercise">Exercise</option>
                                    <option value="Illness">Illness</option>
                                    <option value="Unknown">Unknown</option>
                                    <option value="other">Other (specify)…</option>
                                </select>
                                <div class="as-error" id="err-symptomTrigger">
                                    <i class="bi bi-x-circle"></i><span></span>
                                </div>

                                <input type="text" id="customTrigger" class="as-input mt-2"
                                       placeholder="Describe the trigger" maxlength="60" disabled style="opacity:.5;">
                                <div class="as-error" id="err-customTrigger">
                                    <i class="bi bi-x-circle"></i><span></span>
                                </div>
                            </div>

                            <!-- Medication -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-7">
                                    <label class="as-label" for="medicationName">Medication Taken</label>
                                    <input type="text" id="medicationName" class="as-input"
                                           placeholder="Medication name (optional)" maxlength="60">
                                </div>
                                <div class="col-md-5">
                                    <label class="as-label" for="medicationDosage">Dosage</label>
                                    <input type="text" id="medicationDosage" class="as-input"
                                           placeholder="e.g. 400mg" maxlength="40">
                                    <div class="as-error" id="err-medicationDosage">
                                        <i class="bi bi-x-circle"></i><span></span>
                                    </div>
                                    <div class="as-hint">Only needed if you named a medication.</div>
                                </div>
                            </div>

                            <!-- Notes -->
                            <div class="mb-4">
                                <label class="as-label" for="symptomNotes">Notes</label>
                                <textarea id="symptomNotes" class="as-input as-textarea" maxlength="500"
                                          placeholder="Any additional context — location, activity, mood…"></textarea>
                                <div class="as-hint"><span id="notesCount">0</span>/500 characters</div>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex gap-3 justify-content-end flex-wrap">
                                <a href="/dashboard" class="as-cancel"><i class="bi bi-x-circle"></i> Cancel</a>
                                <button type="submit" class="as-submit" id="saveBtn">
                                    <i class="bi bi-save2-fill"></i> Save Symptom
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
(function () {
    'use strict';

    const STORAGE_KEY = 'symptoms';

    const form       = document.getElementById('symptomForm');
    const nameEl     = document.getElementById('symptomName');
    const dateEl     = document.getElementById('symptomDate');
    const sevEl      = document.getElementById('severity');
    const sevVal     = document.getElementById('sevVal');
    const durValEl   = document.getElementById('durationValue');
    const durUnitEl  = document.getElementById('durationUnit');
    const trigEl     = document.getElementById('symptomTrigger');
    const customEl   = document.getElementById('customTrigger');
    const medNameEl  = document.getElementById('medicationName');
    const medDoseEl  = document.getElementById('medicationDosage');
    const notesEl    = document.getElementById('symptomNotes');
    const saveBtn    = document.getElementById('saveBtn');
    const alertBox   = document.getElementById('formAlert');
    const alertText  = document.getElementById('formAlertText');
    const successBox = document.getElementById('formSuccess');

    /* ---------- helpers ---------- */

    // datetime-local needs local time, not UTC. toISOString() converts to UTC,
    // which shifts the default by your timezone offset (3h off in Nairobi).
    function localDateTimeValue(d) {
        const pad = n => String(n).padStart(2, '0');
        return d.getFullYear() + '-' + pad(d.getMonth() + 1) + '-' + pad(d.getDate())
             + 'T' + pad(d.getHours()) + ':' + pad(d.getMinutes());
    }

    function showError(el, message) {
        const box = document.getElementById('err-' + el.id);
        el.classList.add('is-invalid');
        el.classList.remove('is-valid');
        if (box) {
            box.querySelector('span').textContent = message;
            box.classList.add('show');
        }
    }

    function clearError(el) {
        const box = document.getElementById('err-' + el.id);
        el.classList.remove('is-invalid');
        if (box) box.classList.remove('show');
    }

    function markValid(el) {
        clearError(el);
        el.classList.add('is-valid');
    }

    /* ---------- individual field rules ---------- */

    const validators = {
        symptomName() {
            const v = nameEl.value.trim();
            if (!v)            return showError(nameEl, 'Please enter a symptom name.'), false;
            if (v.length < 2)  return showError(nameEl, 'Name must be at least 2 characters.'), false;
            if (!/[a-zA-Z]/.test(v)) return showError(nameEl, 'Name must contain letters.'), false;
            markValid(nameEl); return true;
        },

        symptomDate() {
            const v = dateEl.value;
            if (!v) return showError(dateEl, 'Please choose when this occurred.'), false;
            const picked = new Date(v);
            if (isNaN(picked.getTime())) return showError(dateEl, 'That date is not valid.'), false;
            // allow a 5-minute grace window for clock drift
            if (picked.getTime() > Date.now() + 5 * 60 * 1000) {
                return showError(dateEl, 'You cannot log a symptom in the future.'), false;
            }
            const tenYearsAgo = new Date(); tenYearsAgo.setFullYear(tenYearsAgo.getFullYear() - 10);
            if (picked < tenYearsAgo) return showError(dateEl, 'That date seems too far in the past.'), false;
            markValid(dateEl); return true;
        },

        durationValue() {
            const n = parseInt(durValEl.value, 10);
            if (!durValEl.value.trim()) return showError(durValEl, 'Please enter a duration.'), false;
            if (isNaN(n) || n < 1)      return showError(durValEl, 'Duration must be at least 1.'), false;
            if (n > 999)                return showError(durValEl, 'Duration looks too large.'), false;
            // catch physically odd entries like "500 days"
            if (durUnitEl.value === 'days' && n > 365) {
                return showError(durValEl, 'For durations over a year, log separate entries.'), false;
            }
            markValid(durValEl); return true;
        },

        symptomTrigger() {
            if (!trigEl.value) return showError(trigEl, 'Please select a trigger.'), false;
            markValid(trigEl); return true;
        },

        customTrigger() {
            if (trigEl.value !== 'other') { clearError(customEl); return true; }
            const v = customEl.value.trim();
            if (!v)           return showError(customEl, 'Please describe the trigger.'), false;
            if (v.length < 2) return showError(customEl, 'Please give a bit more detail.'), false;
            markValid(customEl); return true;
        },

        // Dosage is optional on its own, but required once a medication is named —
        // a med entry with no dose isn't much use when reviewing history later.
        medicationDosage() {
            const med  = medNameEl.value.trim();
            const dose = medDoseEl.value.trim();
            if (med && !dose) return showError(medDoseEl, 'Please add the dosage for this medication.'), false;
            if (!med && dose) return showError(medDoseEl, 'Please also name the medication.'), false;
            clearError(medDoseEl);
            if (dose) medDoseEl.classList.add('is-valid');
            return true;
        }
    };

    function validateAll() {
        // run every validator (no short-circuit) so all errors surface at once
        return Object.keys(validators).map(k => validators[k]()).every(Boolean);
    }

    /* ---------- live UI ---------- */

    sevEl.addEventListener('input', () => {
        const v = parseInt(sevEl.value, 10);
        sevVal.textContent = v + '/10';
        sevVal.style.background = v <= 3 ? '#2F9E76' : v <= 6 ? '#E0A32E' : '#C0392B';
    });

    trigEl.addEventListener('change', () => {
        const isOther = trigEl.value === 'other';
        customEl.disabled = !isOther;
        customEl.style.opacity = isOther ? '1' : '.5';
        if (!isOther) { customEl.value = ''; clearError(customEl); }
        else customEl.focus();
        validators.symptomTrigger();
    });

    notesEl.addEventListener('input', () => {
        document.getElementById('notesCount').textContent = notesEl.value.length;
    });

    // validate a field once the user leaves it, then live-correct it afterwards
    [nameEl, dateEl, durValEl, customEl, medDoseEl, medNameEl].forEach(el => {
        const run = () => {
            if (el === medNameEl) validators.medicationDosage();
            else if (validators[el.id]) validators[el.id]();
        };
        el.addEventListener('blur', run);
        el.addEventListener('input', () => { if (el.classList.contains('is-invalid')) run(); });
    });
    durUnitEl.addEventListener('change', validators.durationValue);

    /* ---------- storage ---------- */

    function readAll() {
        try {
            const raw = JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
            return Array.isArray(raw) ? raw : [];
        } catch (err) {
            console.warn('Stored symptoms were corrupt, starting fresh.', err);
            return [];
        }
    }

    async function save(record) {
    const response = await fetch('{{ route('user-data.store') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            symptom_name: record.name,
            logged_at: record.date,
            severity: record.severity,
            duration_value: record.duration.value,
            duration_unit: record.duration.unit,
            trigger_name: record.trigger,
            medication_name: record.medication ? record.medication.name : null,
            medication_dosage: record.medication ? record.medication.dosage : null,
            notes: record.notes
        })
    });

    if (!response.ok) {
        throw new Error('Failed to save symptom.');
    }

    const result = await response.json();

    if (result.success) {
        const all = readAll();
        all.unshift(record);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(all));
    }
}

    /* ---------- submit ---------- */

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        alertBox.classList.remove('show');

        if (!validateAll()) {
            alertText.textContent = 'Please fix the highlighted fields before saving.';
            alertBox.classList.add('show');
            const firstBad = form.querySelector('.is-invalid');
            if (firstBad) {
                firstBad.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstBad.focus({ preventScroll: true });
            }
            return;
        }

        const medName = medNameEl.value.trim();

        const record = {
            id: Date.now().toString(),
            name: nameEl.value.trim(),
            severity: parseInt(sevEl.value, 10),
            date: dateEl.value,
            duration: {
                value: parseInt(durValEl.value, 10),
                unit: durUnitEl.value
            },
            trigger: trigEl.value === 'other' ? customEl.value.trim() : trigEl.value,
            medication: medName
                ? { name: medName, dosage: medDoseEl.value.trim() }
                : null,
            notes: notesEl.value.trim(),
            createdAt: new Date().toISOString()
        };

        try {
            await save(record);
        } catch (err) {
            // localStorage throws when the browser is full or in private mode
            alertText.textContent = 'Could not save your symptom. Please try again.';
            alertBox.classList.add('show');
            console.error(err);
            return;
        }

        saveBtn.disabled = true;
        successBox.classList.add('show');
        successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
        setTimeout(() => { window.location.href = '/symptom_history'; }, 900);
    });

    /* ---------- init ---------- */
    dateEl.value = localDateTimeValue(new Date());
    dateEl.max   = localDateTimeValue(new Date());
    sevEl.dispatchEvent(new Event('input'));
})();
</script>

@endsection