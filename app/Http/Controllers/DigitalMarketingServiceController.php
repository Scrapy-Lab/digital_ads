<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalMarketingServiceController extends Controller
{
    public function digitalMarketingStrategy()
    {


        $data = [

            'banner_image' => "assets/images/Services/Digital Marketing/Digital Marketing Strategy/Banner.png",
            'banner_mobile' => "assets/images/Mobile Responsive/mobile-banner/Digital marketing strategy.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Digital Marketing/Digital Marketing Strategy/Img1.png',
                'mobile_banner_img' => "assets/images/Services/Digital marketing/Digital marketing strategy/Img1.png",
                'title' => 'Digital Marketing Strategy for Businesses',
                'subtitle' => ' Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                competition.',
                'bullet_points' => [
                    'Why is Digital Marketing Strategy essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Digital Marketing/Digital Marketing Strategy/img2.png',
                'mobile_banner_img' => "assets/images/Services/Digital marketing/Digital marketing strategy/img2.png",
                'title' => 'Digital Marketing Strategy for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                competition.',
                'bullet_points' => [
                    '<strong>Why is Digital Marketing Strategy essential for your business?</strong>',
                    '<strong>How to create and implement an effective Digital Markeing strategy?</strong>',
                    '<strong>Which platforms are best suited for your industry?</strong>'
                ]
            ],
            'faqs' => [

                [
                    'que' => "How quickly will I see results from Digital Markeing Community Management?",
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
                    'que' => "How do you measure Digital Marketing Strategy
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
                    'que' => "How do you measure Digital Marketing Strategy
                                    success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                    full insight into what's working.",
                ],
            ]
        ];

        return view('pages.digital-marketing-service', compact('data'));
    }

    public function searchEngineMarketing()
    {


        $data = [

            'banner_image' => "assets/images/Services/Digital Marketing/Search engine marketing/Banner.png",
            'banner_mobile' => "assets/images/Mobile Responsive/mobile-banner/Search engine marketing.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Digital Marketing/Social Media MArketing/img1.png',
                'mobile_banner_img' => "assets/images/Services/Digital marketing/Social Media Marketing/Img1.png",
                'title' => 'Social Media Marketing for Businesses',
                'subtitle' => ' Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is Social Media Marketing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Digital Marketing/Social Media Marketing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Digital marketing/Social Media Marketing/img2.png",
                'title' => 'Social Media Marketing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Social Media Marketing essential for your business?</strong>',
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
                    'que' => "How do you measure Social Media Marketing
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
                    'que' => "How do you measure Social Media Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],

            ]
        ];

        return view('pages.digital-marketing-service', compact('data'));
    }

    public function digitalSocialMediaMarketing()
    {

        $data = [

            'banner_image' => "assets/images/Services/Digital Marketing/Social Media MArketing/Banner.png",
           'banner_mobile' => "assets/images/Mobile Responsive/mobile-banner/Social-media-marketing-1.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Digital Marketing/Social Media MArketing/img1.png',
                'mobile_banner_img' => "assets/images/Services/Digital Marketing/Social Media MArketing/Img1.png",
                'title' => 'Social Media MArketing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is Social Media MArketing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Digital Marketing/Social Media MArketing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Digital Marketing/Social Media MArketing/img2.png",
                'title' => 'Social Media MArketing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Social Media MArketing essential for your business?</strong>',
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
                    'que' => "How do you measure Social Media Marketing
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
                    'que' => "How do you measure Social Media Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],

            ]
        ];

        return view('pages.digital-marketing-service', compact('data'));
    }

    public function onlineReputationManagement()
    {

        $data = [

            'banner_image' => "assets/images/Services/Digital Marketing/Online Reputation Management/Banner.png",
            'banner_mobile' => "assets/images/Mobile Responsive/mobile-banner/Online reputation management.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Digital Marketing/Social Media MArketing/Img1.png',
                'mobile_banner_img' => "assets/images/Services/Digital Marketing/Social Media MArketing/Img1.png",
                'title' => 'Social Media MArketing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    'Why is Social Media MArketing essential for your business?',
                    'How to create and implement an effective Digital Markeing strategy?',
                    'Which platforms are best suited for your industry?'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Digital Marketing/Social Media MArketing/img2.png',
                'mobile_banner_img' => "assets/images/Services/Digital Marketing/Social Media MArketing/img2.png",
                'title' => 'Social Media MArketing for Businesses',
                'subtitle' => 'Your customers are on Digital Markeing—are you? Platforms like Facebook, Instagram, LinkedIn, and
                    Twitter provide endless opportunities to grow your brand, engage with your audience, and drive
                    sales. A well-crafted Digital Markeing strategy ensures that your business stays ahead of the
                    competition.',
                'bullet_points' => [
                    '<strong>Why is Social Media MArketing essential for your business?</strong>',
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
                    'que' => "How do you measure Social Media Marketing
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
                    'que' => "How do you measure Social Media Marketing
                                        success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you
                                        full insight into what's working.",
                ],

            ]
        ];

        return view('pages.digital-marketing-service', compact('data'));
    }
}
