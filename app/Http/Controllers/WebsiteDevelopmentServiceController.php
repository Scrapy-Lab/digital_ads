<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteDevelopmentServiceController extends Controller
{
    public function websiteDesigAndDevelopment(){

        $data = [

            'banner_image' => "assets/images/Services/Development/Website Designing & Development/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Development/Website Designing & Development/img1.png',
                'mobile_banner_img' => "assets/images/Services/Development/Website Designing & Development/img1.png",
                'title' => 'Website Designing & Development for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Website Designing & Development essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Development/Website Designing & Development/img2.png',
                'mobile_banner_img' => "assets/images/Services/Development/Website Designing & Development/img2.png",
                'title' => 'Website Designing & Development for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Website Designing & Development essential for your business?</strong>',
                    '<strong>How to create and implement an effective Digital Markeing strategy?</strong>',
                    '<strong>Which platforms are best suited for your industry?</strong>'
                ]
            ],
            'faqs' => [

                [
                    'que' => "How quickly will I see results from Digital Markeing
                                        Community Management?",
                    'ans' => "Results vary based on your industry, audience, and strategy. Generally, you'll
                                        see initial engagement improvements within 1-2 months, with more significant ROI
                                        developing over 3-6 months.",
                ],
                [
                    'que' => "Which Digital Markeing platforms should my business
                                        use?",
                    'ans' => "This depends on your target audience, industry, and content strategy. We'll help
                                        you identify where your customers are most active for effective resource use.",
                ],
                [
                    'que' => "How much should I budget for Digital Markeing
                                        advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify
                                        what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Whatsapp Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],
                [
                    'que' => "How much should I budget for Digital Markeing
                                        advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify
                                        what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Whatsapp Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],

            ]
        ];

        return view('pages.website-design-development-service', compact('data'));

    }

    public function ecommerceDevelopment(){

        $data = [

            'banner_image' => "assets/images/Services/Development/Ecommerce Development/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Development/Ecommerce Development/img1.png',
                'mobile_banner_img' => "assets/images/Services/Development/Ecommerce Development/img1.png",
                'title' => 'Ecommerce Development for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Ecommerce Development essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Development/Ecommerce Development/img2.png',
                'mobile_banner_img' => "assets/images/Services/Development/Ecommerce Development/img2.png",
                'title' => 'Ecommerce Development for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Ecommerce Development essential for your business?</strong>',
                    '<strong>How to create and implement an effective Digital Markeing strategy?</strong>',
                    '<strong>Which platforms are best suited for your industry?</strong>'
                ]
            ],
            'faqs' => [

                [
                    'que' => "How quickly will I see results from Digital Markeing
                                        Community Management?",
                    'ans' => "Results vary based on your industry, audience, and strategy. Generally, you'll
                                        see initial engagement improvements within 1-2 months, with more significant ROI
                                        developing over 3-6 months.",
                ],
                [
                    'que' => "Which Digital Markeing platforms should my business
                                        use?",
                    'ans' => "This depends on your target audience, industry, and content strategy. We'll help
                                        you identify where your customers are most active for effective resource use.",
                ],
                [
                    'que' => "How much should I budget for Digital Markeing
                                        advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify
                                        what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Whatsapp Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],
                [
                    'que' => "How much should I budget for Digital Markeing
                                        advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify
                                        what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Whatsapp Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],

            ]
        ];

        return view('pages.website-design-development-service', compact('data'));

    }


    public function wordpressWebsiteDevelopment(){

        $data = [

            'banner_image' => "assets/images/Services/Development/Wordpress Website Development/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Development/Wordpress Website Development/img1.png',
                'mobile_banner_img' => "assets/images/Services/Development/Wordpress Website Development/img1.png",
                'title' => 'Wordpress Website Development for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Wordpress Website Development essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Development/Wordpress Website Development/img2.png',
                'mobile_banner_img' => "assets/images/Services/Development/Wordpress Website Development/img2.png",
                'title' => 'Wordpress Website Development for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Wordpress Website Development essential for your business?</strong>',
                    '<strong>How to create and implement an effective Digital Markeing strategy?</strong>',
                    '<strong>Which platforms are best suited for your industry?</strong>'
                ]
            ],
            'faqs' => [

                [
                    'que' => "How quickly will I see results from Digital Markeing
                                        Community Management?",
                    'ans' => "Results vary based on your industry, audience, and strategy. Generally, you'll
                                        see initial engagement improvements within 1-2 months, with more significant ROI
                                        developing over 3-6 months.",
                ],
                [
                    'que' => "Which Digital Markeing platforms should my business
                                        use?",
                    'ans' => "This depends on your target audience, industry, and content strategy. We'll help
                                        you identify where your customers are most active for effective resource use.",
                ],
                [
                    'que' => "How much should I budget for Digital Markeing
                                        advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify
                                        what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Whatsapp Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],
                [
                    'que' => "How much should I budget for Digital Markeing
                                        advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify
                                        what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Whatsapp Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],

            ]
        ];

        return view('pages.website-design-development-service', compact('data'));

    }

    public function websiteManintanance(){

        $data = [

            'banner_image' => "assets/images/Services/Development/Website Maintanance/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Development/Website Maintanance/img1.png',
                'mobile_banner_img' => "assets/images/Services/Development/Website Maintanance/img1.png",
                'title' => 'Website Maintanance for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Website Maintanance essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Development/Website Maintanance/img2.png',
                'mobile_banner_img' => "assets/images/Services/Development/Website Maintanance/img2.png",
                'title' => 'Website Maintanance for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Website Maintanance essential for your business?</strong>',
                    '<strong>How to create and implement an effective Digital Markeing strategy?</strong>',
                    '<strong>Which platforms are best suited for your industry?</strong>'
                ]
            ],
            'faqs' => [

                [
                    'que' => "How quickly will I see results from Digital Markeing
                                        Community Management?",
                    'ans' => "Results vary based on your industry, audience, and strategy. Generally, you'll
                                        see initial engagement improvements within 1-2 months, with more significant ROI
                                        developing over 3-6 months.",
                ],
                [
                    'que' => "Which Digital Markeing platforms should my business
                                        use?",
                    'ans' => "This depends on your target audience, industry, and content strategy. We'll help
                                        you identify where your customers are most active for effective resource use.",
                ],
                [
                    'que' => "How much should I budget for Digital Markeing
                                        advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify
                                        what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Whatsapp Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],
                [
                    'que' => "How much should I budget for Digital Markeing
                                        advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify
                                        what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Whatsapp Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],

            ]
        ];

        return view('pages.website-design-development-service', compact('data'));

    }
}
