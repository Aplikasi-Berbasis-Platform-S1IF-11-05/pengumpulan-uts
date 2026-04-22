use App\Models\Skill;

public function getData()
{
    $profile = Profile::first();
    $skills = Skill::all();

    return response()->json([
        'profile' => $profile,
        'skills' => $skills
    ]);
}
public function addSkill(\Illuminate\Http\Request $request)
{
    \App\Models\Skill::create([
        'name' => $request->name
    ]);

    return response()->json(['message' => 'Skill ditambahkan']);
}