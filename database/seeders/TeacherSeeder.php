<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Dr. Maria Schmidt',
                'role' => 'German Language Expert',
                'country' => 'Germany',
                'description' => 'Native German speaker with 15+ years of teaching experience. Specializes in business German and exam preparation. PhD in German Literature from University of Munich.',
                'is_active' => true,
                'priority' => 10,
            ],
            [
                'name' => 'Prof. Hans Mueller',
                'role' => 'German Grammar Specialist',
                'country' => 'Austria',
                'description' => 'Professor of German Linguistics with expertise in grammar and syntax. Author of several German language textbooks. 20+ years of university teaching experience.',
                'is_active' => true,
                'priority' => 8,
            ],
            [
                'name' => 'Anna Weber',
                'role' => 'Conversational German Coach',
                'country' => 'Switzerland',
                'description' => 'Certified German teacher focusing on conversational skills and pronunciation. Fluent in Swiss German and High German. 10+ years of experience with international students.',
                'is_active' => true,
                'priority' => 7,
            ],
            [
                'name' => 'Michael Fischer',
                'role' => 'German for Beginners',
                'country' => 'Germany',
                'description' => 'Patient and experienced teacher specializing in beginner German courses. Uses interactive methods and modern teaching techniques. Perfect for those starting their German journey.',
                'is_active' => true,
                'priority' => 5,
            ],
            [
                'name' => 'Dr. Petra Wagner',
                'role' => 'Advanced German Literature',
                'country' => 'Germany',
                'description' => 'Expert in advanced German language and literature. Specializes in Goethe, Schiller, and modern German authors. PhD in German Studies with 18+ years of teaching experience.',
                'is_active' => true,
                'priority' => 6,
            ],
        ];

        foreach ($teachers as $teacherData) {
            Teacher::create($teacherData);
        }
    }
}