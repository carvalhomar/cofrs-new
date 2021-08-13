<?php

namespace App\Helpers;


/**
 *
 */
class Helper {

    /**
     * @return string
     */
    public static function getURL() {
        // return 'This works';

        $req_uri = $_SERVER['REQUEST_URI'];
        $path = substr($req_uri,0,strrpos($req_uri,'horizontal-light-menu'));

        return $path . "horizontal-light-menu";
    }

    /**
     * @param $page_name
     */
    public static function setTitle($page_name) {

        // echo $page_name;

        $admin_name = '| CORK - Multipurpose Bootstrap Dashboard Template';

        if ($page_name === 'analytics') :
            echo 'CORK Admin - Multipurpose Bootstrap Dashboard Template';
        elseif ($page_name === 'sales') :
            echo 'Sales Admin ' . $admin_name;

        // Apps
        elseif ($page_name === 'calendar') :
            echo 'Fullcalendar Drag and Drop Event ' . $admin_name;
        elseif ($page_name === 'chat') :
            echo 'Chat Application ' . $admin_name;
        elseif ($page_name === 'contacts') :
            echo 'Contact Profile ' . $admin_name;
        elseif ($page_name === 'invoice') :
            echo 'Invoice ' . $admin_name;
        elseif ($page_name === 'mailbox') :
            echo 'Mailbox ' . $admin_name;
        elseif ($page_name === 'notes') :
            echo 'Notes ' . $admin_name;
        elseif ($page_name === 'scrumboard') :
            echo 'Scrum Task Board ' . $admin_name;
        elseif ($page_name === 'todo-list') :
            echo 'Todo List ' . $admin_name;

        // Authendication
        elseif ($page_name === 'auth_boxed') :
            echo '';
        elseif ($page_name === 'auth_default') :
            echo '';

        // Charts
        elseif ($page_name === 'charts') :
            echo 'Apex Chart '. $admin_name;

        // Components
        elseif ($page_name === 'accordions') :
            echo 'Accordions ' . $admin_name;
        elseif ($page_name === 'blockui') :
            echo 'Block UI ' . $admin_name;
        elseif ($page_name === 'bootstrap_carousel') :
            echo 'Bootstrap Carousel ' . $admin_name;
        elseif ($page_name === 'cards') :
            echo 'Card ' . $admin_name;
        elseif ($page_name === 'countdown') :
            echo 'Countdown ' . $admin_name;
        elseif ($page_name === 'counter') :
            echo 'Counter ' . $admin_name;
        elseif ($page_name === 'lightbox') :
            echo 'Lightbox ' . $admin_name;
        elseif ($page_name === 'list_group') :
            echo 'List Group ' . $admin_name;
        elseif ($page_name === 'media_object') :
            echo 'Media Object ' . $admin_name;
        elseif ($page_name === 'modals') :
            echo 'Modals ' . $admin_name;
        elseif ($page_name === 'pricing_table') :
            echo 'Pricing Tables ' . $admin_name;
        elseif ($page_name === 'session_timeout') :
            echo 'Session Timeout ' . $admin_name;
        elseif ($page_name === 'notifications') :
            echo 'Notifications ' . $admin_name;
        elseif ($page_name === 'sweet_alerts') :
            echo 'SweetAlert ' . $admin_name;
        elseif ($page_name === 'tabs') :
            echo 'Tabs ' . $admin_name;
        elseif ($page_name === 'timeline') :
            echo 'Timeline ' . $admin_name;

        // Drag And Drop
        elseif ($page_name === 'drag_n_drop') :
            echo 'Dragula Drag and Drop ' . $admin_name;

        // Elements
        elseif ($page_name === 'alerts') :
            echo 'Alerts ' . $admin_name;
        elseif ($page_name === 'avatars') :
            echo 'Avatar ' . $admin_name;
        elseif ($page_name === 'badges') :
            echo 'Badge ' . $admin_name;
        elseif ($page_name === 'breadcrumbs') :
            echo 'Breadcrumb ' . $admin_name;
        elseif ($page_name === 'button_group') :
            echo 'Button Group ' . $admin_name;
        elseif ($page_name === 'buttons') :
            echo 'Bootstrap Buttons ' . $admin_name;
        elseif ($page_name === 'color_library') :
            echo 'Color Library ' . $admin_name;
        elseif ($page_name === 'dropdown') :
            echo 'Dropdown ' . $admin_name;
        elseif ($page_name === 'infobox') :
            echo 'Infobox ' . $admin_name;
        elseif ($page_name === 'jumbotron') :
            echo 'Jumbotron ' . $admin_name;
        elseif ($page_name === 'loaders') :
            echo 'Loaders ' . $admin_name;
        elseif ($page_name === 'pagination') :
            echo 'Pagination ' . $admin_name;
        elseif ($page_name === 'popovers') :
            echo 'Popovers ' . $admin_name;
        elseif ($page_name === 'progress_bar') :
            echo 'Bootstrap Progress Bar ' . $admin_name;
        elseif ($page_name === 'search') :
            echo 'Search ' . $admin_name;
        elseif ($page_name === 'tooltips') :
            echo 'Tooltips ' . $admin_name;
        elseif ($page_name === 'treeview') :
            echo 'Tree View ' . $admin_name;
        elseif ($page_name === 'typography') :
            echo 'Typography ' . $admin_name;
        elseif ($page_name === 'font_icons') :
            echo 'Font Icon ' . $admin_name;

        // Forms
        elseif ($page_name === 'form_bootstrap_basic') :
            echo 'Bootstrap Forms ' . $admin_name;
        elseif ($page_name === 'bootstrap_select') :
            echo 'Bootstrap Select ' . $admin_name;
        elseif ($page_name === 'touchspin') :
            echo 'Bootstrap Touchspin ' . $admin_name;
        elseif ($page_name === 'checkbox_radio') :
            echo 'Checkbox and Radio ' . $admin_name;
        elseif ($page_name === 'clipboard') :
            echo 'Clipboard ' . $admin_name;
        elseif ($page_name === 'date_range_picker') :
            echo 'Date and Time picker ' . $admin_name;
        elseif ($page_name === 'file_upload') :
            echo 'File Upload ' . $admin_name;
        elseif ($page_name === 'input_group') :
            echo 'Input Group ' . $admin_name;
        elseif ($page_name === 'input_mask') :
            echo 'Input Mask ' . $admin_name;
        elseif ($page_name === 'layouts') :
            echo 'Form Layouts ' . $admin_name;
        elseif ($page_name === 'markdown') :
            echo 'Markdown Editor ' . $admin_name;
        elseif ($page_name === 'maxlength') :
            echo 'Bootstrap Maxlength ' . $admin_name;
        elseif ($page_name === 'quill') :
            echo 'Quill Editor ' . $admin_name;
        elseif ($page_name === 'select2') :
            echo 'Select2 ' . $admin_name;
        elseif ($page_name === 'switches') :
            echo 'Switches ' . $admin_name;
        elseif ($page_name === 'typeahead') :
            echo 'Typeahead ' . $admin_name;
        elseif ($page_name === 'validation') :
            echo 'Bootstrap Form Validation ' . $admin_name;
        elseif ($page_name === 'wizards') :
            echo 'Wizards ' . $admin_name;

        // Maps
        elseif ($page_name === 'maps') :
            echo 'jVector Maps ' . $admin_name;

        // Pages
        elseif ($page_name === 'comming_soon') :
            echo 'Coming Soon ' . $admin_name;
        elseif ($page_name === 'contact_us') :
            echo 'Contact Form ' . $admin_name;
        elseif ($page_name === 'error404') :
            echo 'Error 404 ' . $admin_name;
        elseif ($page_name === 'error500') :
            echo 'Error 500 ' . $admin_name;
        elseif ($page_name === 'error503') :
            echo 'Error 503 ' . $admin_name;
        elseif ($page_name === 'faq') :
            echo 'FAQ Landing Page ' . $admin_name;
        elseif ($page_name === 'faq2') :
            echo 'FAQs ' . $admin_name;
        elseif ($page_name === 'helpdesk') :
            echo 'Helpdesk ' . $admin_name;
        elseif ($page_name === 'maintenence') :
            echo 'Maintenence HTML Template ' . $admin_name;
        elseif ($page_name === 'privacy') :
            echo 'Privacy Policy ' . $admin_name;
        elseif ($page_name === 'alt_menu') :
            echo 'Alternate Menu ' . $admin_name;

        // Starter Kit
        elseif ($page_name === 'blank_page') :
            echo 'Blank Page ' . $admin_name;
        elseif ($page_name === 'boxed') :
            echo 'Boxed ' . $admin_name;
        elseif ($page_name === 'breadcrumb') :
            echo 'Breadcrumbs ' . $admin_name;

        // Tables
        elseif ($page_name === 'bootstrap_basic_table') :
            echo 'Bootstrap Tables ' . $admin_name;
        elseif ($page_name === 'alternative_pagination') :
            echo 'DataTables Alternative pagination ' . $admin_name;
        elseif ($page_name === 'basic-light') :
            echo 'DataTables Basic Light ' . $admin_name;
        elseif ($page_name === 'basic') :
            echo 'DataTables Basic ' . $admin_name;
        elseif ($page_name === 'custom') :
            echo 'Custom DataTables ' . $admin_name;
        elseif ($page_name === 'html5') :
            echo 'DataTables HTML5 Export ' . $admin_name;
        elseif ($page_name === 'live_dom_ordering') :
            echo 'DataTables Live Dom Ordering ' . $admin_name;
        elseif ($page_name === 'miscellaneous') :
            echo 'Miscellaneous DataTables ' . $admin_name;
        elseif ($page_name === 'multi-column_ordering') :
            echo 'DataTables Multi-column Ordering ' . $admin_name;
        elseif ($page_name === 'multiple_tables') :
            echo 'Multiple DataTables ' . $admin_name;
        elseif ($page_name === 'ordering_sorting') :
            echo 'DataTables Default Order Sorting ' . $admin_name;
        elseif ($page_name === 'range_search') :
            echo 'DataTables Range Search ' . $admin_name;

        // User
        elseif ($page_name === 'account_settings') :
            echo 'Account Settings ' . $admin_name;
        elseif ($page_name === 'profile') :
            echo 'User Profile ' . $admin_name;

        // Widgets
        elseif ($page_name === 'widgets') :
            echo 'Widgets ' . $admin_name;
        endif;
    }

