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
 * Plugin strings are defined here.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   2020 Brickfield Education Labs, https://www.brickfield.ie - Author: Karen Holland
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Accessibility toolkit';
$string['accessibility'] = 'Accessibility';
$string['accessibilitydisabled'] = 'The Brickfield accessibility toolkit is not enabled on this site. Contact your site administrator to enable.';
$string['accessibilityreport'] = 'Accessibility Report';
$string['analysistype'] = 'Enable analysis requests';
$string['analysistypedisabled'] = 'Content analysis is disabled';
$string['analysistype_desc'] = 'Prevent content analysis from being requested';
$string['analysis:disabled'] = 'Disabled';
$string['analysis:byrequest'] = 'By request';
$string['brickfield'] = 'Brickfield toolkit';
$string['brickfield:viewcoursetools'] = 'View reports per courses';
$string['brickfield:viewsystemtools'] = 'View reports for all courses';
$string['accessibilitytool'] = 'Brickfield accessibility tool';
$string['accessibilitytools'] = 'Brickfield accessibility tools';
$string['allcourses'] = 'All reviewed courses ({$a})';
$string['allcoursescat'] = 'All reviewed courses for category {$a->catname} ({$a->count})';
$string['batch'] = 'Batch limit';
$string['bulkprocesscaches'] = 'Process bulk caching';
$string['bulkprocesscourses'] = 'Process bulk batch accessibility checking';
$string['cachepending'] = 'The summary data is being compiled';
$string['checkidvalidation'] = 'Task to check for any invalid checkids';
$string['checkscompleted'] = 'Checks completed: {$a}';
$string['checktype'] = 'Check group';
$string['checktype:form'] = 'Form';
$string['checktype:image'] = 'Image';
$string['checktype:layout'] = 'Layout';
$string['checktype:link'] = 'Link';
$string['checktype:media'] = 'Media';
$string['checktype:table'] = 'Table';
$string['checktype:text'] = 'Text';
$string['cmpercent'] = 'Percentage of activities overall';
$string['cmpercenterrors'] = 'Percentage of errors overall';
$string['cmpercenttitle'] = 'Overall % breakdown of activities versus errors';
$string['confirmationmessage'] = 'This course has been scheduled for analysis. Analysis will be completed at the earliest
by {$a}. Check back after then.';
$string['contactadmin'] = 'Please contact your administrator to complete the registration.';
$string['contextid'] = 'Contextid';
$string['core_course'] = 'Course';
$string['core_question'] = 'Question Banks';
$string['count'] = 'Count';
$string['coursecount'] = 'Num of Courses';
$string['deletehistoricaldata'] = 'Delete historical checks results';
$string['dependency'] = 'Dependent on';
$string['emptycategory'] = 'No courses found for category {$a}';
$string['emptytagcourses'] = 'No results found for courses with configured tags';
$string['enableaccessibilitytools'] = 'Enable accessibility tools';
$string['enableaccessibilitytools_desc'] = 'Provides tools to help ensure accessible content for your site';
$string['errorlink'] = 'Edit error instance for {$a}';
$string['errors'] = 'Errors: {$a}';
$string['eventanalysis_requested'] = 'Content analysis requested';
$string['eventanalysis_requesteddesc'] = 'Content analysis was requested for course {$a}.';
$string['eventreport_viewed'] = 'Accessibility report viewed';
$string['eventreport_vieweddesc'] = 'Accessibility report was viewed for course id {$a->course},
category id {$a->category}, tab {$a->tab}.';
$string['eventreport_downloaded'] = 'Accessibility summary downloaded';
$string['eventreport_downloadeddesc'] = 'Accessibility summary was downloaded for course id {$a}.';
$string['failed'] = 'Failed';
$string['tools'] = 'Go to reports';
$string['formcorrectlysubmitted'] = 'Check Process successfully added';
$string['formdescription'] = 'This will add a new check process record which will run as a scheduled task';
$string['formtitle'] = 'Add Check Process';
$string['fullcachedone'] = 'Disable to rerun caching';
$string['googleapikey'] = 'Google API Key';
$string['googleapikeydesc'] = 'Allows access to check Google YouTube video captioning data, see
 <a href="https://developers.google.com/youtube">Google Developers Guide</a>';
