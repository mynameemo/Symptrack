@extends('layouts.frontend')
@section('content')


<body>
<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home.html">
            <img src="assets/images/logo.jpeg" width="50" height="50">SympTrack
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-2">
                <li class="nav-item"><a href="/" class="btn btn-primary">Home</a></li>
                <li class="nav-item"><a href="dashboard" class="btn btn-primary">Dashboard</a></li>
                <li class="nav-item"><a href="add_symptom" class="btn btn-primary">Add Symptom</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- MAIN CONTENT -->
<div class="container py-5">
    <div class="mb-5"></div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h3 class="mb-3">Symptom History</h3>

            <div class="table-responsive mt-4">
                <table id="symptomsTable" class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Symptom Name</th>
                            <th>Severity</th>
                            <th>Notes</th>
                            <th>Trigger</th>
                            <th>Duration</th>
                            <th>Medication</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
let symptomsTable;
let symptomToDelete = null;

document.addEventListener('DOMContentLoaded', function() {
    const symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];

    symptomsTable = $('#symptomsTable').DataTable({
        data: symptoms,
        columns: [
            { data: 'name' },
            { 
                data: 'severity',
                render: function(data, type) {
                    if(type === 'display'){
                        const level = Math.ceil(data / 2);
                        return `<div class="d-flex align-items-center">
                            <span class="severity-indicator severity-${level}"></span>${data}/10
                        </div>`;
                    }
                    return data;
                }
            },
            { data: 'notes', defaultContent: "-" },
            { data: 'trigger', defaultContent: "-" },
            { data: 'duration', defaultContent: "-" },
            { data: 'medication', defaultContent: "-" },
            { 
                data: 'id',
                orderable: false,
                render: function(id){
                    return `<button class="btn btn-outline-primary btn-sm me-1" onclick="editSymptom('${id}')">
                        <i class="bi bi-pencil"></i></button>
                        <button class="btn btn-outline-danger btn-sm" onclick="deleteSymptomById('${id}')">
                        <i class="bi bi-trash"></i></button>`;
                }
            }
        ],
        pageLength: 10,
        responsive: true,
        autoWidth: false,
        language: { searchPlaceholder: "Search symptoms..." },
        drawCallback: function(){ $(this).css('transform','translate3d(0,0,0)'); }
    });
});

function editSymptom(id){
    window.location.href = `edit-symptom.html?id=${id}`;
}

function deleteSymptomById(id){
    let symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];
    symptoms = symptoms.filter(s => s.id !== id);
    localStorage.setItem('symptoms', JSON.stringify(symptoms));
    symptomsTable.clear().rows.add(symptoms).draw();
}
</script>

</body>
</html>

@endsection