    /**
     * @param $page_name
     * @param $category_name
     */
    public static function set_breadcrumb($page_name, $category_name) {

        $category = ucfirst($category_name);

        $removeUnderscore = str_replace('_', ' ', $page_name);

        $removeDash = str_replace('-', ' ', $removeUnderscore);

        $page = ucwords($removeDash);

        if ($page_name === 'analytics') :
            // echo 'CORK Admin - Multipurpose Bootstrap Dashboard Template';
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'sales') :
            // echo 'Sales Admin ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Apps
        elseif ($page_name === 'calendar') :
            // echo 'Fullcalendar Drag and Drop Event ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'chat') :
            // echo 'Chat Application ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'contacts') :
            // echo 'Contact Profile ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'invoice') :
            // echo 'Invoice ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'mailbox') :
            // echo 'Mailbox ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'notes') :
            // echo 'Notes ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'scrumboard') :
            // echo 'Scrum Task Board ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'todo-list') :
            // echo 'Todo List ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Charts
        elseif ($page_name === 'charts') :
            // echo 'Apex Chart '. $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Apex</span></li>';

        // Components
        elseif ($page_name === 'accordions') :
            // echo 'Accordions ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'blockui') :
            // echo 'Block UI ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'bootstrap_carousel') :
            // echo 'Bootstrap Carousel ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'cards') :
            // echo 'Card ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'countdown') :
            // echo 'Countdown ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'counter') :
            // echo 'Counter ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'lightbox') :
            // echo 'Lightbox ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'list_group') :
            // echo 'List Group ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'media_object') :
            // echo 'Media Object ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'modals') :
            // echo 'Modals ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'pricing_table') :
            // echo 'Pricing Tables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'session_timeout') :
            // echo 'Session Timeout ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'notifications') :
            // echo 'Notifications ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'sweet_alerts') :
            // echo 'SweetAlert ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'tabs') :
            // echo 'Tabs ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'timeline') :
            // echo 'Timeline ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Drag And Drop
        elseif ($page_name === 'drag_n_drop') :
            // echo 'Dragula Drag and Drop ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Drag and Drop</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Dragula</span></li>';

