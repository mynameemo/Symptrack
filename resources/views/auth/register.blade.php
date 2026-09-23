@extends('layouts.frontend')
@section('content')

<style>
    /* Reuses auth styles from login — define here as well for safety */
    .auth-wrap { background: var(--bg); min-height: 80vh; padding: 3rem 0 5rem; }
    .auth-card-new {
        background: #fff; border-radius: 22px;
        border: 1px solid var(--border);
        box-shadow: 0 12px 48px rgba(13,115,119,.10); overflow: hidden;
    }
    .auth-card-top {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        padding: 2.2rem 2rem 1.8rem; text-align: center;
    }
    .auth-card-top .auth-logo-circle {
        width: 64px; height: 64px; border-radius: 18px;
        background: rgba(255,255,255,.18); border: 2px solid rgba(255,255,255,.35);
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 1rem; font-size: 1.8rem; color: #fff;
    }
    .auth-card-top h2 { color: #fff; font-family: 'DM Serif Display', serif; font-size: 1.7rem; margin: 0 0 .3rem; }
    .auth-card-top p  { color: rgba(255,255,255,.8); font-size: .88rem; margin: 0; }
    .auth-card-form   { padding: 2rem 2.2rem 2.5rem; background: var(--mint); }

    .auth-label {
        display: block; font-weight: 600; color: var(--ink);
        margin-bottom: .4rem; font-size: .88rem;
    }
    .auth-input-wrap {
        display: flex; align-items: center;
        border: 1.5px solid var(--border); border-radius: 12px;
        background: #fff; overflow: hidden;
        transition: border-color .25s, box-shadow .25s;
        margin-bottom: 1rem;
    }
    .auth-input-wrap:focus-within {
        border-color: var(--teal);
        box-shadow: 0 0 0 3px rgba(13,115,119,.10);
    }
    .auth-input-icon {
        padding: 0 1rem; color: var(--teal); font-size: 1rem;
        background: var(--mint); border-right: 1.5px solid var(--border);
        display: flex; align-items: center; min-height: 48px;
    }
    .auth-input-wrap input,
    .auth-input-wrap select {
        flex: 1; border: none; outline: none;
        padding: .8rem 1rem; font-size: .93rem;
        color: var(--ink); background: #fff;
    }
    .auth-input-wrap select { cursor: pointer; }

    .auth-section-label {
        font-size: .72rem; font-weight: 700; letter-spacing: .1em;
        text-transform: uppercase; color: var(--teal-dark);
        margin: 1.4rem 0 .9rem;
        display: flex; align-items: center; gap: .6rem;
    }
    .auth-section-label::after { content:''; flex:1; height:1px; background: var(--border); }

    .auth-submit {
        width: 100%; padding: .9rem; border: none;
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        color: #fff; border-radius: 12px; font-weight: 700; font-size: .97rem;
        cursor: pointer; letter-spacing: .02em;
        transition: opacity .2s, transform .2s;
        box-shadow: 0 6px 20px rgba(13,115,119,.28);
    }
    .auth-submit:hover { opacity: .9; transform: translateY(-2px); }

    .auth-check { display: flex; align-items: flex-start; gap: .6rem; margin-bottom: 1.4rem; }
    .auth-check input[type=checkbox] { accent-color: var(--teal); width: 16px; height: 16px; margin-top: 2px; }
    .auth-check label { font-size: .85rem; color: var(--muted); }
    .auth-check a { color: var(--teal); font-weight: 600; text-decoration: none; }

    .auth-footer { text-align: center; margin-top: 1.2rem; font-size: .87rem; color: var(--muted); }
    .auth-footer a { color: var(--teal); font-weight: 600; text-decoration: none; }
    .auth-footer a:hover { color: var(--teal-dark); }

    .pwd-hint { font-size: .78rem; color: var(--muted); margin-top: -.6rem; margin-bottom: .8rem; }
    .pwd-match-ok  { color: var(--teal); font-size: .8rem; margin-top: -.6rem; margin-bottom: .8rem; }
    .pwd-match-bad { color: #c0392b; font-size: .8rem; margin-top: -.6rem; margin-bottom: .8rem; }

    .toggle-pwd-btn {
        background: none; border: none; padding: 0 .9rem;
        color: var(--muted); cursor: pointer;
    }

    .condition-picker {
    border: 1.5px solid var(--border); border-radius: 12px;
    background: #fff; padding: .5rem .7rem; position: relative;
}
.condition-tags { display: flex; flex-wrap: wrap; gap: .4rem; margin-bottom: .3rem; }
.condition-tag {
    background: var(--mint); border: 1px solid var(--border); border-radius: 20px;
    padding: .25rem .7rem; font-size: .82rem; display: flex; align-items: center; gap: .4rem;
}
.condition-tag button {
    background: none; border: none; color: var(--muted); cursor: pointer; font-size: .9rem; line-height: 1;
}
.condition-search {
    width: 100%; border: none; outline: none; padding: .5rem .2rem; font-size: .9rem;
}
.condition-dropdown {
    position: absolute; left: 0; right: 0; top: 100%; z-index: 20;
    background: #fff; border: 1.5px solid var(--border); border-radius: 10px;
    max-height: 200px; overflow-y: auto; margin-top: 4px;
    box-shadow: 0 8px 24px rgba(0,0,0,.08);
}
.condition-option {
    padding: .55rem .9rem; font-size: .88rem; cursor: pointer;
}
.condition-option:hover, .condition-option.active { background: var(--mint); }
.condition-option.add-new { color: var(--teal-dark); font-weight: 600; }
</style>

<div class="auth-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="auth-card-new">

                    <div class="auth-card-top">
                        <div class="auth-logo-circle">
                            <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <h2>Create Your Account</h2>
                        <p>Start tracking your health journey today — it's free</p>
                    </div>

                    <div class="auth-card-form">
                        <form method="POST" action="{{ route('register') }}" id="registerForm" novalidate>
                            @csrf

                            <!-- Personal Info -->
                            <div class="auth-section-label">Personal Information</div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="auth-label">Full Name</label>
                                    <div class="auth-input-wrap">
                                        <span class="auth-input-icon"><i class="bi bi-person"></i></span>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" required>
                                    </div>
                                    @error('name')<div style="color:#c0392b;font-size:.82rem;margin-top:-.6rem;margin-bottom:.7rem;">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="auth-label">Email Address</label>
                                    <div class="auth-input-wrap">
                                        <span class="auth-input-icon"><i class="bi bi-envelope"></i></span>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                                    </div>
                                    @error('email')<div style="color:#c0392b;font-size:.82rem;margin-top:-.6rem;margin-bottom:.7rem;">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="auth-label">Phone Number</label>
                                    <div class="auth-input-wrap">
                                        <span class="auth-input-icon"><i class="bi bi-telephone"></i></span>
                                        <input type="tel" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="+254 700 000 000" required>
                                    </div>
                                    @error('phonenumber')<div style="color:#c0392b;font-size:.82rem;margin-top:-.6rem;margin-bottom:.7rem;">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="auth-label">Gender</label>
                                    <div class="auth-input-wrap">
                                        <span class="auth-input-icon"><i class="bi bi-gender-ambiguous"></i></span>
                                        <select name="gender" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="male"   {{ old('gender')=='male'   ? 'selected':'' }}>Male</option>
                                            <option value="female" {{ old('gender')=='female' ? 'selected':'' }}>Female</option>
                                            <option value="other"  {{ old('gender')=='other'  ? 'selected':'' }}>Other</option>
                                            <option value="prefer-not-to-say" {{ old('gender')=='prefer-not-to-say' ? 'selected':'' }}>Prefer not to say</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="auth-label">Address</label>
                                    <div class="auth-input-wrap">
                                        <span class="auth-input-icon"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" name="address" value="{{ old('address') }}" placeholder="Your address" required>
                                    </div>
                                    @error('address')<div style="color:#c0392b;font-size:.82rem;margin-top:-.6rem;margin-bottom:.7rem;">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <!-- Security -->
                            <div class="auth-section-label">Security</div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="auth-label">Password</label>
                                    <div class="auth-input-wrap">
                                        <span class="auth-input-icon"><i class="bi bi-lock"></i></span>
                                        <input type="password" name="password" id="regPwd" placeholder="Min. 6 characters" minlength="6" required>
                                        <button type="button" class="toggle-pwd-btn" onclick="togglePwd('regPwd','regPwdEye')">
                                            <i class="bi bi-eye" id="regPwdEye"></i>
                                        </button>
                                    </div>
                                    @error('password')<div style="color:#c0392b;font-size:.82rem;margin-top:-.6rem;margin-bottom:.7rem;">{{ $message }}</div>@enderror
                                    <div class="pwd-hint">Must be at least 6 characters</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="auth-label">Confirm Password</label>
                                    <div class="auth-input-wrap">
                                        <span class="auth-input-icon"><i class="bi bi-lock-fill"></i></span>
                                        <input type="password" name="password_confirmation" id="regPwdC" placeholder="Repeat password" required>
                                        <button type="button" class="toggle-pwd-btn" onclick="togglePwd('regPwdC','regPwdCEye')">
                                            <i class="bi bi-eye" id="regPwdCEye"></i>
                                        </button>
                                    </div>
                                    <div id="pwdMatchMsg"></div>
                                </div>
                            </div>

                            <!-- Medical Conditions -->
                            <div class="mb-3">
                                <label class="auth-label">Medical Conditions</label>
                                <div class="condition-picker" id="medicalPicker" data-field="medical_conditions" data-hidden-name="medical_conditions">
                                    <div class="condition-tags" id="medicalTags"></div>
                                    <input type="text" class="auth-input-wrap-inner condition-search" id="medicalSearch"
                                        placeholder="Search or type a condition…" autocomplete="off">
                                    <div class="condition-dropdown" id="medicalDropdown" style="display:none;"></div>
                                </div>
                                <div id="medicalHiddenInputs"></div>
                            </div>

                            <!-- Mental Health Conditions -->
                            <div class="mb-3">
                                <label class="auth-label">Mental Health Conditions</label>
                                <div class="condition-picker" id="mentalPicker" data-field="mental_health_conditions" data-hidden-name="mental_health_conditions">
                                    <div class="condition-tags" id="mentalTags"></div>
                                    <input type="text" class="auth-input-wrap-inner condition-search" id="mentalSearch"
                                        placeholder="Search or type a condition…" autocomplete="off">
                                    <div class="condition-dropdown" id="mentalDropdown" style="display:none;"></div>
                                </div>
                                <div id="mentalHiddenInputs"></div>
                            </div>

                            <!-- Terms -->
                            <div class="auth-check mt-3">
                                <input type="checkbox" id="terms" required>
                                <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                            </div>

                            <button type="submit" class="auth-submit">
                                <i class="bi bi-person-check-fill me-2"></i>Create Account
                            </button>

                        </form>

                        <div class="auth-footer mt-3">
                            Already have an account? <a href="{{ route('login') }}">Sign in →</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePwd(inputId, iconId) {
    const inp = document.getElementById(inputId);
    const ico = document.getElementById(iconId);
    inp.type = inp.type === 'password' ? 'text' : 'password';
    ico.className = inp.type === 'password' ? 'bi bi-eye' : 'bi bi-eye-slash';
}

// Live password match indicator
const pwd  = document.getElementById('regPwd');
const pwdC = document.getElementById('regPwdC');
const msg  = document.getElementById('pwdMatchMsg');
function checkMatch() {
    if (!pwdC.value) { msg.textContent = ''; return; }
    if (pwd.value === pwdC.value) {
        msg.className = 'pwd-match-ok';
        msg.innerHTML = '<i class="bi bi-check-circle me-1"></i>Passwords match';
    } else {
        msg.className = 'pwd-match-bad';
        msg.innerHTML = '<i class="bi bi-x-circle me-1"></i>Passwords do not match';
        pwdC.setCustomValidity("Passwords don't match");
    }
    if (pwd.value === pwdC.value) pwdC.setCustomValidity('');
}
pwd.addEventListener('input', checkMatch);
pwdC.addEventListener('input', checkMatch);

// Form submit validation
document.getElementById('registerForm').addEventListener('submit', function(e) {
    if (!this.checkValidity() || pwd.value !== pwdC.value) {
        e.preventDefault();
        this.classList.add('was-validated');
        checkMatch();
    }
});

const medicalOptions = @json($medicalConditions->map(fn($c) => ['id' => $c->id, 'name' => $c->name]));
const mentalOptions = @json($mentalHealthConditions->map(fn($c) => ['id' => $c->id, 'name' => $c->name]));

function initConditionPicker(pickerId, searchId, dropdownId, tagsId, hiddenId, options, hiddenFieldName) {
    const search = document.getElementById(searchId);
    const dropdown = document.getElementById(dropdownId);
    const tagsWrap = document.getElementById(tagsId);
    const hiddenWrap = document.getElementById(hiddenId);
    let selected = []; // { type: 'existing'|'custom', id: number|null, name: string }

    function renderTags() {
        tagsWrap.innerHTML = '';
        hiddenWrap.innerHTML = '';
        selected.forEach((item, idx) => {
            const tag = document.createElement('span');
            tag.className = 'condition-tag';
            tag.innerHTML = `${item.name} <button type="button" data-idx="${idx}">&times;</button>`;
            tagsWrap.appendChild(tag);

            const hidden = document.createElement('input');
            hidden.type = 'hidden';
            if (item.type === 'existing') {
                hidden.name = `${hiddenFieldName}[]`;
                hidden.value = item.id;
            } else {
                hidden.name = `custom_${hiddenFieldName}[]`;
                hidden.value = item.name;
            }
            hiddenWrap.appendChild(hidden);
        });
        tagsWrap.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', () => {
                selected.splice(parseInt(btn.dataset.idx), 1);
                renderTags();
            });
        });
    }

    function renderDropdown(filter = '') {
        const lower = filter.toLowerCase();
        const matches = options.filter(o =>
            o.name.toLowerCase().includes(lower) &&
            !selected.some(s => s.type === 'existing' && s.id === o.id)
        );
        dropdown.innerHTML = '';

        matches.forEach(o => {
            const opt = document.createElement('div');
            opt.className = 'condition-option';
            opt.textContent = o.name;
            opt.addEventListener('click', () => {
                selected.push({ type: 'existing', id: o.id, name: o.name });
                renderTags();
                search.value = '';
                renderDropdown('');
                search.focus();
            });
            dropdown.appendChild(opt);
        });

        const exactMatch = options.some(o => o.name.toLowerCase() === lower) ||
                            selected.some(s => s.name.toLowerCase() === lower);
        if (filter.trim() && !exactMatch) {
            const addOpt = document.createElement('div');
            addOpt.className = 'condition-option add-new';
            addOpt.textContent = `+ Add "${filter.trim()}"`;
            addOpt.addEventListener('click', () => {
                selected.push({ type: 'custom', id: null, name: filter.trim() });
                renderTags();
                search.value = '';
                renderDropdown('');
                search.focus();
            });
            dropdown.appendChild(addOpt);
        }

        dropdown.style.display = (matches.length || filter.trim()) ? 'block' : 'none';
    }

    search.addEventListener('input', () => renderDropdown(search.value));
    search.addEventListener('focus', () => renderDropdown(search.value));
    document.addEventListener('click', (e) => {
        if (!document.getElementById(pickerId).contains(e.target)) {
            dropdown.style.display = 'none';
        }
    });
}

initConditionPicker('medicalPicker', 'medicalSearch', 'medicalDropdown', 'medicalTags', 'medicalHiddenInputs', medicalOptions, 'medical_conditions');
initConditionPicker('mentalPicker', 'mentalSearch', 'mentalDropdown', 'mentalTags', 'mentalHiddenInputs', mentalOptions, 'mental_health_conditions');
</script>

@endsection
