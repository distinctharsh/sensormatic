<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solution;
use App\Models\Resource;
use App\Models\Service;
use Illuminate\Support\Str;

class SampleContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample Solutions
        $solutions = [
            [
                'title' => 'Loss Prevention & Liability',
                'slug' => 'loss-prevention-liability',
                'description' => 'Our innovative solutions are designed to help retailers protect their merchandise, prevent shrink and fight the threats posed by retail crime.',
                'content' => '<p>Our comprehensive loss prevention solutions include electronic article surveillance, store compliance systems, merchandise protection, and shrink visibility tools. These solutions work together to create a robust defense against retail theft while maintaining a frictionless shopping experience.</p><p>Key features include:</p><ul><li>Electronic Article Surveillance (EAS)</li><li>Store Compliance Systems</li><li>Merchandise Protection</li><li>Shrink Visibility Analytics</li></ul>',
                'category' => 'Loss Prevention',
                'featured' => true,
                'order' => 1,
                'active' => true
            ],
            [
                'title' => 'Inventory Intelligence',
                'slug' => 'inventory-intelligence',
                'description' => 'We provide inventory visibility that helps maximize revenue and enables a more personalized and enhanced customer experience.',
                'content' => '<p>Our Inventory Intelligence solution gives you a heightened, item-level view of your inventory across the enterprise, helping to enable Unified Commerce. This comprehensive system provides real-time visibility into your inventory at every touchpoint.</p><p>Key capabilities include:</p><ul><li>Inventory Visibility</li><li>Storefront Visibility</li><li>Fitting Room Visibility</li><li>On-Floor Visibility</li><li>Supply Chain Intelligence</li></ul>',
                'category' => 'Inventory Intelligence',
                'featured' => true,
                'order' => 2,
                'active' => true
            ],
            [
                'title' => 'Traffic Insights',
                'slug' => 'traffic-insights',
                'description' => 'When you understand shopper traffic patterns, you can predict and prepare for them, ultimately getting the most from marketing and labor.',
                'content' => '<p>ShopperTrak traffic analytics enable retailers to deliver stronger customer experiences while helping to increase conversions. Our advanced analytics provide deep insights into shopper behavior and store performance.</p><p>Key features include:</p><ul><li>Shopper Journey Analytics</li><li>People Counting</li><li>Occupancy Solutions</li><li>Market Benchmarks</li><li>Brand Vitality Meter</li></ul>',
                'category' => 'Traffic Insights',
                'featured' => true,
                'order' => 3,
                'active' => true
            ]
        ];

        foreach ($solutions as $solution) {
            Solution::create($solution);
        }

        // Sample Resources
        $resources = [
            [
                'title' => 'Case Study: Macy\'s RFID Retail Revolution',
                'slug' => 'macys-rfid-retail-revolution',
                'description' => 'How Macy\'s implemented RFID technology to transform their inventory management and customer experience.',
                'content' => '<p>This comprehensive case study explores how Macy\'s successfully implemented RFID technology across their retail operations, resulting in improved inventory accuracy, reduced shrink, and enhanced customer satisfaction.</p><p>The implementation included:</p><ul><li>RFID tagging of merchandise</li><li>Real-time inventory tracking</li><li>Automated reordering systems</li><li>Enhanced customer service</li></ul>',
                'type' => 'Case Study',
                'author' => 'Sensormatic Team',
                'published_date' => '2024-01-15',
                'featured' => true,
                'active' => true
            ],
            [
                'title' => 'The Future of Retail Analytics',
                'slug' => 'future-retail-analytics',
                'description' => 'Exploring emerging trends in retail analytics and how they will shape the future of retail operations.',
                'content' => '<p>This white paper examines the latest developments in retail analytics technology and their implications for the future of retail. From AI-powered insights to real-time data processing, discover how analytics will continue to evolve.</p><p>Key topics covered:</p><ul><li>Artificial Intelligence in Retail</li><li>Real-time Data Processing</li><li>Predictive Analytics</li><li>Customer Behavior Analysis</li></ul>',
                'type' => 'White Paper',
                'author' => 'Dr. Sarah Johnson',
                'published_date' => '2024-02-20',
                'featured' => true,
                'active' => true
            ],
            [
                'title' => 'Loss Prevention Best Practices Guide',
                'slug' => 'loss-prevention-best-practices',
                'description' => 'A comprehensive guide to implementing effective loss prevention strategies in modern retail environments.',
                'content' => '<p>This guide provides retailers with practical strategies for implementing effective loss prevention programs. Based on years of industry experience and data analysis, these best practices can help reduce shrink and improve profitability.</p><p>Topics include:</p><ul><li>Employee Training Programs</li><li>Technology Integration</li><li>Process Optimization</li><li>Performance Measurement</li></ul>',
                'type' => 'eBook',
                'author' => 'Retail Security Institute',
                'published_date' => '2024-03-10',
                'featured' => true,
                'active' => true
            ],
            [
                'title' => 'Understanding Shopper Behavior',
                'slug' => 'understanding-shopper-behavior',
                'description' => 'Learn how to analyze and leverage shopper behavior data to improve store performance and customer satisfaction.',
                'content' => '<p>This article explores the various methods and technologies used to understand shopper behavior in retail environments. From traffic patterns to purchase decisions, discover how data can drive better business decisions.</p><p>Key insights include:</p><ul><li>Traffic Pattern Analysis</li><li>Dwell Time Optimization</li><li>Conversion Rate Improvement</li><li>Customer Journey Mapping</li></ul>',
                'type' => 'Article',
                'author' => 'Jane Smith',
                'published_date' => '2024-04-05',
                'featured' => true,
                'active' => true
            ]
        ];

        foreach ($resources as $resource) {
            Resource::create($resource);
        }

        // Sample Services
        $services = [
            [
                'title' => 'Implementation Services',
                'slug' => 'implementation-services',
                'description' => 'Professional implementation and setup services for all Sensormatic solutions.',
                'content' => '<p>Our expert implementation team ensures smooth deployment of all Sensormatic solutions. From initial planning to go-live support, we provide comprehensive implementation services tailored to your specific needs.</p><p>Services include:</p><ul><li>Project Planning and Management</li><li>System Installation and Configuration</li><li>Staff Training and Certification</li><li>Go-live Support and Optimization</li></ul>',
                'icon' => 'fas fa-cogs',
                'featured' => true,
                'order' => 1,
                'active' => true
            ],
            [
                'title' => 'Support and Maintenance',
                'slug' => 'support-maintenance',
                'description' => 'Ongoing support and maintenance services to ensure optimal performance of your Sensormatic solutions.',
                'content' => '<p>Our support team provides 24/7 assistance and regular maintenance to keep your systems running at peak performance. We offer various support tiers to meet your specific requirements.</p><p>Support features:</p><ul><li>24/7 Technical Support</li><li>Regular System Maintenance</li><li>Software Updates and Patches</li><li>Performance Monitoring</li></ul>',
                'icon' => 'fas fa-headset',
                'featured' => true,
                'order' => 2,
                'active' => true
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
