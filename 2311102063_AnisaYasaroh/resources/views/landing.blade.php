<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: white;
            color: black;
        }

        header {
            background: white;
            color: black;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
        }

        header a {
            color: white;
            text-decoration: none;
            background: darkblue;
            padding: 8px 16px;
            border-radius: 5px;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 80px 20px;
            text-align: center;
        }

        .hero img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid darkblue;
            margin-bottom: 20px;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            color: black;
            max-width: 600px;
            margin-bottom: 20px;
        }

        .skills {
            background: darkblue;
            color: white;
            padding: 60px 40px;
            text-align: center;
        }

        .skills h3 {
            font-size: 28px;
            margin-bottom: 30px;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
        }

        .skill-tag {
            background: darkblue;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: darkblue;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <h1>My Portofolio</h1>
    <a href="/admin">Admin</a>
</header>

<div class="hero">
    <h2 id="name">Portofolio</h2>
    <p id="description">Saya Anisa Yasaroh seorang mahasiswa Teknik Informatika.</p>

    <h3 id="name">Biodata</h3>
    <p id="description">NIM  : 2311102063</p>
    <p id="description">Umur : 20 tahun</p>
    <p id="description">Tempat Tinggal : Pekalongan</p>
    <p id="description">Agama : Islam</p>
</div>

<div class="skills">
    <h3>Skills</h3>
    <div class="skills-list" id="skills-list"></div>
    <p id="skills-description">Skill saya yaitu menggambar, desain, dan Data Analisis </p>
</div>

<script>
    fetch('/api/profile')
        .then(res => res.json())
        .then(data => {
            if (data) {
                document.getElementById('name').textContent = data.name;
                document.getElementById('description').textContent = data.description;
                document.getElementById('skills-description').textContent = data.skills_description;

                const skillsList = document.getElementById('skills-list');
                const skills = data.skills.split(',');
                skills.forEach(skill => {
                    const tag = document.createElement('span');
                    tag.className = 'skill-tag';
                    tag.textContent = skill.trim();
                    skillsList.appendChild(tag);
                });
            }
        });
</script>

</body>
</html>