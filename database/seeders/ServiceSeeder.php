namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // List of Cloud Dextra services and their icons
        $services = [
            'Virtual Assistant Services' => '💻', 
            'Website Design & Management' => '🌐', 
            'SEO' => '📈', 
            'Lead Generation' => '🎯', 
            'Social Media Management' => '📱', 
            'Digital Marketing' => '🚀', 
            'Email Marketing' => '✉️', 
            'QuickBooks Management' => '📊'
        ];

        // Loop through and save each one to the database
        foreach ($services as $name => $icon) {
            Service::create([
                'name' => $name,
                'icon' => $icon
            ]);
        }
    }
}