$string['grouppercentage'] = 'Percentage passed/not per check group';
$string['groupratio'] = 'Ratio of area instances passed/not per check group';
$string['hideshow'] = 'Hide/show';
$string['innercontextid'] = 'Inner contextid';
$string['invalidaccessibilitytool'] = 'Invalid accessibility subplugin requested.';
$string['invalidcategoryid'] = 'Invalid category, please check your input';
$string['invalidcourseid'] = 'Invalid course, please check your input';
$string['invalidlinkphrases'] = 'click|click here|here|more|more here|info|info here|information|information here|read more|read more here|further information|further information here|further details|further details here';
$string['module'] = 'Module';
$string['modulename'] = 'Name';
$string['linkdesc:advanced'] = 'There are many more tools available with a premium subscription. Information here.';
$string['linkdesc:activityresults'] = 'View your rates of accessibility compliance across Moodle activity types';
$string['linkdesc:checkdescriptions'] = 'Details of accessibility checks conducted';
$string['linkdesc:checkresults'] = 'View your rates of accessibility compliance across each accessibility check';
$string['linkdesc:checktyperesults'] = 'View your rates of accessibility compliance across each HTML content type';
$string['linkdesc:coursecategories'] = 'View your rates of accessibility compliance across each top level category';
$string['linkdesc:courses'] = 'View your rates of accessibility compliance across each course';
$string['linkdesc:coursetags'] = 'View your rates of accessibility compliance across each course tag';
$string['linkdesc:errors'] = 'Review your accessibility error findings, and find and fix them quickly';
$string['linkdesc:printable'] = 'Review and download your course\'s accessibility transcript.';
$string['managetools'] = 'Manage tools';
$string['lookuppending'] = 'Lookup pending';
$string['noerrorsfound'] = 'No common accessibility errors were found for your search parameters, congratulations!';
$string['norecords'] = 'No relevant records were found for your search parameters.';
$string['excludedcategories'] = 'Excluded category IDs';
$string['excludedcategoriesdesc'] = 'Comma separated string of excluded category IDs,
to limit all processing to exclude courses within these categories and sub-categories';
$string['notregistered'] = 'Your accessibility toolkit needs to be registered.';
$string['notvalidated'] = 'Your accessibility toolkit is still being validated.';
$string['numinstances'] = 'Number of instances';
$string['pagedesc:checktype'] = '<p>In order to summarise and analyse the results of the various checks conducted, we group these checks into different content types. Hence, all image-related accessibility check results are in the "Image" content type group, all layout-related accessibility check results are in the "Layout" content type group, and so on.</p><p>Activities are included as either activities, resources or content areas relating to the courses themselves.</p><p>The content type chart page displays the error breakdown per content type group: Image, Layout, Link, Media, Table, and Text.</p>';
$string['pagedesc:pertarget'] = '<p>In order to summarise and analyse the check results per activity, we group these check results into the different activities detected.</p><p>Activities are included as either activities, resources, or other content areas relating to the courses themselves. Each activity with no detected errors is counted as passed, each activity with one or more detected errors is counted as failed. The ratio of passed to failed activities is then displayed.</p><p>The activity breakdown chart page displays the ratio of passed to failed instances in total, per activity, such as assignment, course, label etc.</p>';
$string['pagedesctitle:checktype'] = 'Content types explained';
$string['pagedesctitle:pertarget'] = 'Activity breakdown explained';
$string['passed'] = 'Passed';
$string['passrate'] = 'Pass rate: {$a}%';
$string['perpage'] = 'Items to show per page';
$string['privacy:metadata'] = 'The Accessibility checks report plugin does not store any personal data.';
$string['processanalysisrequests'] = 'Process content analysis requests';
$string['processlinktitle'] = 'Process Link Title';
$string['registernow'] = 'Please register now.';
$string['registrationinfo'] = '<p>This registration process allows you to use the Brickfield accessibility toolkit freemium version
for your registered Moodle site.</p>
<p>This usage is subject to these {$a} and which you agree to, by using this
product.</p>';
$string['remaining'] = ' ({$a} errors remaining)';
$string['response:0'] = 'This URL doesn\'t point anywhere';
$string['response:404'] = 'This URL page was not found';
$string['returntomain'] = 'Return to Overview';
$string['schedule:blocknotscheduled'] = '<p>This course has not yet been scheduled for analysis, to find common accessibility issues.</p><p>Please view the <a href="{$a}">Accessibility toolkit help page</a> for further details.</p>';
$string['schedule:notscheduled'] = '<p>This course has not yet been scheduled for analysis, to find common accessibility issues.</p><p>By clicking on the "Submit for analysis" button, you confirm that you want all your relevant course HTML content, such as course section descriptions, activity descriptions, questions, pages, and more, to be scheduled for analysis.</p><p>This analysis will conduct multiple common accessibility checks on your course HTML content, and those results will then display on these Accessibility toolkit report pages.</p><p>Please view the <a href="{$a}">Accessibility toolkit help page</a> for further details.</p><p>This analysis will be processed in the background, by the Moodle scheduled tasks, so its speed of completion will depend on task timings and task run schedules.';
$string['schedule:requestanalysis'] = 'Submit for analysis';
$string['schedule:scheduled'] = 'This course has been scheduled for analysis.';
$string['schedule:sitenotscheduled'] = 'The global (course independent) content has not yet been scheduled for analysis, to find common accessibility issues.</p><p>By clicking on the "Submit for analysis" button, you confirm that you want all your relevant global (course independant) content to be scheduled for analysis.</p><p>This analysis will conduct multiple common accessibility checks on this content, and those results will then display on these Accessibility toolkit report pages.</p><p>Please view the <a href="{$a}">Accessibility toolkit help page</a> for further details.</p><p>This analysis will be processed in the background, by the Moodle scheduled tasks, so its speed of completion will depend on task timings and task run schedules.';
$string['schedule:sitescheduled'] = 'The global (course independent) content has been scheduled for analysis.';
$string['setting:checktypestr'] = 'Explanation display for checktype chart';
$string['setting:pertargetstr'] = 'Explanation display for per activity chart';
$string['tabamount'] = 'Display Amount';
$string['taberrors'] = 'Check Errors';
$string['taberrortotal'] = 'Display Error Totals';
$string['tabpassrate'] = 'Display Pass Rate';
$string['tabpercheck'] = 'Per Check Results';
$string['tabpercent'] = 'Display Percentage';
$string['tabpercourse'] = 'Courses breakdown';
$string['tabpertag'] = 'Course tags breakdown';
$string['tabpertarget'] = 'Per Activity Results';
$string['tabpertype'] = 'Checktype Results';
$string['tabresults'] = 'Overview';
$string['tabshowerrors'] = 'Show Checks With Errors';
$string['tabshowall'] = 'Show All Checks';
$string['tabtags'] = 'Tags';
$string['tagnotshowing'] = 'If your course tag is not showing here, check with your Moodle administrator to add it to the configured tags for this report';
$string['tagnotshowingadmin'] = 'Click here to add or remove configured tags';
$string['targetavetitle'] = 'Average errors per activity';
$string['targetpercentage'] = 'Percentage of instances passed/not per activity';
$string['targetratio'] = 'Activity Pass Ratio';
$string['tblcheck'] = 'Check';
$string['tblcheckexample'] = 'Example';
$string['tblcheckfailed'] = 'Checks failed';
$string['tblchecksummary'] = 'Summary';
$string['tblerrorcount'] = 'Errors';
$string['tbledit'] = 'Edit';
$string['tblhtmlcode'] = 'Existing HTML code';
$string['tblinstance'] = 'Instance';
$string['tblline'] = 'Line';
$string['tbloverallpercentage'] = 'Overall errors %';
$string['tblpercentage'] = 'Percentage';
$string['tblpreview'] = 'Preview';
$string['tbltarget'] = 'Activity';
$string['tblupdateto'] = 'Update to';
$string['termsandconditions'] = '<p>These are the terms and conditions you agree to... blah blah...</p>';
$string['termsandconditionslink'] = 'terms and conditions';
$string['titleerrors'] = 'Error details';
$string['titleerrorscount'] = '&nbsp;(Showing first {$a} errors)';
$string['titlepercategory'] = 'Course activities pass rate % per top category';
$string['titlepercategoryamount'] = 'Course activities failed per top category';
$string['titlepercheck'] = 'Total errors per check';
$string['titlepercourse'] = 'Course activities pass rate % per course';
$string['titlepercourseamount'] = 'Course activities failed per course';
$string['titlepertag'] = 'Course activities pass rate % per tag';
$string['titlepertagamount'] = 'Course activities failed per tag';
$string['titlepertag2'] = 'Shows data related to globally configured tags only';
$string['titlepertarget'] = 'Results per activity';
$string['titlepertype'] = 'Results per content type';
$string['titleresults'] = 'Overview Summary';
$string['toptargets'] = 'Failed activities';
$string['toperrors'] = 'Top errors';
$string['totalactivities'] = 'Total activities';
$string['totalareas'] = 'Total areas';
$string['totalerrors'] = 'Total errors';
$string['totalgrouperrors'] = 'Total (sum) errors per content type';
$string['totaltargetinstances'] = 'Total instances per activity';
$string['totaltargeterrors'] = 'Total (sum) errors per activity';
$string['updatesummarydata'] = 'Update site summarydata';
$string['messageprovider:warningcheckid'] = 'Warning of invalid checkids';
$string['warningcheckidbody'] = 'There is an issue with a Brickfield check
 which is active but not listed in the database. Please investigate.';