        // Elements
        elseif ($page_name === 'alerts') :
            // echo 'Alerts ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'avatars') :
            // echo 'Avatar ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'badges') :
            // echo 'Badge ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'breadcrumbs') :
            // echo 'Breadcrumb ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'button_group') :
            // echo 'Button Group ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'buttons') :
            // echo 'Bootstrap Buttons ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'color_library') :
            // echo 'Color Library ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'dropdown') :
            // echo 'Dropdown ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'infobox') :
            // echo 'Infobox ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'jumbotron') :
            // echo 'Jumbotron ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'loaders') :
            // echo 'Loaders ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'pagination') :
            // echo 'Pagination ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'popovers') :
            // echo 'Popovers ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'progress_bar') :
            // echo 'Bootstrap Progress Bar ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'search') :
            // echo 'Search ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'tooltips') :
            // echo 'Tooltips ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'treeview') :
            // echo 'Tree View ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'typography') :
            // echo 'Typography ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'font_icons') :
            // echo 'Font Icon ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $page .'</a></li>';

        // Forms
        elseif ($page_name === 'form_bootstrap_basic') :
            // echo 'Bootstrap Forms ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'bootstrap_select') :
            // echo 'Bootstrap Select ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'touchspin') :
            // echo 'Bootstrap Touchspin ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'checkbox_radio') :
            // echo 'Checkbox and Radio ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Checkbox and Radio</span></li>';
        elseif ($page_name === 'clipboard') :
            // echo 'Clipboard ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'date_range_picker') :
            // echo 'Date and Time picker ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Date and Range Picker</span></li>';
        elseif ($page_name === 'file_upload') :
            // echo 'File Upload ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'input_group') :
            // echo 'Input Group ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'input_mask') :
            // echo 'Input Mask ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'layouts') :
            // echo 'Form Layouts ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'markdown') :
            // echo 'Markdown Editor ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .' Editor</span></li>';
        elseif ($page_name === 'maxlength') :
            // echo 'Bootstrap Maxlength ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'quill') :
            // echo 'Quill Editor ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .' Editor</span></li>';
        elseif ($page_name === 'select2') :
            // echo 'Select2 ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'switches') :
            // echo 'Switches ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'typeahead') :
            // echo 'Typeahead ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'validation') :
            // echo 'Bootstrap Form Validation ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'wizards') :
            // echo 'Wizards ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Maps
        elseif ($page_name === 'maps') :
            // echo 'jVector Maps ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>jVector</span></li>';

