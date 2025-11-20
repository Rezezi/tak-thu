<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $stats = [
            'total_products' => 1245,
            'total_orders' => 872,
            'total_customers' => 431,
            'revenue' => 125432.50
        ];

        $recent_orders = [
            [
                'id' => '#1001',
                'customer' => 'John Doe',
                'date' => '2023-10-15',
                'status' => 'Completed',
                'total' => 125.99
            ],
            [
                'id' => '#1002',
                'customer' => 'Jane Smith',
                'date' => '2023-10-14',
                'status' => 'Processing',
                'total' => 89.50
            ],
            [
                'id' => '#1003',
                'customer' => 'Robert Johnson',
                'date' => '2023-10-13',
                'status' => 'Shipped',
                'total' => 150.75
            ]
        ];

        $revenue_data = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            'datasets' => [
                [
                    'label' => 'Revenue',
                    'data' => [12000, 15000, 18000, 14000, 20000, 22000, 25000, 28000, 30000, 32000, 35000, 38000],
                    'backgroundColor' => 'rgba(59, 130, 246, 0.2)',
                    'borderColor' => 'rgba(59, 130, 246, 1)',
                    'borderWidth' => 2
                ]
            ]
        ];

        return view('admin.dashboard', compact('stats', 'recent_orders', 'revenue_data'));
    }

    public function products()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $products = [
            [
                'id' => 1,
                'name' => 'Premium Business Software',
                'category' => 'Software',
                'price' => 999.99,
                'stock' => 50,
                'status' => 'Active'
            ],
            [
                'id' => 2,
                'name' => 'Enterprise Cloud Solution',
                'category' => 'Cloud Services',
                'price' => 1499.99,
                'stock' => 30,
                'status' => 'Active'
            ],
            [
                'id' => 3,
                'name' => 'Advanced Analytics Package',
                'category' => 'Data Services',
                'price' => 799.99,
                'stock' => 20,
                'status' => 'Active'
            ]
        ];

        return view('admin.products', compact('products'));
    }

    public function orders()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $orders = [
            [
                'id' => '#1001',
                'customer' => 'John Doe',
                'date' => '2023-10-15',
                'status' => 'Completed',
                'total' => 125.99,
                'items' => 2
            ],
            [
                'id' => '#1002',
                'customer' => 'Jane Smith',
                'date' => '2023-10-14',
                'status' => 'Processing',
                'total' => 89.50,
                'items' => 1
            ],
            [
                'id' => '#1003',
                'customer' => 'Robert Johnson',
                'date' => '2023-10-13',
                'status' => 'Shipped',
                'total' => 150.75,
                'items' => 3
            ]
        ];

        return view('admin.orders', compact('orders'));
    }

    public function customers()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $customers = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '(123) 456-7890',
                'orders' => 5,
                'total_spent' => 450.50
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '(234) 567-8901',
                'orders' => 3,
                'total_spent' => 210.75
            ],
            [
                'id' => 3,
                'name' => 'Robert Johnson',
                'email' => 'robert@example.com',
                'phone' => '(345) 678-9012',
                'orders' => 7,
                'total_spent' => 620.99
            ]
        ];

        return view('admin.customers', compact('customers'));
    }

    public function settings()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $settings = [
            'site_name' => 'Business Solutions Inc.',
            'site_email' => 'info@businesssolutions.com',
            'site_phone' => '(123) 456-7890',
            'address' => '123 Business Street, Suite 100, New York, NY 10001',
            'currency' => 'USD',
            'timezone' => 'America/New_York'
        ];

        return view('admin.settings', compact('settings'));
    }
}