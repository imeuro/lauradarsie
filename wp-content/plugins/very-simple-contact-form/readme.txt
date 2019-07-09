=== Very Simple Contact Form ===
Contributors: Guido07111975
Version: 9.9
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 4.7
Tested up to: 5.1
Stable tag: trunk
Tags: simple, contact, form, contact form, email


This is a lightweight plugin to create a customized contact form. Add shortcode [contact] on a page or use the widget to display your form.


== Description ==
= About =
This is a lightweight plugin to create a customized contact form.

Add shortcode [contact] on a page or use the widget to display your form.

Form only contains fields for Name, Email, Subject and Message. And a simple numeric captcha.

You can personalize your form via the settingspage or by adding attributes to the shortcode or the widget.

It's also possible to list form submissions in your dashboard.

= How to use =
After installation add shortcode [contact] on a page or use the widget to display your form.

= Settingspage =
Via Settings > VSCF you can:

* Change admin email address
* Keep form submissions and settings when uninstalling plugin
* Activate the listing of form submissions in your dashboard
* Activate confirmation email to sender
* Activate a privacy checkbox on form
* Disable the collection of IP address
* Scroll back to form position after submit
* Change form labels and messages

Settings and labels can be overwritten when using the relevant (shortcode) attributes below.

This can be useful when having multiple contact forms on your website.

= Shortcode attributes =
* Change admin email address: `[contact email_to="your-email-here"]`
* Send to multiple email addresses: `[contact email_to="first-email-here, second-email-here"]`
* Change "From" email header: `[contact from_header="your-email-here"]`
* Hide subject field: `[contact hide_subject="true"]`
* Change email subject: `[contact subject="your subject here"]`
* Activate confirmation email to sender: `[contact auto_reply="true"]`
* Change max character length of text field: [contact maxlength_textfield="100"]
* Change max character length of text area: [contact maxlength_textarea="1000"]
* Change default CSS class of form: `[vscf class="your-class-here"]`

Field labels:

* Change name label: `[contact label_name="your label here"]`
* Change email label: `[contact label_email="your label here"]`
* Change subject label: `[contact label_subject="your label here"]`
* Change captcha label: `[contact label_captcha="your label here"]`
* Change message label: `[contact label_message="your label here"]`
* Change privacy label: `[contact label_privacy="your label here"]`
* Change submit label: `[contact label_submit="your label here"]`

Field error labels:

* Change name error label: `[contact error_name="your label here"]`
* Change email error label: `[contact error_email="your label here"]`
* Change subject error label: `[contact error_subject="your label here"]`
* Change captcha error label: `[contact error_captcha="your label here"]`
* Change message error label: `[contact error_message="your label here"]`

Form messages:

* Change sending failed message: `[contact message_error="your message here"]`
* Change sending succeeded ("thank you") message: `[contact message_success="your message here"]`
* Change "thank you" message in confirmation email: `[contact auto_reply_message="your message here"]`

You can also add multiple attributes. Separate multiple attributes by using a single whitespace.

* Example: `[contact email_to="your-email-here" subject="your subject here"]`

= Widget attributes =
The widget supports the same attributes. You don't have to add the shortcode itself or the brackets.

Example 1:

* If shortcode attribute is: `[contact email_to="your-email-here"]`
* Widget attribute will be: `email_to="your-email-here"`

Example 2:

* If shortcode attribute is: `[contact email_to="your-email-here" subject="your subject here"]`
* Widget attribute will be: `email_to="your-email-here" subject="your subject here"`

= List form submissions in dashboard =
Via Settings > VSCF you can activate the listing of form submissions in your dashboard.

After activation you will notice a new menu item called "Submissions".

= SMTP =
SMTP (Simple Mail Transfer Protocol) is an internet standard for sending emails.

WordPress supports the PHP `mail()` function by default, but when using SMTP there's less chance your form submissions are being marked as spam.

You should install an additional plugin for this. You could install for example:

