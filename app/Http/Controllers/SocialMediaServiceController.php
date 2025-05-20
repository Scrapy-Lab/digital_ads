<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialMediaServiceController extends Controller
{

    // private $data;

    // public function __construct()
    // {

    //  $data = [

    //     'banner_image' => "",
    //     'section_1' => [
    //         'banner_img' => '',
    //         'mobile_banner_img' => ""
    //         'title' => '',
    //         'subtitle' => '',
    //         'bullet_points' => []
    //     ],
    //     'section_2' => [
    //         'banner_img' => '',
    //         'mobile_banner_img' => "",
    //         'title' => '',
    //         'subtitle' => '',
    //         'bullet_points' => [
    //             '',
    //             '',
    //             ''
    //         ]
    //     ],
    //     'faqs' => [

    //         [
    //             'que' => "",
    //             'ans' => "",
    //         ]
    //     ]
    // ];
    // }


    public function socialMediaMarketing()
    {

        // dd($this->data);

        $data =  [
            'banner_image' => "assets/images/Services/Social media/Social media marketing/Banner.png",
            'banner_mobile' => "assets/images/Mobile Responsive/Social media marketing/Banner.png",
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



        return view('pages.social-media-service', compact('data'));
    }
    public function socialMediaOptimization()
    {


        $data =  [

            'banner_image' => "assets/images/Services/Social media/Social media optimization/Banner.png",
            'banner_mobile' => "assets/images/Mobile Responsive/Social media optimization/Banner.png",
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

        return view('pages.social-media-service', compact('data'));
    }

    public function socialMediaCommunityManagement()
    {

        $data = [

            'banner_image' => "assets/images/Services/Social media/Social media Community Management/Banner.png",
            'banner_mobile' => "assets/images/Mobile Responsive/Social media management/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Social media/Social media Community Management/img 1.png',
                "mobile_banner_img" => "assets/images/Mobile Responsive/Social media Management/Img1.png",
                'title' => 'Why Social Media Community Management Matters',
                'subtitle' => ' A thriving online community strengthens brand loyalty, enhances customer relationships, and boosts engagement. Effective community management ensures that your brand stays connected with its audience, fostering trust and long-term relationships.',
                'bullet_points' => [
                    'What is social media community management?',
                    'How does it improve brand reputation and engagement?',
                    'Best practices for managing an online community effectively.'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Social media/Social media Community Management/img2.png',
                'mobile_banner_img' => "assets/images/Mobile Responsive/Social media Management/img2.png",
                'title' => 'What is Social Media Community Management?',
                'subtitle' => 'Social Media Community Management is all about building and nurturing relationships with your audience. By engaging with followers, addressing concerns, and creating meaningful conversations, you can foster a loyal and active community around your brand.',
                'bullet_points' => [
                    '<strong>Real-Time Engagement:</strong> Respond to comments, messages, and mentions promptly.',
                    '<strong>Customer Relationship Building:</strong> Foster genuine interactions and create a sense of belonging.',
                    '<strong>Which platforms are best suited for your industry?Content Moderation:</strong> Ensure discussions stay positive and relevant to your brand.'
                ]
            ],
            'faqs' => [

                [
                    'que' => "How quickly will I see results from social media Community Management?",
                    'ans' => "Results vary based on your industry, audience, and strategy. Generally, you'll see initial engagement improvements within 1-2 months, with more significant ROI developing over 3-6 months.",
                ],
                [
                    'que' => "Which social media platforms should my business use?",
                    'ans' => "This depends on your target audience, industry, and content strategy. We'll help you identify where your customers are most active for effective resource use."
                ],
                [
                    'que' => "How much should I budget for social media advertising?",
                    "ans" => "Start with a modest test budget ($500–$1000/month) and scale up once you identify what works best for your audience and goals."
                ],
                [
                    'que' => "How do you measure social media Community Management success?",
                    "ans" => "We track engagement, growth, leads, traffic, conversions, and ROI — giving full insight into what's working."
                ],
                [
                    'que' => "How much should I budget for social media advertising?",
                    "ans" => "Start with a modest test budget ($500–$1000/month) and scale up once you identify what works best for your audience and goals."
                ],
                [
                    'que' => "How do you measure social media Community Management success?",
                    "ans" => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you full insight into what's working."
                ],
            ]
        ];

        return view('pages.social-media-service', compact('data'));
    }

    public function influencerMarketing()
    {


        $data = [

            'banner_image' => "assets/images/Services/Social media/Influencer Marketing/Banner.png",
            'banner_mobile' => "assets/images/Mobile Responsive/INfluencer Marketing/Banner.png",
            'section_1' => [
                'banner_img' => 'assets/images/Services/Social media/Influencer Marketing/Img1.png',
                'mobile_banner_img' => "assets/images/Mobile Responsive/INfluencer Marketing/img1.png",
                'title' => 'Leverage Influencers to Expand Your Reach',
                'subtitle' => 'Influencer marketing is a powerful way to connect with your target audience authentically. By collaborating with the right influencers, brands can enhance credibility, boost engagement, and drive conversions.',
                'bullet_points' => [
                    'What is influencer marketing and how does it work?',
                    'How can influencers help promote your brand effectively?',
                    'Best strategies for running successful influencer campaigns.'
                ]
            ],
            'section_2' => [
                'banner_img' => 'assets/images/Services/Social media/Influencer marketing/img2.png',
                'mobile_banner_img' => "assets/images/Mobile Responsive/INfluencer Marketing/Img2.png",
                'title' => 'What is Influencer Marketing?',
                'subtitle' => 'Influencer marketing involves partnering with content creators who have a dedicated following to promote your brand. This strategy helps increase brand awareness, build trust, and generate high-quality leads through authentic recommendations.',
                'bullet_points' => [
                    '<strong>Brand Awareness:</strong> Reach a larger audience through trusted voices in your industry.',
                    '<strong>Authentic Engagement:</strong> Build credibility through organic and relatable content.',
                    '<strong>Targeted Marketing:</strong> Connect with niche audiences that align with your brand.',
                    '<strong>Higher Conversions:</strong> Leverage influencer trust to boost sales and engagement.'
                ]
            ],
            'faqs' => [

                [
                    'que' => "How quickly will I see results from social media Community Management?",
                    'ans' => "Results vary based on your industry, audience, and strategy. Generally, you'll see initial engagement improvements within 1-2 months, with more significant ROI developing over 3-6 months.",
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
                    'que' => "How do you measure Influencer Marketing success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you full insight into what's working.",
                ],
                [
                    'que' => "How much should I budget for social media advertising?",
                    'ans' => "Start with a modest test budget ($500–$1000/month) and scale up once you identify what works best for your audience and goals.",
                ],
                [
                    'que' => "How do you measure Influencer Marketing success?",
                    'ans' => "We track engagement, growth, leads, traffic, conversions, and ROI — giving you full insight into what's working.",
                ],
            ]
        ];

        return view('pages.social-media-service', compact('data'));
    }


}
