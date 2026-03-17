{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Calls" icon="la la-question" :link="backpack_url('call')" />
<x-backpack::menu-item title="Contacts" icon="la la-question" :link="backpack_url('contact')" />
<x-backpack::menu-item title="Abouts" icon="la la-question" :link="backpack_url('about')" />
<x-backpack::menu-item title="Footers" icon="la la-question" :link="backpack_url('footer')" />
<x-backpack::menu-item title="Frontends" icon="la la-question" :link="backpack_url('frontend')" />
<x-backpack::menu-item title="Locations" icon="la la-question" :link="backpack_url('location')" />
<x-backpack::menu-item title="Messages" icon="la la-question" :link="backpack_url('message')" />
<x-backpack::menu-item title="Missions" icon="la la-question" :link="backpack_url('mission')" />
<x-backpack::menu-item title="Symptoms" icon="la la-question" :link="backpack_url('symptom')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Values" icon="la la-question" :link="backpack_url('value')" />
<x-backpack::menu-item title="W t es" icon="la la-question" :link="backpack_url('w-t-e')" />
<x-backpack::menu-item title="User symptoms" icon="la la-question" :link="backpack_url('user-symptom')" />
<x-backpack::menu-item title="Triggers" icon="la la-question" :link="backpack_url('trigger')" />
<x-backpack::menu-item title="Carousels" icon="la la-question" :link="backpack_url('carousel')" />