        // Pages
        elseif ($page_name === 'comming_soon') :
            // echo 'Coming Soon ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'contact_us') :
            // echo 'Contact Form ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'error404') :
            // echo 'Error 404 ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'error500') :
            // echo 'Error 500 ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'error503') :
            // echo 'Error 503 ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'faq') :
            // echo 'FAQ Landing Page ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'faq2') :
            // echo 'FAQs ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>FAQs</span></li>';
        elseif ($page_name === 'helpdesk') :
            // echo 'Helpdesk ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'maintenence') :
            // echo 'Maintenence HTML Template ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'privacy') :
            // echo 'Privacy Policy ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'alt_menu') :
            // echo 'Alternate Menu ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Starter Kit</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Alternate Menu</span></li>';

        // Starter Kit
        elseif ($page_name === 'blank_page') :
            // echo 'Blank Page ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Blank Page</a></li>';
        elseif ($page_name === 'boxed') :
            // echo 'Boxed ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Starter Kit</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'breadcrumb') :
            // echo 'Breadcrumbs ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Starter Kit</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Tables
        elseif ($page_name === 'bootstrap_basic_table') :
            // echo 'Bootstrap Tables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Basic</span></li>';
        elseif ($page_name === 'alternative_pagination') :
            // echo 'DataTables Alternative pagination ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'basic-light') :
            // echo 'DataTables Basic Light ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Light</span></li>';
        elseif ($page_name === 'basic') :
            // echo 'DataTables Basic ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'custom') :
            // echo 'Custom DataTables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'html5') :
            // echo 'DataTables HTML5 Export ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>HTML5 Export</span></li>';
        elseif ($page_name === 'live_dom_ordering') :
            // echo 'DataTables Live Dom Ordering ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Live Dom Ordering</span></li>';
        elseif ($page_name === 'miscellaneous') :
            // echo 'Miscellaneous DataTables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'multi-column_ordering') :
            // echo 'DataTables Multi-column Ordering ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Multi-column</span></li>';
        elseif ($page_name === 'multiple_tables') :
            // echo 'Multiple DataTables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Multiple</span></li>';
        elseif ($page_name === 'ordering_sorting') :
            // echo 'DataTables Default Order Sorting ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Order Sorting</span></li>';
        elseif ($page_name === 'range_search') :
            // echo 'DataTables Range Search ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // User
        elseif ($page_name === 'account_settings') :
            // echo 'Account Settings ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'profile') :
            // echo 'User Profile ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Widgets
        elseif ($page_name === 'widgets') :
            // echo 'Widgets ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $page .'</a></li>';
        endif;


    }

    /**
     * @param $page_name
     */
    public static function setAppDropdownText($page_name) {

        // Apps
        if ($page_name === 'calendar') :
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><span>Calendar</span>';
        elseif ($page_name === 'chat') :
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><span>Chat</span>';
        elseif ($page_name === 'contacts') :
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg><span>Contacts</span>';
        elseif ($page_name === 'invoice') :
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg><span>Invoice List</span>';
        elseif ($page_name === 'mailbox') :
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span>Mailbox</span>';
        elseif ($page_name === 'notes') :
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span>Notes</span>';
        elseif ($page_name === 'scrumboard') :
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg><span>Scrumboard</span>';
        elseif ($page_name === 'todo-list') :
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg><span>Todo List </span>';
        else :
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crosshair"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg><span>Apps</span>';
        endif;
    }

    /**
     * @param $offset
     */
    public static function scrollspy($offset) {
        echo 'data-target="#navSection" data-spy="scroll" data-offset="'. $offset . '"';
    }

    //Manipulate due date portion

    /**
     * @param $competence
     * @param int $number
     * @return string
     */
    public static function incrementCompentence($competence, $number = 1)
    {
        $newCompetence = explode($competence);

        $newCompetence[0]  = inte($newCompetence[0]) + $number;
        if($newCompetence[0] > 12){
            $newCompetence[0] = $newCompetence[0] - 12;
            $newCompetence[1] = int($newCompetence[0]) + 1;
        }

        return $newCompetence[0] . '/' . $newCompetence[1];
    }

}












