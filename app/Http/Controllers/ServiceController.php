<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    // private $data;

    // public function __construct()
    // {

    // $this->data = [

    //     'banner_image' => "",
    //     'section_1' => [
    //         'banner_img' => '',
    //         'title' => '',
    //         'subtitle' => '',
    //         'bullet_points' => []
    //     ],
    // ];
    // }


    public function socialMediaMarketing()
    {

        // dd($this->data);

        $data =  [
            'banner_image' => "assets/images/Services/Social media/Social media marketing/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Social media/Social media marketing/Img 1.png',
                'mobile_banner_img' => 'assets/images/Mobile Responsive/Social media marketing/Img 1.png',
                'title' => 'Social Media Marketing for Businesses',
                'subtitle' => 'Your customers are on social media—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted social media strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is social media marketing essential for your business?',
                    'How to create and implement an effective social media strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Social media/Social media marketing/img2.png',
                'mobile_banner_img' => 'assets/images/Mobile Responsive/Social media marketing/Img2.png',
                'title' => 'What is social media marketing?',
                'subtitle' => ' Social media marketing is more than just posting updates—it’s about building connections, establishing authority, and driving real business results. The right strategy helps increase visibility, boost conversions, and create a loyal customer base.',
                'bullet_points' => [
                    '<strong>Profile Enhancement:</strong> Craft a professional and engaging brand identity.',
                    '<strong>Content Strategy:</strong> Create impactful posts, videos, and ads to drive audience interaction.',
                    '<strong>Audience Engagement:</strong> Foster relationships with your followers through active communication.',
                    '<strong>Growth & Analytics:</strong> Track performance, optimize strategies, and maximize reach.'
                ]
            ],
            'faqs' => [
                [
                    'que' => 'How quickly will I see results from social media marketing?',
                    'ans' => "Results vary based on your industry, audience, and strategy. Generally, you'll see initial engagement improvements within 1-2 months, with more significant ROI developing over 3-6 months."
                ],
                [
                    'que' => "Which social media platforms should my business use?",
                    'ans' => "This depends on your target audience, industry, and content strategy. We'll help you identify where your customers are most active for effective resource use.",
                ],
                [
                    'que' => "How much should I budget for social media advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure social media marketing success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you full insight into what's working.",
                ],
                [
                    'que' => "How much should I budget for social media advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure social media marketing success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you full insight into what's working.",
                ]

            ]

        ];



        return view('pages.service', compact('data'));
    }
    public function socialMediaOptimization() {


        $data =  [

            'banner_image' => "assets/images/Services/Social media/Social media optimization/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Social media/Social media optimization/Frame 4558.png',
                'mobile_banner_img' => 'assets/images/Mobile Responsive/Social media Optimization/Img 1.png',
                'title' => 'Optimize Your Social Media for Maximum Impact',
                'subtitle' => 'Having a social media presence is not enough—optimizing it ensures that your brand reaches the right audience, engages effectively, and stands out from the competition. Social Media Optimization (SMO) helps enhance brand credibility, improve search rankings, and drive meaningful interactions.',
                'bullet_points' => [
                    'What is social media optimization, and why does it matter?',
                    'How can SMO improve engagement and brand recognition?',
                    'Best techniques to optimize content, profiles, and interactions.'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Social media/Social media optimization/Frame 1261155762.png',
                'mobile_banner_img' => 'assets/images/Mobile Responsive/Social media Optimization/Img2.png',
                'title' => 'Why Social Media Optimization Matters?',
                'subtitle' => 'Social media optimization is the key to making your brand more discoverable, interactive, and engaging. A well-optimized profile and strategy help you connect with your audience, improve user experience, and drive organic traffic.',
                'bullet_points' => [
                    '<strong>Profile Enhancement: </strong> Create professional, keyword-rich bios and visually appealing layouts.',
                    '<strong>Content Strategy:</strong> Structure posts for better readability, engagement, and reach.',
                    '<strong>Hashtag & SEO Strategy:</strong> Use relevant keywords and trending hashtags to maximize visibility.',
                    '<strong>Community Engagement:</strong> Foster strong relationships with followers through meaningful interactions.'
                ]
            ],
            'faqs' => [

                [
                    'que' => 'How quickly will I see results from social media Optimization?',
                    'ans' => "Results vary based on your industry, audience, and strategy. Generally, you'll see initial engagement improvements within 1-2 months, with more significant ROI developing over 3-6 months.",
                ],
                [
                    'que' => 'Which social media platforms should my business use?',
                    'ans' => "This depends on your target audience, industry, and content strategy. We'll help you identify where your customers are most active for effective resource use.",
                ],
                [
                    'que' => 'How much should I budget for social media advertising?',
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify what works best for your audience and goals.",
                ],
                [
                    'que' => 'How do you measure social media Optimization success?',
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you full insight into what's working.",
                ],
                [
                    'que' => 'How much should I budget for social media advertising?',
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify what works best for your audience and goals.",
                ],
                [
                    'que' => 'How do you measure social media Optimization success?',
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you full insight into what's working.",
                ],

            ]
        ];

        return view('pages.service', compact('data'));
    }
}
