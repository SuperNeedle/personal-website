<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class OverviewController extends Controller
{
    /**
     * Display the overview page.
     */
    public function index(): View
    {
        $bio = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam.',
            'Pellentesque ipsum. Cras elit nisl, facilisis eget, ultricies et, adipiscing ut, neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.',
        ];

        $heroPhotos = [
            ['id' => 1, 'label' => 'Photo 01 // Field Work'],
            ['id' => 2, 'label' => 'Photo 02 // Security & Systems'],
            ['id' => 3, 'label' => 'Photo 03 // Systems Architecture'],
            ['id' => 4, 'label' => 'Photo 04 // Research & Analysis'],
            ['id' => 5, 'label' => 'Photo 05 // Executive & Leadership'],
        ];

        $experiences = [
            [
                'role' => 'Lead Systems Architect',
                'institution' => 'Acme Distributed Labs',
                'date_range' => '2024 – Present',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'tags' => [
                    'domain' => ['Distributed Systems', 'Cloud Infrastructure', 'Enterprise SaaS'],
                    'skills' => ['Event-Driven Architecture', 'Queue Optimization', 'Site Reliability'],
                    'technology' => ['PHP 8.3', 'Laravel 13', 'Go', 'Docker', 'Kubernetes'],
                ],
            ],
            [
                'role' => 'Principal Systems Consultant',
                'institution' => 'CloudScale Ventures',
                'date_range' => '2023 – 2024',
                'description' => 'Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula.',
                'tags' => [
                    'domain' => ['Cloud Strategy', 'System Auditing'],
                    'skills' => ['Performance Benchmarking', 'Architecture Review'],
                    'technology' => ['AWS', 'Prometheus', 'Grafana', 'Terraform'],
                ],
            ],
            [
                'role' => 'Senior Backend Engineer',
                'institution' => 'HyperScale Technologies',
                'date_range' => '2021 – 2023',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'tags' => [
                    'domain' => ['API Services', 'Distributed Caching'],
                    'skills' => ['High Availability', 'Database Sharding'],
                    'technology' => ['Laravel', 'PostgreSQL', 'Redis', 'Python'],
                ],
            ],
            [
                'role' => 'Software Engineer (Kernel & eBPF)',
                'institution' => 'PacketFlow Systems',
                'date_range' => '2019 – 2021',
                'description' => 'Pellentesque ipsum. Cras elit nisl, facilisis eget, ultricies et, adipiscing ut, neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros.',
                'tags' => [
                    'domain' => ['Network Observability', 'Edge Computing'],
                    'skills' => ['Low-Latency IO', 'Packet Inspection'],
                    'technology' => ['C', 'Linux Kernel', 'Rust', 'eBPF'],
                ],
            ],
        ];

        $educations = [
            [
                'role' => 'B.S. in Computer Science & Distributed Systems',
                'institution' => 'University of Engineering & Technology',
                'date_range' => '2019 – 2023',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'tags' => [
                    'domain' => ['Academic Research', 'Distributed Algorithms'],
                    'skills' => ['Consensus Protocols', 'Operating Systems', 'Data Structures'],
                    'technology' => ['C++', 'Go', 'Python', 'Linux'],
                ],
            ],
            [
                'role' => 'Associate Degree in Information Systems',
                'institution' => 'Institute of Advanced Technology',
                'date_range' => '2017 – 2019',
                'description' => 'Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida.',
                'tags' => [
                    'domain' => ['Information Systems', 'Enterprise Architecture'],
                    'skills' => ['Relational Modeling', 'Systems Analysis'],
                    'technology' => ['Java', 'PHP', 'MySQL'],
                ],
            ],
            [
                'role' => 'Advanced Diploma in Computer Science & Mathematics',
                'institution' => 'Polytechnic Academy of Sciences',
                'date_range' => '2015 – 2017',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'tags' => [
                    'domain' => ['Foundational Computing', 'Applied Mathematics'],
                    'skills' => ['Discrete Mathematics', 'Algorithmic Complexity'],
                    'technology' => ['Python', 'C', 'Unix CLI'],
                ],
            ],
        ];

        return view('overview', compact('bio', 'heroPhotos', 'experiences', 'educations'));
    }
}
