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
                'year' => '2017',
                'institution' => 'BM Union High School & College'
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

    public function specializationSkills()
    {
        $technologies = [
            'Laravel',
            'PHP',
            'Flutter',
            'Dart',
            'JavaScript',
            'Python',
            'C++',
            'MySQL'
        ];

        $skills = [
            ['name' => 'Laravel', 'level' => 85, 'color' => 'bg-primary'],
            ['name' => 'PHP', 'level' => 80, 'color' => 'bg-info'],
            ['name' => 'Flutter', 'level' => 75, 'color' => 'bg-success'],
            ['name' => 'JavaScript', 'level' => 70, 'color' => 'bg-warning'],
            ['name' => 'Python', 'level' => 65, 'color' => 'bg-secondary'],
            ['name' => 'MySQL', 'level' => 75, 'color' => 'bg-danger']
        ];

        return view('specialization-skills', compact('technologies', 'skills'));
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