<?php

/**
 * ACF: Flexible Content > Layouts > FAQ Block
 *
 * @package WordPress
 */

$background_color = $section['background_color'];
$section_title    = $section['section_title'];
$faq_items        = $section['faq_items'];
?>

<?php if ($faq_items && is_array($faq_items) && count($faq_items) > 0): ?>
    <section class="faq-block" style="background-color: <?php echo esc_attr($background_color); ?>;">
        <div class="container">

            <?php if ($section_title): ?>
                <div class="faq-block__header">
                    <h2 animate="fade-in"><?php echo esc_html($section_title); ?></h2>
                </div>
            <?php endif; ?>

            <div class="faq-block__list">
                <?php foreach ($faq_items as $index => $item): ?>
                    <div class="faq-block__item">
                        <button
                            class="faq-block__question"
                            aria-expanded="false"
                            aria-controls="faq-answer-<?php echo $index; ?>"
                        >
                            <span><?php echo esc_html($item['question']); ?></span>
                            <svg class="faq-block__chevron" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m6 9 6 6 6-6"/>
                            </svg>
                        </button>
                        <div
                            class="faq-block__answer"
                            id="faq-answer-<?php echo $index; ?>"
                            aria-hidden="true"
                        >
                            <div class="faq-block__answer-inner rte">
                                <?php echo wp_kses_post($item['answer']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
<?php endif; ?>