$string['warningcheckidsubject'] = 'Brickfield Toolkit CheckID warning';
$string['warningscontact'] = 'Email address for receiving warnings';
$string['warningscontact_desc'] = 'An email address to receive any Brickfield Toolkit warnings';

// Check descriptions.
$string['checkdesc:alinksdontopennewwindow'] = 'Links opening into a new window should warn users in advance';
$string['checkdesc:amustcontaintext'] = 'A link needs to contain text to be perceivable';
$string['checkdesc:areadontopennewwindow'] = 'Areas, used in image maps, opening into a new window should warn users in advance';
$string['checkdesc:areahasaltvalue'] = 'Areas, used in image maps, should not be missing "alt" (alternative) text, similar to images';
$string['checkdesc:asuspiciouslinktext'] = 'Link text should be descriptive and provide context about its destination';
$string['checkdesc:basefontisnotused'] = 'Basefont elements (traditionally used for formatting) are not accessible and should not be used';
$string['checkdesc:blinkisnotused'] = 'Blink elements, which blink on and off, are not accessible and should not be used';
$string['checkdesc:boldisnotused'] = '"Bold" (b) elements should not be used, "strong" should be used instead';
$string['checkdesc:contenttoolong'] = 'Overall page content length should not exceed 500 words.';
$string['checkdesc:csstexthascontrast'] = 'Color contrast between the text and background is too low';
$string['checkdesc:embedhasassociatednoembed'] = 'Embed elements (for embedding multimedia) should not be missing their corresponding "noembed" elements';
$string['checkdesc:headerh3'] = 'Headers following after H3 headers (the editor large header option) should not break the page heading hierarchy';
$string['checkdesc:headershavetext'] = 'A header needs to contain text to be perceivable';
$string['checkdesc:iisnotused'] = '"Italic" (i) elements should not be used, "em" should be used instead';
$string['checkdesc:imgaltisdifferent'] = 'Image Alt (Alternative) Text should not be the image filename';
$string['checkdesc:imgaltistoolong'] = 'Image Alt (Alternative) Text should not be more than the maximum allowed (125) characters';
$string['checkdesc:imgaltnotemptyinanchor'] = 'Image Alt (Alternative) Text should not be empty, especially when image is a link going elsewhere';
$string['checkdesc:imgaltnotplaceholder'] = 'Image Alt (Alternative) Text should not be a simple placeholder text, such as "image"';
$string['checkdesc:imghasalt'] = 'Image Alt (Alternative) Text should not missing for image elements, unless purely decorative with no meaning';
$string['checkdesc:imgwithmaphasusemap'] = 'Image maps, with clickable areas, need matching "usemap" and "map" elements';
$string['checkdesc:legendtextnotempty'] = '"Legend" elements, used for captioning fieldset elements, should contain text';
$string['checkdesc:marqueeisnotused'] = '"Marquee" (auto-scrolling) elements are not accessible and should not be used';
$string['checkdesc:noheadings'] = 'No headers makes content less structured and harder to read';
$string['checkdesc:objectmusthaveembed'] = '"Object" elements (for embedding external resources) should not be missing their corresponding "embed" elements';
$string['checkdesc:objectmusthavetitle'] = '"Object" elements (for embedding external resources) should not be missing their corresponding "title" descriptions';
$string['checkdesc:objectmusthavevalidtitle'] = '"Object" elements (for embedding external resources) should have corresponding "titles" with text';
$string['checkdesc:strikeisnotused'] = '"Strike" (strike-through) elements should not be used, "del" (deleted) should be used instead';
$string['checkdesc:tabledatashouldhaveth'] = 'Tables ideally should not be missing headers';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Table "summaries" and "captions" should not be identical';
$string['checkdesc:tabletdshouldnotmerge'] = 'Tables ideally should not have any merged cells';
$string['checkdesc:tablethshouldhavescope'] = 'Table row or column "scopes" (used to map row and column to each cell) should be declared';

