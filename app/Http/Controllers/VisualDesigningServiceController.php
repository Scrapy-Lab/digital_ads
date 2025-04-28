<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualDesigningServiceController extends Controller
{
    public function graphicDesigning(){

        $data = [

            'banner_image' => "assets/images/Services/Visual Designing/Graphic designing/banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Visual Designing/Graphic designing/img1.png',
                'mobile_banner_img' => "assets/images/Services/Visual Designing/Graphic designing/img1.png",
                'title' => 'Graphic designing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Graphic designing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Visual Designing/Graphic designing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Visual Designing/Graphic designing/img2.png",
                'title' => 'Graphic designing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Graphic designing essential for your business?</strong>',
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

        return view('pages.visual-designing-services', compact('data'));

    }


    public function logoDesigning(){

        $data = [

            'banner_image' => "assets/images/Services/Visual Designing/Logo Designing/banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Visual Designing/Logo Designing/img1.png',
                'mobile_banner_img' => "assets/images/Services/Visual Designing/Logo Designing/img1.png",
                'title' => 'Logo Designing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Logo Designing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Visual Designing/Logo Designing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Visual Designing/Logo Designing/img2.png",
                'title' => 'Logo Designing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Logo Designing essential for your business?</strong>',
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

        return view('pages.visual-designing-services', compact('data'));

    }

    public function photography(){

        $data = [

            'banner_image' => "assets/images/Services/Visual Designing/Photography/banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Visual Designing/Photography/img1.png',
                'mobile_banner_img' => "assets/images/Services/Visual Designing/Photography/img1.png",
                'title' => 'Photography for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Photography essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Visual Designing/Photography/img2.png',
                'mobile_banner_img' => "assets/images/Services/Visual Designing/Photography/img2.png",
                'title' => 'Photography for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Photography essential for your business?</strong>',
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

        return view('pages.visual-designing-services', compact('data'));

    }

    public function videography(){

        $data = [

            'banner_image' => "assets/images/Services/Visual Designing/Videography/banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Visual Designing/Videography/img1.png',
                'mobile_banner_img' => "assets/images/Services/Visual Designing/Videography/img1.png",
                'title' => 'Videography for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Videography essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Visual Designing/Videography/img2.png',
                'mobile_banner_img' => "assets/images/Services/Visual Designing/Videography/img2.png",
                'title' => 'Videography for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Videography essential for your business?</strong>',
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

        return view('pages.visual-designing-services', compact('data'));

    }
}
