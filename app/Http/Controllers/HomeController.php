<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $features = [
            [
                'title' => 'Advanced Analytics',
                'description' => 'Get deep insights into your business performance with real-time analytics and custom reports.',
                'icon' => 'chart-line',
                'color' => 'blue'
            ],
            [
                'title' => 'Enterprise Security',
                'description' => 'Comprehensive security solution with encryption and compliance monitoring.',
                'icon' => 'shield-check',
                'color' => 'green'
            ],
            [
                'title' => 'Scalable Infrastructure',
                'description' => 'Built to grow with your business, our infrastructure scales effortlessly.',
                'icon' => 'server',
                'color' => 'purple'
            ]
        ];

        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'position' => 'CEO, TechCorp',
                'quote' => 'This platform transformed our business operations. The analytics alone saved us thousands in wasted resources.',
                'image' => 'https://image.pollinations.ai/prompt/professional%20business%20woman%20headshot%20smiling%20in%20office%20setting/400/400'
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'CTO, Innovatech',
                'quote' => 'The security features gave us peace of mind knowing our data is protected at all times.',
                'image' => 'https://image.pollinations.ai/prompt/professional%20business%20man%20headshot%20smiling%20in%20modern%20office/400/400'
            ]
        ];

        return view('welcome', compact('features', 'testimonials'));
    }

    public function about()
    {
        $team = [
            [
                'name' => 'Jane Smith',
                'position' => 'Founder & CEO',
                'bio' => 'With over 15 years in the tech industry, Jane leads our vision for innovation and excellence.',
                'image' => 'https://image.pollinations.ai/prompt/professional%20business%20woman%20headshot%20smiling%20in%20office%20setting/400/400'
            ],
            [
                'name' => 'Robert Johnson',
                'position' => 'Chief Technology Officer',
                'bio' => 'Robert brings cutting-edge technology solutions to our platform, ensuring we stay ahead of the curve.',
                'image' => 'https://image.pollinations.ai/prompt/professional%20business%20man%20headshot%20smiling%20in%20modern%20office/400/400'
            ],
            [
                'name' => 'Emily Davis',
                'position' => 'Head of Product',
                'bio' => 'Emily oversees our product development, ensuring we create solutions that meet our customers\' needs.',
                'image' => 'https://image.pollinations.ai/prompt/professional%20business%20woman%20headshot%20smiling%20in%20office%20setting/400/400'
            ]
        ];

        return view('about', compact('team'));
    }

    public function services()
    {
        $services = [
            [
                'title' => 'Custom Software Development',
                'description' => 'We build tailored software solutions to meet your specific business needs.',
                'icon' => 'code',
                'color' => 'blue'
            ],
            [
                'title' => 'Cloud Solutions',
                'description' => 'Leverage our cloud expertise to optimize your infrastructure and operations.',
                'icon' => 'cloud',
                'color' => 'purple'
            ],
            [
                'title' => 'Data Analytics',
                'description' => 'Transform your data into actionable insights with our advanced analytics services.',
                'icon' => 'chart-bar',
                'color' => 'green'
            ],
            [
                'title' => 'Cybersecurity',
                'description' => 'Protect your business with our comprehensive cybersecurity solutions.',
                'icon' => 'lock-closed',
                'color' => 'red'
            ]
        ];

        return view('services', compact('services'));
    }

    public function contact()
    {
        return view('contact');
    }
}