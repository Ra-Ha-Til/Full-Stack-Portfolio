<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function education()
    {
        $education = [
            [
                'image' => 'ssc.jpg',
                'title' => 'Secondary School Certificate',
                'year' => '2015',
                'institution' => 'ABC High School'
            ],
            [
                'image' => 'hsc.jpg',
                'title' => 'Higher Secondary Certificate',
                'year' => '2017',
                'institution' => 'XYZ College'
            ],
            [
                'image' => 'university.jpg',
                'title' => 'Bachelor of Science in Computer Science',
                'year' => '2021',
                'institution' => 'University of Technology'
            ]
        ];

        return view('education', compact('education'));
    }

    public function specialization()
    {
        $technologies = [
            'Python',
            'C++',
            'C',
            'Dart',
            'Flutter',
            'JavaScript',
            'Laravel',
            'PHP'
        ];

        return view('specialization', compact('technologies'));
    }

    public function skills()
    {
        $skills = [
            ['name' => 'Laravel', 'level' => 80],
            ['name' => 'PHP', 'level' => 85],
            ['name' => 'JavaScript', 'level' => 75],
            ['name' => 'Flutter', 'level' => 70],
            ['name' => 'Python', 'level' => 65],
            ['name' => 'MySQL', 'level' => 75],
        ];

        return view('skills', compact('skills'));
    }

    public function blog()
    {
        $posts = [
            [
                'title' => 'Getting Started with Laravel',
                'content' => 'I love building web and mobile apps. Currently learning advanced Laravel and Flutter. I write about my learning experiences here.',
                'date' => '2023-05-15'
            ],
            [
                'title' => 'Flutter for Cross-Platform Development',
                'content' => 'Exploring the power of Flutter for building beautiful cross-platform applications with a single codebase.',
                'date' => '2023-06-20'
            ]
        ];

        return view('blog', compact('posts'));
    }

    public function projects()
    {
        $projects = [
            [
                'name' => 'E-Commerce App',
                'url' => 'https://github.com/yourusername/ecommerce-app',
                'description' => 'A full-featured e-commerce platform built with Laravel'
            ],
            [
                'name' => 'Task Management System',
                'url' => 'https://github.com/yourusername/task-manager',
                'description' => 'A productivity app for managing daily tasks'
            ],
            [
                'name' => 'Portfolio Website',
                'url' => 'https://github.com/yourusername/portfolio',
                'description' => 'This very portfolio website built with Laravel'
            ]
        ];

        return view('projects', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }
}