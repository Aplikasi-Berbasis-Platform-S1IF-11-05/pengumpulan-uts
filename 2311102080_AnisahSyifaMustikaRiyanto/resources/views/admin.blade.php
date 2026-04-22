<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>

<h2>Edit Profile</h2>

<input type="text" id="name" placeholder="Nama"><br><br>
<textarea id="desc" placeholder="Deskripsi"></textarea><br><br>

<button onclick="updateData()">Save</button>

<hr>

<h2>Tambah Skill</h2>

<input type="text" id="skillName" placeholder="Nama skill">
<button onclick="addSkill()">Tambah</button>

<script>
function updateData() {
    fetch('/update-profile', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            name: document.getElementById('name').value,
            description: document.getElementById('desc').value
        })
    })
    .then(res => res.json())
    .then(data => {
        alert('Profile diupdate!');
    });
}

function addSkill() {
    fetch('/add-skill', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            name: document.getElementById('skillName').value
        })
    })
    .then(res => res.json())
    .then(data => {
        alert('Skill ditambahkan!');
    });
}
</script>

</body>
</html>