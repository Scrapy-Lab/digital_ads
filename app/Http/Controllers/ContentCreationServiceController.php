<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentCreationServiceController extends Controller
{
    public function contentWriting(){

        $data = [

            'banner_image' => "assets/images/Services/Content Creation/Seo Content Writing/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Content Creation/Seo Content Writing/img1.png',
                'mobile_banner_img' => "assets/images/Services/Content Creation/Seo Content Writing/img1.png",
                'title' => 'SEO Content Writing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  SEO Content Writing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Content Creation/Seo Content Writing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Content Creation/Seo Content Writing/img2.png",
                'title' => 'SEO Content Writing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is SEO Content Writing essential for your business?</strong>',
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

        return view('pages.content-creation-services', compact('data'));

    }


    public function blogWriting(){

        $data = [

            'banner_image' => "assets/images/Services/Content Creation/Blog Writing/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Content Creation/Blog Writing/img1.png',
                'mobile_banner_img' => "assets/images/Services/Content Creation/Blog Writing/img1.png",
                'title' => 'Blog Writing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Blog Writing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Content Creation/Blog Writing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Content Creation/Blog Writing/img2.png",
                'title' => 'Blog Writing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Blog Writing essential for your business?</strong>',
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

        return view('pages.content-creation-services', compact('data'));

    }

    public function promotionalWriting(){

        $data = [

            'banner_image' => "assets/images/Services/Content Creation/Promotional Writing/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Content Creation/Promotional Writing/img1.png',
                'mobile_banner_img' => "assets/images/Services/Content Creation/Promotional Writing/img1.png",
                'title' => 'Promotional Writing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Promotional Writing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Content Creation/Promotional Writing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Content Creation/Promotional Writing/img2.png",
                'title' => 'Promotional Writing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Promotional Writing essential for your business?</strong>',
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

        return view('pages.content-creation-services', compact('data'));

    }

    public function copyWriting(){

        $data = [

            'banner_image' => "assets/images/Services/Content Creation/Copy Writing/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Content Creation/Copy Writing/img1.png',
                'mobile_banner_img' => "assets/images/Services/Content Creation/Copy Writing/img1.png",
                'title' => 'Copy Writing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Copy Writing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Content Creation/Copy Writing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Content Creation/Copy Writing/img2.png",
                'title' => 'Copy Writing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Copy Writing essential for your business?</strong>',
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

        return view('pages.content-creation-services', compact('data'));

    }
}
