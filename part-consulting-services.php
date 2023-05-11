<section class="consulting-services">
    <div class="section-container">
        <h1>Consulting Services</h1>
        <div class="services-block">
            <?php
            $services = [
                [
                    'title' => 'Management Consulting',
                    'description' => 'Plot Twist Consulting offers comprehensive consulting services to behavioral health organizations specializing in addiction, mental health, autism, and more.',
                    'subservices' => [
                        'Addiction Treatment Consulting',
                        'Mental Wellness Consulting',
                        'Autism Care Consulting',
                    ],
                ],
                [
                    'title' => 'Revenue Optimization',
                    'description' => 'Our strategic development process gives behavioral healthcare organizations a data driven approach to revenue operations, admissions intake, and more.',
                    'subservices' => [
                        ['Market Analysis & Expansion', '/wp/services/market-analysis-and-expansion'],
                        ['Service Line Diversification', '/wp/services/service-line-optimization-and-enhancement'],
                        ['Revenue Cycle Optimization', '/wp/services/revenue-cycle-optimization'],
                        ['Digital Strategy & Engagement', '/wp/services/digital-strategy-and-engagement'],
                    ],
                ],
                [
                    'title' => 'Financial Management',
                    'description' => 'From budgeting and forecasting to capital planning, we help behavioral healthcare organizations maximize their bottom line while offering quality care.',
                    'subservices' => [
                        ['Pro Forma Analysis', '/wp/services/pro-forma-analysis'],
                        ['Due Diligence', '/wp/services/due-diligence'],
                        ['Organizational Transformation', '/wp/services/organizational-transformation'],
                        ['Operational Automation', '/wp/services/operational-automation'],
                    ],
                ],
                [
                    'title' => 'Clinical Operations',
                    'description' => 'We help behavioral healthcare organizations improve clinical operations by providing expertise in patient experience, performance management, and more.',
                    'subservices' => [
                        ['Time & Process Optimization', '/wp/services/time-and-process-optimization'],
                        ['Patient Experience Enhancement', '/wp/services/patient-experience-enhancement'],
                        ['Performance Management', '/wp/services/performance-management'],
                        ['Admissions & Intake', '/wp/services/admissions-and-intake'],
                    ],
                ],
            ];
            ?>

            <?php foreach ($services as $service): ?>
                <div class="main-two-left">
                    <h1 id="services-header">
                        <?php echo str_replace(' ', '<br>', $service['title']); ?>
                    </h1>
                    <span class="timer-bar"></span>
                    <p class="services-body">
                        <?php echo $service['description']; ?>
                    </p>
                    <ul class="subservice-list">
                        <?php foreach ($service['subservices'] as $subservice): ?>
                            <li class="subservice-list-item">
                                <?php if (is_array($subservice)): ?>
                                    <a href="<?php echo esc_url($subservice[1]); ?>">
                                        <?php echo $subservice[0]; ?>
                                    </a>
                                <?php else: ?>
                                    <?php echo $subservice; ?>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="services-bg-img"></div>
                    <div class="services-bg-overlay"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>