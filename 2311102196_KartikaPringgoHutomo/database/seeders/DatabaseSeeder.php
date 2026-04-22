use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

public function run()
{
    Profile::create([
        'name' => 'Kartika Pringgo Hutomo',
        'age' => 22,
        'bio' => 'Mahasiswa Telkom University Purwokerto'
    ]);

    Skill::create([
        'name' => 'Basket'
    ]);

    Achievement::create([
        'title' => 'Juara 3 Lomba Basket',
        'description' => 'Tingkat Kabupaten mewakili Telkom University Purwokerto'
    ]);
}