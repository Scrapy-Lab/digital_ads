<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileMarketingService extends Controller
{
    public function WhatsappMarketing()
    {

        $data = [

            'banner_image' => "assets/images/Services/Mobile Marketing/Whatsapp Marketing/Banner.png",
            'section_1' => [
                'banner_img' => '/assets/images/Services/Mobile Marketing/Whatsapp Marketing/Img1.png',
                'mobile_banner_img' => "/assets/images/Services/Mobile Marketing/Whatsapp Marketing/Img1.png",
                'title' => 'Whatsapp Marketing for Businesses',
                'subtitle' => ' Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Whatsapp Marketing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Mobile Marketing/Whatsapp Marketing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Mobile Marketing/Whatsapp Marketing/img2.png",
                'title' => 'Whatsapp Marketing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Whatsapp Marketing essential for your business?</strong>',
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

        return view('pages.mobile-marketing', compact('data'));
    }


    public function voiceSms(){

        $data = [

            'banner_image' => "assets/images/Services/Mobile Marketing/Voice Sms/Bannner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Mobile Marketing/Voice Sms/Img1.png',
                'mobile_banner_img' => "assets/images/Services/Mobile Marketing/Voice Sms/Img1.png",
                'title' => 'Voice Sms for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Voice Sms essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Mobile Marketing/Voice Sms/img2.png',
                'mobile_banner_img' => "assets/images/Services/Mobile Marketing/Voice Sms/img2.png",
                'title' => 'Voice Sms for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Voice Sms essential for your business?</strong>',
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

        return view('pages.mobile-marketing', compact('data'));

    }

    public function bulkSms(){

        $data = [

            'banner_image' => "assets/images/Services/Mobile Marketing/Bulk sms/Bannner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Mobile Marketing/Bulk sms/Img1.png',
                'mobile_banner_img' => "assets/images/Services/Mobile Marketing/Bulk sms/Img1.png",
                'title' => 'Bulk sms for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is  Bulk sms essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Mobile Marketing/Bulk sms/img2.png',
                'mobile_banner_img' => "assets/images/Services/Mobile Marketing/Bulk sms/img2.png",
                'title' => 'Bulk sms for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Bulk sms essential for your business?</strong>',
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

        return view('pages.mobile-marketing', compact('data'));

    }
}
