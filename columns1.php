<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The one column layout.
 *
 * @package   theme_academi
 * @copyright 2015 LMSACE Dev Team,lmsace.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_academi_get_html_for_settings($OUTPUT, $PAGE);

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php /*?><header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header><?php */?>



<?php  require_once(dirname(__FILE__) . '/includes/header.php');  ?>

<div id="page" >

    <header id="page-header" class="clearfix">
        <div class="container-fluid">
            <?php echo $html->heading; ?>
            <div id="page-navbar" class="clearfix">
                <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
                <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
            </div>
            <div id="course-header">
                <?php echo $OUTPUT->course_header(); ?>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div id="page-content" class="row-fluid">
            <section id="region-main" class="span12">
                <?php
                echo $OUTPUT->course_content_header();
                echo $OUTPUT->main_content();
                echo $OUTPUT->course_content_footer();
                ?>
            </section>
        </div>
    </div>

    <?php /*?><footer id="page-footer">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $html->footnote;
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?><?php */?>
</div>

<?php  require_once(dirname(__FILE__) . '/includes/footer.php');  ?>

<div style="display:none;">
<p><a title="Slot Pulsa" href="http://cc87912-drupal-7.tw1.ru/public/journals/slot-pulsa/" rel="dofollow">http://cc87912-drupal-7.tw1.ru/public/journals/slot-pulsa/</a></p>
<p><a title="Slot Online" href="http://revistaeolo.fconvida.org/templates/images/slot-online/" rel="dofollow">http://revistaeolo.fconvida.org/templates/images/slot-online/</a></p>
<p><a title="Slot Gacor 2022" href="http://revista.ispsn.org/ojs/slot-gacor/" rel="dofollow">http://revista.ispsn.org/ojs/slot-gacor/</a></p>
<p><a title="Slot Deposit Pulsa" href="https://prosecutioncmms.kp.gov.pk/slot-pulsa/" rel="dofollow">https://prosecutioncmms.kp.gov.pk/slot-pulsa/</a></p>
<p><a title="Slot Online Terpercaya" href="http://interactome.dfci.harvard.edu/fragdb/cgi-bin/judi-slot-online/" rel="dofollow">http://interactome.dfci.harvard.edu/fragdb/cgi-bin/judi-slot-online/</a></p>
<p><a title="Rtp Slot" href="https://lolly.comc.co.il/" rel="dofollow">https://lolly.comc.co.il/</a></p>
<p><a title="Slot Demo" href="https://wp01.fpe.zcu.cz/wp-includes/slot-demo/" rel="dofollow">https://wp01.fpe.zcu.cz/wp-includes/slot-demo/</a></p>
<p><a title="Slot Gacor Hari Ini" href="https://ciae.icar.gov.in/vendor/-/slot-gacor/" rel="dofollow">https://ciae.icar.gov.in/vendor/-/slot-gacor/</a></p>
<p><a title="situs slot gacor" href="https://trang.lib.ru.ac.th/slot-gacor/" rel="dofollow">https://trang.lib.ru.ac.th/slot-gacor/</a></p>
<p><a title="jam rtp slot" href="https://careers.mahidol.ac.th/rtp-slot/" rel="dofollow">https://careers.mahidol.ac.th/rtp-slot/</a></p>
<p><a title="Slot Pulsa Tanpa Potongan" href="https://www.jaotipe.hku.hk/slot/" rel="dofollow">https://www.jaotipe.hku.hk/slot/</a></p>
<p><a title="Link Slot Gacor" href="https://novosite.fsh.edu.br/wp-includes/assets/slot-gacor/" rel="dofollow">https://novosite.fsh.edu.br/wp-includes/assets/slot-gacor/</a></p>
<p><a title="bocoran slot gacor hari ini" href="https://nip.qau.edu.pk/wp/.tmb/slot-gacor/" rel="dofollow">https://nip.qau.edu.pk/wp/.tmb/slot-gacor/</a></p>
<p><a title="slot via pulsa" href="http://adversus.org/revista/files/journals/slot-pulsa/" rel="dofollow">http://adversus.org/revista/files/journals/slot-pulsa/</a></p>
<p><a title="slot gacor 4d" href="https://career.perumnas.co.id/assets/4d/" rel="dofollow">https://career.perumnas.co.id/assets/4d/</a></p>
<p><a title="slot dana" href="https://rumah.perumnas.co.id/template/slot-dana/" rel="dofollow">https://rumah.perumnas.co.id/template/slot-dana/</a></p>
<p><a title="slot gacor" href="https://perumnas.co.id/ninja-slot-88-gacor-4d/" rel="dofollow">https://perumnas.co.id/ninja-slot-88-gacor-4d/</a></p>
<p><a title="Slot Gacor Gampang Menang" href="https://www.shhorms.hku.hk/wp-includes/link-gacor/" rel="dofollow">https://www.shhorms.hku.hk/wp-includes/link-gacor/</a></p>
<p><a title="Bocoran Slot Gacor" href="https://today.albion.edu/wp-content/uploads/2022/12/" rel="dofollow">https://today.albion.edu/wp-content/uploads/2022/12/</a></p>
<p><a title="daftar slot pulsa" href="https://upincubator.upi.edu/wp-content/uploads/slot-deposit-pulsa-tanpa-potongan/" rel="dofollow">https://upincubator.upi.edu/wp-content/uploads/slot-deposit-pulsa-tanpa-potongan/</a></p>
<p><a title="daftar slot gacor" href="https://survey.ticmi.co.id/upload/plugins/slot-pulsa/" rel="dofollow">https://survey.ticmi.co.id/upload/plugins/slot-pulsa/</a></p>
<p><a title="cek rtp slot pragmatic live" href="https://thai.hku.hk/news/rtp-slot/" rel="dofollow">https://thai.hku.hk/news/rtp-slot/</a></p>
<p><a title="cek rtp slot pragmatic live" href="https://scape.edu.hku.hk/wp-content/ngg/gacor/" rel="dofollow">https://scape.edu.hku.hk/wp-content/ngg/gacor/</a></p>
<p><a title="rtp slot" href="http://dezvoltare.uvt.ro/sport/wp-includes/rtp/" rel="dofollow">http://dezvoltare.uvt.ro/sport/wp-includes/rtp/</a></p>

</div>
</body>
</html>