// Registration process.
$string['activate'] = 'Activate';
$string['activated'] = 'The plugin is activated and ready to use.';
$string['activationform'] = 'Brickfield registration';
$string['activationheader'] = 'Brickfield Activation';
$string['activationinfo'] = 'In order to use this plugin, you must be registered, or have a valid code for this platform. If you are not already registered, please {$a}register your details</a>. <br />After registration, <b>you will then have online access to the keys</b> that you must submit in this form.';
$string['automatedsentdaily'] = '';
$string['country'] = 'Country';
$string['country_help'] = 'Country of the site';
$string['hashcorrect'] = 'The entered code is correct.';
$string['hashincorrect'] = 'The entered code is not correct.';
$string['inactive'] = 'The plugin is inactive and cannot be used. Please enter valid registration keys, and press activate.';
$string['installed'] = 'Plugin installed';
$string['installedcli'] = 'Plugin installed via command line';
$string['installeddescription'] = 'The plugin has been installed, redirect to activation form.';
$string['language'] = 'Language';
$string['language_help'] = 'Language of the site';
$string['mail'] = 'Email';
$string['mail_help'] = 'This email will be used to register the account';
$string['mobileservice'] = 'Mobile services enabled ({$a})';
$string['moreinfo'] = 'More information';
$string['notifications'] = 'Receive notifications';
$string['notifications_help'] = 'Set to "Yes" if you want to receive email notifications. If enabled, you can set another email to receive these notifications.';
$string['numcourses'] = 'Number of courses ({$a})';
$string['numfactivities'] = 'Number of activities ({$a})';
$string['numfiles'] = 'Number of files ({$a})';
$string['numusers'] = 'Number of users ({$a})';
$string['privacy'] = 'Privacy notice and data processing agreement';
$string['privacy_help'] = 'Access the link to read the entire policy';
$string['privacydesc'] = 'I agree to the <a href="{$a}" target="_blank">Privacy notice and data processing agreement</a> for someurl.com';
$string['registerplugin'] = 'Register with {$a}';
$string['registration'] = 'Registration Form';
$string['registrationheader'] = 'Register here';
$string['registrationheaderinfo'] = '<p>This registration process allows you to use the Brickfield accessibility toolkit freemium version for your registered Moodle site.</p> <p>This usage is subject to the terms and conditions as stated here and which you agree to, by using this product.</p>';
$string['release'] = 'Moodle release ({$a})';
$string['secretkey'] = 'API key';
$string['secretkey_help'] = 'This code is received by email after registration.';
$string['sendfollowinginfo'] = '<p>The following information will be sent to contribute to overall statistics only. It will not be made public on any central listing.</p> {$a}';
$string['sitehash'] = 'Secret key';
$string['sitehash_help'] = 'This code is received by email after registration.';
$string['sitename'] = 'Site name';
$string['sitename_help'] = 'The name of the site';
$string['siteurl'] = 'Site URL';
$string['siteurl_help'] = 'The URL of the site';
$string['usedifferentemail'] = 'Use different email';
$string['usersmobileregistered'] = 'Number of users with registered mobile devices ({$a})';
$string['validationerror'] = 'Registration key validation has failed. Check that your keys are correct.';

