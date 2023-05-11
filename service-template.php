<?php
/* Template Name: Service Template*/

// Get current page slug
global $post;
$page_slug = $post->post_name;

// Fetch custom field data
$field_name = 'cf_' . $page_slug; // Construct the field name using the page slug
$raw_data = get_field($field_name); // Fetch the custom field data using the dynamic field name
$data = json_decode($raw_data, true);


// Services data
$services_category = esc_html($data['services_category']);
$service_title = esc_html($data['service_title']);
$service_subtitle = esc_html($data['service_subtitle']);
$service_description_1 = esc_html($data['service_description_1']);
$service_description_2 = esc_html($data['service_description_2']);


// Our Process data
$our_process = $data['our_process'];
$our_process_header = esc_html($our_process['header']);
$our_process_description = esc_html($our_process['description']);
$process_items = $our_process['process_items'];

// Our Services data
$our_services = $data['our_services'];
$our_services_header = esc_html($our_services['header']);
$services = $our_services['services'];



get_header();
?>


<div class="body-nav-container container no-bottom-padding">
    <div class="body-container">
        <div class="service-header">
    <div class="hero-left-img"></div>
  
    <div class="hero-right-header">
        <h4>
            <?php echo $services_category; ?>        
        </h4>
        <div class="header-column"></div>

        <div class="header-service-title">
            <h1>
                <?php echo $service_title; ?>
            </h1>
        </div>
    </div>
</div>

<!-- image from wordpress page -->
<div class="service-hero-img-container">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="service-img">
        <?php the_post_thumbnail(); ?>
    </div>
</div>

        <div class="service-body-container">
            <div class="flex-row-service">
                <h1 class="service-tag">
                    <?php echo $service_subtitle; ?>
                </h1>
                <div class="service-desc-container">
                    <h3 class="service-desc-p1"><?php echo $service_description_1; ?></h3> <br><br>
                    <div class="service-desc-p2"><?php echo $service_description_2; ?></div>
                </div>
            </div>

            <div class="process-container">
                <div class="flex-row-process">
                    <div class="section-header">
                        <h1 class="service-tag">
                            <?php echo $our_process_header; ?>
                        </h1>
                    </div>
                    <div class="process-description">
                        <?php echo $our_process_description; ?>
                    </div>
                </div>

                <div class="process-steps-container">
                    <?php foreach ($process_items as $process_item) : ?>
                        <div class="process-step">
                            <div class="process-num">
                                <?php echo $process_item['number']; ?>
                            </div>
                            <div class="process-body">
                                <div class="process-body-header">
                                    <h3>
                                        <?php echo $process_item['title']; ?>
                                    </h3>
                                </div>
                                <ul class="process-body-steps">
                                    <?php foreach ($process_item['bullets'] as $bullet) : ?>
                                        <li class="process-body-step-item"><?php echo $bullet; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="solutions-container">
                <h1 class="solutions-header">
                    <?php echo $our_services_header; ?>
                </h1>

                <ul class="solutions-list">
                    <?php foreach ($services as $service) : ?>
                        <li class="service-dropdown-item-container">
                            <div class="service-dropdown-header-container">
                                <div class="service-dropdown-header-block"></div>
                                <div class="service-dropdown-header-title"><?php echo $service['title']; ?></div>
                            </div>
                            <div class="service-dropdown-body">
                                                              <?php echo $service['description']; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>  
        </div>
        <div class="margin-bottom-4rem"><?php get_template_part('part-service-cta'); ?></div>
        
    </div>
</div>

<!-- <div class="side-nav-container">
        <div class="services-sidebar-header">Consulting Services</div>
        <div class="nav-section-header">Behavioral Health</div>
        <a class="body-nav-item" href="/services/addiction-treatment">Addiction Treatment</a>
        <a class="body-nav-item" href="/services/mental-health">Mental Health</a>
        <a class="body-nav-item" href="/services/autism-care">Autism Care</a>
        <div class="nav-section-header">Revenue Operations</div>
        <a class="body-nav-item" href="/services/bizdev">Business Development</a>
        <a class="body-nav-item" href="/services/admissions">Admissions and Intake</a>
        <a class="body-nav-item" href="/services/marketing">Digital Marketing</a>
        <div class="nav-section-header">Financial Operations</div>
        <a class="body-nav-item" href="/services/proforma-dd">Proforma and Due Diligence</a>
        <a class="body-nav-item" href="/services/turnaround">Turnaround Management</a>
        <a class="body-nav-item" href="/services/automation">Operational Automation</a>
        <div class="nav-section-header">Clinical Operations</div>
        <a class="body-nav-item" href="/services/time-studies">Time Studies Analysis</a>
        <a class="body-nav-item" href="/services/patient-experience">Patient Experience</a>
        <a class="body-nav-item" href="/services/performance-mgmt">Performance Management</a>
      </div>
</div> -->

<?php get_footer(); ?>


 