* [Gmail SMTP](https://wordpress.org/plugins/gmail-smtp/)
* [Easy WP SMTP](https://wordpress.org/plugins/easy-wp-smtp/)
* [WP mail SMTP](https://wordpress.org/plugins/wp-mail-smtp/)
* [Post SMTP](https://wordpress.org/plugins/post-smtp/)

Because I'm not the developer of these SMTP plugins, I will not give support. And use them at your own risk.

= Uninstall =
If you uninstall plugin via dashboard all form submissions and settings will be removed from database.

All posts of the (custom) post type "submission" will be removed.

You can avoid this via Settings > VSCF.

= Question? =
Please take a look at the FAQ section.

= Translation =
Not included but plugin supports WordPress language packs.

More [translations](https://translate.wordpress.org/projects/wp-plugins/very-simple-contact-form) are very welcome!

= Credits =
Without the WordPress codex and help from the WordPress community I was not able to develop this plugin, so: thank you!

Enjoy!


== Installation ==
Please check Description section for installation info.


== Frequently Asked Questions ==
= About the FAQ =
The FAQ applies to the most recent plugin version, as they are regularly updated to include support for newly added or changed plugin features.

= How do I set plugin language? =
Plugin will use the site language, set in Settings > General.

If plugin isn't translated into this language, language fallback will be English.

= What is the default email address? =
By default form submissions will be send to the email address set in Settings > General.

You can change this via Settings > VSCF or by using an attribute.

= What is the default email subject? =
By default the email subject contains the name of your site, followed by the subject that sender has filled in. If subject field is hidden it only contains the name of your site.

You can change this by using an attribute.

This subject will also be used in the confirmation email to sender.

= Why is the "from" email address not from sender? =
I have used a default so called "From" email header to avoid form submissions being marked as spam.

Best practice is using a "From" email header (an email address) that ends with your site domain.

That's why the default "From" email header starts with "wordpress" and ends with your site domain.

You can change this by using an attribute.

Your reply to sender will use another email header, called "Reply-To", which is the email address that sender has filled in.

= What do you mean with "thank you" message? =
A "thank you" message is displayed after submitting the form and in the confirmation email to sender.

It's the message: Thank you! You will receive a response as soon as possible.

You can change this via Settings > VSCF or by using an attribute.

= How does the captcha work? =
The captcha is a random number that changes on submit.

This means if you press submit and form has not been filled in completely or not correctly, the random number is changed and should be filled in again.

= Can I display multiple forms on the same page? =
Do not add multiple shortcodes on the same page. This might cause a conflict.

But you can display a form by using the shortcode and a form by using the widget, on the same page.

= Why does form submission fail? =
An error message is displayed if plugin was unable to send form. This might be caused by the settings of your server.

Your hosting provider might have disabled the PHP `mail()` function of your server. Please contact them for info.

They might advice you to install a SMTP plugin. For more info check the "SMTP" section.

= Why am I not receiving form submissions? =
* Please also check the junk/spam folder of your mailbox
* Check installation info above and check shortcode (attributes) for mistakes
* Install another contact form plugin to determine whether it's caused by my plugin or something else
* In case you're using a SMTP plugin, please check their settingspage for mistakes

= Does this plugin has anti-spam features? =
Of course, the native WordPress sanitization and escaping functions are included.

It also contains 2 (invisible) honeypot fields and a simple numeric captcha.

= Does VSCF meet the conditions of the GDPR? =
The General Data Protection Regulation (GDPR) is a regulation in EU law on data protection and privacy for all individuals within the European Union.

I did my best to meet the conditions of the GDPR:

* You can activate a privacy checkbox on form
* You can disable the collection of IP address
* Form submissions are safely stored in database, similar to how the native posts and pages are stored
* You can easily delete form submissions from database

= Why no Semantic versioning? =
At time of initial plugin release I wasn't aware of the Semantic versioning (sequence of three digits).

= How can I make a donation? =
You like my plugin and you're willing to make a donation? Nice! There's a PayPal donate link at my website.

= Other question or comment? =
Please open a topic in plugin forum.


== Changelog ==
= Version 9.9 =
* added attributes to change the max character length of form inputs
* use "maxlength_textfield" to change the default 500 characters of text field
* use "maxlength_textarea" to change the default 5000 characters of text area

= Version 9.8 =
* added new CSS class to form: vscf-container
* added attribute to change this CSS class per form
* this can be useful if you want to apply different styling when having multiple forms
* if you have used class "vscf" in your custom CSS, you should change this into class "vscf-container"
* have changed this class because ID was the same (to avoid confusion)
* increased max character length for inputs
* fix: removed maxlength attribute from hidden input (thanks malae)

= Version 9.7 =
* have updated the captcha again
* the random number now changes on submit
* more secure than the previous day based random number
* increased max length for inputs from 50 to 75 characters
* removed unnecessary escaping

= Version 9.6 =
* fix: undefined error form anchor (thanks Sebastiaan)

= Version 9.5 =
* fix: mistake in query string parameters (thanks Marie)
* removed both CSS classes mentioned in last update

For all versions please check file changelog.


== Screenshots ==
1. Very Simple Contact Form (Twenty Nineteen theme).
2. Very Simple Contact Form (Twenty Nineteen theme).
3. Very Simple Contact Form widget (Twenty Nineteen theme).
4. Very Simple Contact Form widget (dashboard).
5. Very Simple Contact Form settingspage (dashboard).
6. Very Simple Contact Form settingspage (dashboard).
7. Very Simple Contact Form settingspage (dashboard).
8. Very Simple Contact Form submissions (dashboard).