// Tool section.
$string['activityresults:pluginname'] = 'Activity breakdown accessibility tool report';
$string['activityresults:toolname'] = 'Activity breakdown summary';
$string['activityresults:toolshortname'] = 'Activity breakdown';
$string['advanced:pluginname'] = 'Advanced accessibility tool report';
$string['advanced:toolname'] = 'Advanced summary';
$string['advanced:toolshortname'] = 'Advanced';
$string['checktyperesults:pluginname'] = 'Content types accessibility tool report';
$string['checktyperesults:toolname'] = 'Content types summary';
$string['checktyperesults:toolshortname'] = 'Content types';
$string['errors:pluginname'] = 'Error list accessibility tool';
$string['errors:toolname'] = 'Error list summary';
$string['errors:toolshortname'] = 'Error list';
$string['printable:pluginname'] = 'Summary report accessibility tool report';
$string['printable:toolname'] = 'Summary report';
$string['printable:toolshortname'] = 'Summary report';
$string['printable:downloadpdf'] = 'Download PDF';
$string['printable:printreport'] = 'Printable report';
$string['error:nocoursespecified'] = '<p>This summary report requires a valid courseid.</p><p> Please access the accessibility toolkit from within a course, by using its Actions menu administration link to the Accessibility toolkit, which will then supply this required courseid.</p>';
$string['pdf:filename'] = 'Brickfield_Summaryreport_CourseID-{$a}';

