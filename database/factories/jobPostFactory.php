<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\jobPost;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jobPost>
 */
class jobPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = jobPost::class;

    public function definition(): array
    {
        $jobpostTitles = ['Software Engineer', 'Web Developer', 'Frontend Developer', 'Backend Developer', 'Fullstack Developer', 'DevOps Engineer', 'Data Scientist', 'Data Engineer', 'Data Analyst', 'Machine Learning Engineer', 'Product Manager', 'Project Manager', 'Technical Project Manager', 'Technical Program Manager', 'Engineering Manager', 'Engineering Director', 'VP of Engineering', 'CTO', 'CEO', 'COO', 'CFO', 'CMO', 'VP of Marketing', 'VP of Sales', 'VP of Product', 'VP of Design', 'VP of Operations', 'VP of Finance', 'VP of HR', 'VP of People', 'VP of Talent', 'VP of Recruiting', 'VP of Customer Success', 'VP of Customer Support', 'VP of Customer Experience', 'VP of Business Development', 'VP of Partnerships', 'VP of Alliances', 'VP of Strategy', 'VP of Growth', 'VP of Analytics', 'VP of Data', 'VP of Security', 'VP of Compliance', 'VP of Legal', 'VP of Risk', 'VP of Privacy', 'VP of Engineering', 'VP of IT', 'VP of Infrastructure', 'VP of Cloud', 'VP of Architecture', 'VP of Mobile', 'VP of Desktop', 'VP of Web', 'VP of Frontend', 'VP of Backend', 'VP of Fullstack', 'VP of QA', 'VP of Testing', 'VP of Automation', 'VP of AI', 'VP of ML', 'VP of Machine Learning', 'VP of Deep Learning', 'VP of Blockchain', 'VP of Crypto', 'VP of Cryptocurrency', 'VP of Bitcoin', 'VP of Ethereum', 'VP of DeFi', 'VP of NFT', 'VP of Non-Fungible Tokens', 'VP of Smart Contracts', 'VP of Solidity', 'VP of Rust', 'VP of Go', 'VP of Python', 'VP of Java', 'VP of C', 'VP of C++', 'VP of C#', 'VP of .NET', 'VP of PHP', 'VP of Ruby', 'VP of Swift', 'VP of Kotlin', 'VP of Scala', 'VP of TypeScript', 'VP of JavaScript', 'VP of Node.js', 'VP of React', 'VP of React Native', 'VP of Vue.js', 'VP of Angular', 'VP of Svelte', 'VP of Next.js'];
        return [
            'title' => $this->faker->randomElement($jobpostTitles),
            'description' => fake()->sentence(10),
            'uid' => fake()->unique()->uuid(),
        ];
    }
}
