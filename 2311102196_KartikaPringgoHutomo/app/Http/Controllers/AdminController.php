use App\Models\Profile;
use App\Models\Skill;
use App\Models\Achievement;

class AdminController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        $achievements = Achievement::all();

        return view('admin.dashboard', compact('profile','skills','achievements'));
    }

    public function updateProfile(Request $request)
    {
        $profile = Profile::first();
        $profile->update($request->all());

        return back();
    }

    public function addSkill(Request $request)
    {
        Skill::create($request->all());
        return back();
    }

    public function deleteSkill($id)
    {
        Skill::destroy($id);
        return back();
    }

    public function addSkill(Request $request)
{
    $request->validate([
        'name' => 'required'
    ]);

    Skill::create($request->all());
    return back()->with('success', 'Skill berhasil ditambahkan');
}

    public function deleteAchievement($id)
    {
        Achievement::destroy($id);
        return back();
    }
}