// Advanced page.
$string['bannercontentone'] = 'The Enterprise Accessibility Toolkit has a full set of features to help your organisation improve accessibility of your courses. {$a} to book a free demo of the advanced features.';
$string['bannercontenttwo'] = 'Build an effective and inclusive teaching and learning platform by Finding content that does not meet the guidelines, Fixing the issues and Future-proofing your Moodle course content with accessible files, editor and enhanced features.';
$string['bannerheadingone'] = 'Upgrade to the Enterprise Accessibility Toolkit';
$string['contactus'] = 'Contact us';
$string['buttonone'] = 'Get a Free Demo';
$string['contentone'] = 'Automatically evaluate your course content and assessments for accessibility issues.';
$string['contenttwo'] = 'Bulk update unclear or missing text for web links, image descriptions and video subtitles.';
$string['contentthree'] = 'Provide your students with content in accessible formats including Audio, ePub and Electronic Braille.';
$string['contentfour'] = 'Identify which activities have the most accessibility issues to prioritise effort.';
$string['contentfive'] = 'Automatically fix out of date HTML tags.';
$string['contentsix'] = 'Provide teachers with just in time tips for creating better content.';
$string['footerheading'] = 'Footer section';
$string['headingone'] = 'Evaluate content';
$string['headingtwo'] = 'Remediation';
$string['headingthree'] = 'Accessible file formats';
$string['headingfour'] = 'Focus effort';
$string['headingfive'] = 'HTML fixes';
$string['headingsix'] = 'Performance support';