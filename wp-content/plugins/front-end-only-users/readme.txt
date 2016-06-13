=== Front-End Only Users ===
Contributors: Rustaurius, EtoileWebDesign
Donate link: http://www.etoilewebdesign.com/plugin-donations/
Tags: WP Members, paid membership, wp membership, WordPress members, user management, wp user management, WordPress user management, shortcodes, user management shortcodes, front end user shortcodes, user import, user export, market segmentation, personalization, front-end users, custom field registration, custom redirects, custom registration, custom registration page, custom user profile, customize profile, edit profile, front-end edit profile, front-end login, front-end register, front-end registration, front-end user listing, front-end user registration, profile builder, user listing, user login, user profile, user profile page, User Registration, user registration form, user-fields, password, profile, email, custom fields, premium content, statistics, analytics, widget, widgets, PayPal, monetize
Requires at least: 3.9
Tested up to: 4.5
License: GPLv3
License URI:http://www.gnu.org/licenses/gpl-3.0.html 

A customizable user management plugin for membership sites. Use shortcodes for registration, login, payment, etc. and allow restricted access to the front end of your site.


== Description ==

<a href='http://www.etoilewebdesign.com/front-end-only-users-demo/'>Front-End Users Demo</a>

[youtube https://www.youtube.com/watch?v=zzJRHEg_yEk]

Front-End Only Users is a user management and membership plugin that allows admins to restrict access to portions of their websites. By using a registration shortcode to create a registration form, visitors can sign up as users on the front end of any page of your website. Signing up can either require a one-time paid membership, recurring monthly or annual membership payments, or it can be free. The users are separate from the standard WordPress users, so they have no access to the back end of your site. User management is simple and effective, with different user levels available.

Front-End Only Users is completely customizable using CSS and is easily personalized. The shortcodes can be used to insert registration forms, login forms, edit profile forms and many more forms on any page of your website. You can also make use of shortcodes to restrict content to users who are logged in and even to specific user levels. Create different fields for members to fill out and customize content based on their profiles. Use shortcodes to display user profiles or allow visitors to search current users (<a href='http://www.etoilewebdesign.com/front-end-only-users-demo/'>See our demo site</a>). Customize forms with CSS to suit your needs using the Admin panel. 

Includes paid membership and user level features to restrict different portions of your site to different user groups (those you have signed up, those who have paid, etc.). This level or user management makes it easy to monetize your content and segment your users! Type any shortcode name and help (ex:[login help) in any WordPress page to get a complete list of the shortcode's attributes.
 
Ideal for paid content, membership, dating sites and more!

= Key Features =

* Customizable membership fields
* Pure CSS-styled front-end login form, registration form and edit profile form
* Supports all input types for user fields, allowing you to create a custom user profile
* Include different user membership levels and restrict content accordingly
* Option to send sign-up emails and to require admin approval of users
* User input-based redirects
* Send user groups to different pages after login with our customizable login shortcode
* Personalize the experience of your site with the [user-data] shortcode
* UTF-8 support
* Front end features: user registration form, login form, edit user profile form, account management, user listings or searches, user profiles and more!
* Back end user management features: add new fields, add new users, create and assign user levels, email settings and options

= Premium Features =
The premium version includes lots of useful user management features such as:

* Facebook and Twitter integration: Ability for users to create and log in to accounts using Facebook or Twitter APIs
* PayPal integration: Ability to charge users a one-time, annual, or monthly membership fee through PayPal
* Ability to integrate WordPress users, so that WP users can create profiles, access restricted content, be given a specific frontend user level within this plugin, etc.
* User Levels: Ability to create different user levels and to specify a default user level for users to be set to when they register (created on the “Levels” tab). Different user level groups can have access to different user content, allowing for easy and effective user management.
* Access to the one-click installer, which lets you create all of the pages necessary for a user membership site with one click
* WooCommerce integration: Autofill WooCommerce fields for logged-in users
* Email confirmation: Require users to confirm their email address before they can log in.
* Ability to restrict pages: Gives you the option of restricting pages to groups of users in the sidebar of the page editor.
* Admin Approval of Users: Require users to be approved by an administrator in the WordPress back-end before they can log in.
* Statistics: This feature allows you to gather information about frontend users and how they are using your site, as well as to see what pages each user has visited.
* User import via spreadsheet and user export to spreadsheet

For a complete list of the plugin shortcodes please go to our FAQs page:
<https://wordpress.org/plugins/front-end-only-users/faq/>


= Additional Languages =

* Brazilian Portugese (thanks to Humberto W.)
* Dutch
* French (thanks to Olivier B.)
* German (Thanks to Mikkael G.)
* Russian
* Spanish (Mexican, thanks to Jorge N.)
* Swedish (Thanks to Martin H.)

Check out our Frequently Asked Questions here:
<https://wordpress.org/plugins/front-end-only-users/faq/>

Head over to the "Support" forum to report issues or make suggestions:
<https://wordpress.org/support/plugin/front-end-only-users>

For more FEUP videos check out FAQ page!


== Installation ==

1. Upload the `front-end-only-users` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place "[register]" on the page where you want your registration form to display
4. Place "[login]", "[logout]" and "[edit-profile]" shortcodes on pages as applicable
5. All four of the shortcodes accept an attribute, 'redirect_page', that lets you send users to a different page after submitting the form

Tutorial Part 1 - Installation and Setup
[youtube https://www.youtube.com/watch?v=amTX0VzOdco]

For more videos on this membership plugin, please see the FAQ tab

--------------------------------------------------------------

- The user registration form can be customized from the admin panel, under the "Front-End Users" tab.
- Content can be restricted to users who are logged in using the [restricted][/restricted] tag. 
- You can further restrict content to a subset of users by adding "field_name" and "field_value" attributes to the restricted shortcode.
- For example, "[restricted field_name='Country' field_value='Canada']This is Canadian content.[/restricted]" would only display the line "This is Canadian content." to those who have put their "Country" as "Canada" on their user profile.
- You can also personalize your site using the [user-data] tag.
- By default the tag will return the user's Username, but can also display any other field (ex. [user-data field_name='First Name'])


== Frequently Asked Questions ==
= What's the complete list of plugin shortcodes? =
* Register Form: [register]
* Login Form: [login]
* Logout Form:[logout]
* Toggle:[login-logout-toggle]
* Edit Profile Form: [edit-profile]
* Edit Account Information: [account-details]
* Restricted Content: [restricted][/restricted]
* Inserting User Information: [user-data]
* User Search Form: [user-search]
* User List: [user-list]
* User Profile: [user-profile]
* Forgot Password: [forgot-password]
* Confirm Forgot Password: [confirm-forgot-password]

Type the shortcode name and help (ex:[login help) in any WordPress page to get a complete list of the shortcode's attributes.

= How do I add fields for my users to fill out? =

On the admin page, go to the "Fields" tab. After creating fields, you can drag and drop them to change their order.

= How do I restrict content for logged-in or non-logged-in users? =
You can use the [restricted] shortcode to block sections from non-logged in users, as well as to block other sections from logged-in members.

To block content from non-logged in visitors, you'd simply wrap the content in [restricted][/restricted] tags:

[restricted]Content goes here[/restricted]

To block a portion of content from logged in users, it would looks like:

[restricted block_logged_in='Yes']Content goes here[/restricted]

For either tag, you can suppress the message that appears for blocked users if you want to hide content seamlessly by adding "no_message='Yes'" so:

[restricted no_message='Yes']Content goes here[/restricted]
= How do I redirect based on a user field? =

You need to add the following attributes to your [login] or [register] shortcodes: ‘redirect_field’: the field the redirect is based off of (ex. Gender) and ‘redirect_array_string’: a comma separated list of pages to redirect to (ex. Male => http: //ManPage.com, Female => http: //WomanPage.com)
= How do I display a user's first name on a page? =

You can use the [user-data field_name='First Name'] shortcode, assuming that you called your field "First Name" for a user's first name.
= How do I approve an user? =

Click on the user you want to approve to see their details and there should be a radio button at the top of the page to approve the user.

= How do I restrict content based on the privilege levels? =

To restrict content to a certain level(X) your shortcode would be: [restricted level='X']...content[/restricted]
For all levels above "X" level: [restricted minimum_level='X']...content[/restricted]
For all levels below "X" level: [restricted maximum_level='X']...content[/restricted]

= Once a user registers their information, is there a way to redirect them to a page that will have further instructions? =

You can add the attribute ‘redirect_page’ to the register tag to send newly registered users to a new page: [register redirect_page='http://www.example.com']

= When I go on the profile page, I see "You must be logged in to access this page." even though I'm already logged in. How can I fix this? =

Check the “Options” page, and make sure that 'Login Time' isn't blank. If it's blank, then you're only logged in for a second. Anything non-blank and higher than 0 should solve the problem.

= Is it possible to not the show message: "Sorry, this content is only for those whose FIELD is FIELD-value"? =

You can add the attribute [no_message='Yes'] to your shortcode, so it would look something like this: [restricted field_name='Name' field_value='Alex' no_message='Yes''/restricted]

= Is there a way to indicate to users that they are logged in? I know this can be added to a page using 'user-data', but is there a way to add it to the page header? =

You could add the [user-data] tag to your header file and wrap it in restricted tags so that only logged in users can see it.

= I can't seem to find an option that requires a user to confirm his email upon registration. How do I add this feature? =

To add the confirmation link to the email, you need to include the shortcode [confirmation-link] inside the body of your e-mail.

= How do I use the forgot password shortcode? =

You would want to create a separate page with the [forgot-password] shortcode, and then another page with the ‘confirm-forgot-password’ shortcode on it. For the [forgot-password] shortcode, you would then add an attribute ‘reset_email_url’ with a value set to whatever URL you're using for the [confirm-forgot-password] shortcode.

= How do I restrict and redirect a user to the login page when user is not logged in? =

Content can be restricted using the [restricted][/restricted] tag. Any content between the opening and closing tags will only be visible to those who are logged in. To redirect a user when the user in not logged in you would want to use the [login redirect_page='url'] shortcode where the url is the login page you want to redirect to.

= How do I customize the style of this plugin? I'd like to change the color of my button. Can you let me know how I can do that? =

You can customize the plugin by adding code to the "Custom CSS" box on the "Options" page. For example, if you want the button to be red you might try adding:

.ewd-feup-submit.pure-button.pure-button-primary {background: red;}

If you have the premium version, all colors, fonts, sizes, etc. can be customized through the "Styling" area of the "Options" tab.

= How do I translate the plugin into my language? =
A great place to start learning about how to translate a plugin is at the link below: <http://premium.wpmudev.org/blog/how-to-translate-a-wordpress-plugin>
Once translated, you'll need to put the translated mo- and po- files directly in the lang folder and make sure they are named properly for your localization.
If you do translate the plugin, other users would love to have access to the files in your language. You can send them to us at Contact@EtoileWebDesign.com, and we’ll be sure they’re included in a future release.

= What features are included in the premium version of the plugin =
* PayPal integration: Ability to charge users a one-time, annual, or monthly membership fee through PayPal
* Ability to integrate WordPress users, so that WP users can create profiles, access restricted content, be given an FEUP level, etc.
* Access to the one-click installer, which lets you create all of the pages neccessary for a membership site with one click
* Email confirmation: Require users to confirm their e-mail address before they can log in.
* Admin Approval of Users: Require users to be approved by an administrator in the WordPress back-end before they can log in.
* User Levels: Ability to create different user levels and to specify a default user level for users to be set to when they register (created on the “Levels” tab)
* Statistics: This feature allows you to gather information about users and how they are using your site.

For more questions and support you can post in the support forum:
<https://wordpress.org/support/plugin/front-end-only-users>

Take a look at the plugin documentation:
<http://www.etoilewebdesign.com/wp-content/uploads/2015/04/FrontEndOnlyUserPluginDocument.docx.pdf>


= Videos =

Video 1 - Installation and Setup
[youtube https://www.youtube.com/watch?v=amTX0VzOdco]

Video 2 - Basic Shortcodes and Attributes
[youtube https://www.youtube.com/watch?v=7itl4aP1uZY]

Video 3 - Advanced Shortcodes and Attributes
[youtube https://www.youtube.com/watch?v=h-sa2P-kix8]

Video 4 - Options
[youtube https://www.youtube.com/watch?v=YuWEeWbTVo0]

Video 5 - Widgets
[youtube https://www.youtube.com/watch?v=vyyxynp_Ow8]

Video 6 - Public Functions
[youtube https://www.youtube.com/watch?v=bKiJAjq7PhQ]

Video 7 - One-Click Installer
[youtube https://www.youtube.com/watch?v=dCNlsqYbqKw]

== Screenshots ==

1. Simple registration page with custom user fields
2. Restricted page with content preview
3. Sample user listing page showing all users who specified their "Gender" as "Male" displayed
4. User search page where visitors can search for users with a specific first name
5. Forgot password first page in two-step confirmation process
6. The "Styling" section of the "Options" admin screen.
7. The "Dashboard" admin screen showing recent user activity
8. The "Statistics" overview admin screen, showing most visited content and recent user activity
9. The "Payments" admin screen, showing recent payments, amount paid, next payment date and discount code used
10. The "Payment" secion of the "Options" admin screen, showing the customizable options
11. The "Basic" section of the "Options" admin screen

== Changelog ==
= 2.9.5 =
- Field filtering update

= 2.9.4 =
- Fixed an error with user sorting

= 2.9.3 =
- Fixed an error where full page restriction wasn't displayed for posts

= 2.9.2 =
- Updated another button missing text

= 2.9.1 =
- Fixed an error where the "Confirm Forgot Password" submit button was blank

= 2.9.0 =
- Changed the "Create WordPress Users" feature so that WP usernames are set to emails
- Added in the FEUP user data to the WP "Users" page if that option is selected
- Added in a new field type for labels
- Added in a "required" symbol for fields which are required

= 2.8.7 =
- Fixed an error where Facebook emails weren't being collected anymore after a Facebook API update

= 2.8.6 =
- Minor CSS update

= 2.8.5 =
- Fixed an error where "Login Options" couldn't be all deselected

= 2.8.4 =
- Fixed a problem with the redirect_array_string attribute after a change to how attributes are extracted. The values now need to be separated by an equals sign (=) instead of by a greater than or equals sign (=>)

= 2.8.3 =
- Added an attribute to the "forgot-password" shortcode to return a message if the username entered doesn't exist
- Fixed an error where the login-logout-toggle and login/logout widget weren't redirecting correctly on login

= 2.8.2 =
- Fixed another minor error with level payments

= 2.8.1 =
- Fixed an error where level payments weren't possible from the registration page

= 2.8.0 =
- Huge update, if you run in to trouble, please try downgrading first to see if it's an update issue
- Added the ability to register using Facebook or Twitter instead of creating a username and password
- Added the ability to also create a WordPress user on registration, so that the plugin can also be used to log in to WordPress accounts that are created using the plugin
- Added tracking for page loads as well as the current link tracking
- Updated the link tracking, so that it should work better for images and attachments
- Added 2 new translations
- Fixed a couple of small errors

= 2.7.8 =
- Fixed a broken link

= 2.7.7 =
- Fixed a label which was not saving correctly

= 2.7.6 =
- Fixed a field editing and adding error

= 2.7.5 =
- Added in a few new labelling options
- Forced the limit to be positive when not set

= 2.7.4 =
- Fixed the warning message that is appearing when adding or editing fields
- Updated the dutch translation of the plugin

= 2.7.3 =
- Fixed a labelling error that reported

= 2.7.2 =
- Fixed another premium/non-premium issue

= 2.7.1 =
- Fixed another premium/non-premium issue

= 2.7.0 =
- Fixed a number of premium/non-premium issues

= 2.6.19 =
- Minor CSS update

= 2.6.18 =
- Added in a tonne of premium labelling options

= 2.6.17 =
- Minor CSS update

= 2.6.16 =
- Added a new "user-data" widget, to be able to add user data into parts of a site that are hard to use shortcodes for
- Added Account_Expiry as a possible value for the field_name attribute
- Fixed a bug where picture fields didn't have an upload button on the registration form

= 2.6.15 =
- Results for the "user-list" shortcode should now come back sorted
- CSV files can now be used for user uploads

= 2.6.14 =
- Updated the forgot_password function, so that passwords are reset correctly for sites not using crypt

= 2.6.13 =
- Changed the video in the help pointers to the tutorial series
- Found another missing picture-type field in the "Users" tab

= 2.6.12 =
- Fixed the same page problem for "restricted" tags, when there was also a login or logout on the same page
- Fixed picture fields in the front and back ends
- Removed extra text from the [user-profile] shortcode

= 2.6.11 =
- Extended the "help" shortcode command to the "Visual" editor

= 2.6.10 =
- Added a title field to the login-logout widget
- Added the ability to mark emails as confirmed in the admin user area
- Made the membership fees paid and account expiration date editable for admins 

= 2.6.9 =
- Changed the way overflow is handled on the "Users" table, so that a scrollbar is automatically added when the table overflows
- Updated the way the PayPal "price" field is set
- Fixed the PayPal receipt number not showing

= 2.6.8 =
- Did a better job fixing the logic issue with the "block_logged_in" attribute :)

= 2.6.7 =
- Fixed a logic issue with the restricted shortcode for the block_logged_in attribute

= 2.6.6 =
- Emails should now be sent out when users are uploaded via spreadsheet
- Fixed a problem where emails weren't set out when users were entered via the admin interface in certain situations

= 2.6.5 =
- Minor CSS update

= 2.6.4 =
- Added a new textarea to set the admin sign up email message
- Added "Payments" to the submenu
- Added a line to clarify the use of one of the fields on the "Emails" tab
- Fixed an error where admin emails weren't going out when bulk admin approvals happened

= 2.6.3 =
- Minor CSS update

= 2.6.2 =
- Fixed an error with the password strength checker when tracking is enabled

= 2.6.1 =
- Made a number of UI improvements to make it easier to manage users and more difficult to mis-click

= 2.6.0=
- Finished the "Level" payments feature, making it possible to let users upgrade to paid memberships to access higher tiered content. We've done quite a bit of testing with it, but it's more complicated than memberhsip payments, so let us know if you come across anything that doesn't seem to make sense.

= 2.5.4 =
- Fixed a couple of small emailing errors for the "Admin Email on Registration" and "Email on Admin Approval" fields

= 2.5.3 =
- Added a color picker to color fields for the plugin's styling options

= 2.5.2 =
- Fixed an error where admin approval emails wouldn't go out in some cases when username was set to email

= 2.5.1 =
- Removed the use of closures for legacy versions of PHP, so the plugin should be compatible with unsupported (pre-version 5.3.0) PHP installs

= 2.5.0 =
- Added a tonne of new user statistics information to the user details and statistics areas
- Added a short set of introduction pointers for new users
- Fixed a small display error

= 2.4.8 =
- Tweaked how email confirmation links get added

= 2.4.7 =
- Removed pagination on the "Fields" tab, so that fields can be ordered no matter how many there are

= 2.4.6 =
- Warning! Complete overhaul of the e-mails system for order updates. IMPORTANT - If you're using the plugin in production, the plugin is switching from native SMTP e-mailing to using the pluggable wp_mail function, which means that options can now be set using a third party plugin (ex: https://wordpress.org/plugins/wp-mail-smtp/)
- Added a help function for the shortcodes. Type the shortcode name and help (ex:[login help) in any WordPress page to get a complete list of the shortcode's attributes.

= 2.4.5 =
- Minor CSS update

= 2.4.4 =
- Fixed a few bugs with the user-search and user-listing shortcodes
- Several minor changes

= 2.4.3 =
- Minor css update

= 2.4.2 =
- Payment setting update

= 2.4.1 =
- Fixed an update status message

= 2.4.0 
- Very large update, tonnes of new features so be carefule integrating the new version into live sites (note all previous versions are available at https://wordpress.org/plugins/front-end-only-users/developers/)
- Added support for WordPress users to be able to create profiles and log in
- Added PayPal integration, so that you can charge a membership fee
- Added a minimum password length option
- Added a profile picture custom field type
- Added a strength indicator for user passwords
- Fixed the "Country List" field type
- Fixed a few small errors

= 2.3.6 =
- Added a new public function, EWD_FEUP_Get_All_Users, which can be used by other plugins as well as in your own functions or template files
- Added in an optional parameter array for the FEUP_User class, so that you can get a user object for any user, instead of only for users who are currently logged in

= 2.3.5 =
- Added in an attribute so that the "restricted" tag can be used to hide content from logged in users
- Fixed the "forgot-password" shortcode error that was occuring when captcha was enabled

= 2.3.4 =
- Styling options update

= 2.3.3 = 
- Minor CSS update 

= 2.3.2 =
- Minor CSS update

= 2.3.1 =
- Minor CSS update

= 2.3.0 =
- Major change to the structuring of the plugin options
- Added a large number of styling options for the plugin
- Fixed some of the layout issues for a few different shortcodes (careful when upgrading if you've used Custom CSS to style)
- Made the one-click installer more prominent

= 2.2.16 =
- The tracking javascript is only added now when the tracking option is enabled
- Minor spreadsheet uploads update

= 2.2.15 =
- Reformatting of the "Options" tab to make it easier to find the desired option
- Small CSS fixes

= 2.2.14 =
- Fixed a problem where non-optioned values could be saved in fields

= 2.2.13 =
- Added the ability to include multiple fields in the display_field attribute for the user-list tag

= 2.2.12 =
- Actual fix for the spreadsheet uploads error

= 2.2.11 =
- Fixed an error that made user-list return blank when a field was entered for the display_field attribute

= 2.2.10 =
- Loosened the type checking for spreadsheet uploads

= 2.2.9 =
- Added a couple new attributes to the [user-list] shortcode
- Changed a few default options for new installs

= 2.2.8 =
- Added a new "Captcha" premium option for registration and forgot-password forms
- Fixed a couple of small errors

= 2.2.7 =
- Small CSS update

= 2.2.6 =
- Added a beta version of a new feature, the One-Click installer, which creates all of the pages needed for the plugin in one click
- Fixed small errors with the forgot-password and confirm-forgot-password shortcodes
- Added in the missing section of the account-details shortcode

= 2.2.5 =
- Small fix for users running older versions of PHP

= 2.2.4 = 
- Added WooCommerce integration to autofill fields for logged in users
- Fixed an error with one of the functions in the PHP user class

= 2.2.3 =
- CSS update that moves the plugin away from using Yahoo's Pure CSS (WARNING: if you're using your own custom CSS with this plugin, the selectors in the shortcodes are being changed)

= 2.2.2 =
- Added a bunch of new attributes for the user-search shortcode
- Fixed errors with user-search
- Fixed errors with user-list
- Fixed a registration error

= 2.2.1 =
- Fixed an error with the "user-profile" shortcode
- Fixed an error where a user's level got reset to the default level when they edited their profile

= 2.2.0 =
- Added an option to send an e-mail to the user once they've been approved
- Added a new shortcode "user-profile" which can be used to display user's profiles
- Updated the "user-list" shortcode to make it possible to display profiles
- Updated the "user-search" shortcode to make it possible to display profiles

= 2.1.4 =
- Fixed an error in the "Statistics" tab

= 2.1.3 =
- Added more summary content to the "Statistics" tab
- Now displaying a table of link clicking activity, if tracking option is activated

= 2.1.2 =
- Added in a new "login-logout-toggle" shortcode
- Added in a new "login-logout-toggle" widget
- Fixed an email on registration error
- Added in event tracking, more options coming soon!

= 2.1.1 =
- Added the ability to import users from a spreadsheet

= 2.1.0 = 
- Added the ability for premium users to restrict access to entire pages

= 2.0.3 =
- Fixed a small display error

= 2.0.2 =
- Fixed a potential error on the Emails page

= 2.0.1 =
- Fixed a potential upgrade error
- Fixed a notice on the Dashboard page

= 2.0.0 =
- Too many changes to list, be careful when upgrading on a live site as there will likely be some un-caught bugs
- Added a "Statistics" tab, to track user statistics
- Added a premium version, which earlier users have complete access to
- Improved e-mail options and settings

= 1.26 =
- Fixed a display error for the options added in version 1.25

= 1.25 =
- Added an option to use e-mails as a username
- Added a new encryption option type
- CAREFUL UPGRADING for those using the plugin in production
- Changed the password reset option

= 1.24 =
- Updated to the latest version of pure.css

= 1.23 =
- Fixes a critical error with the login checking

= 1.22 =
- Added in a forgot password form
- Fields that have "Show in Front End?" set to "No" will no longer display in the "Edit Profile" form

= 1.21 =
- Added the ability to require users to confirm their e-mail before logging in
- Added bulk approval of users
- Added bulk user level setting
- Fixed an error with apostrophes in user fields
- Eliminated a number of PHP notices

= 1.20 =
- Added the ability to export all users to Excel
- Added confirmation before deleting a user
- Added a button to delete all users from the database
- Fixed an error with a missing </div> tag in the account-details shortcode
- Fixed a link error on the dashboard page

= 1.19 =
- Allow a different SMTP username, instead of it needing to be the admin e-mail address

= 1.18 =
- Fixed a number of notice errors

= 1.17 =
- Fixed a registrations e-mail bug
- Fixed the error where being logged in meant you couldn't edit another user in the admin area

= 1.16 =
- Implemented user levels
- Fixed a registration bug
- Added tracking for user login times
- Fixed a bug so that users can be clicked from the dashboard
- Fixed a user page bug which limited the number of users that could be displayed

= 1.15 =
- Added a translation for Brazilian Portugese
- Fixed a compatibility error
- Fixed a spelling mistake

= 1.14 =
- Fixed a registration bug
- Fixed a bug which did stopped admins from being unable to "unapprove" a user

= 1.13 =
- Added "plain_text" as an attribute for the [user-data] tag
- Required fields should now actually be required on register and edit profile forms
- When a user is deleted, all of the associated user fields are now deleted as well

= 1.12 =
- Added the attribute "no_message" to the [logout] shortcode
- Fixed 2 registration errors
- Fixed an error that stopped the [account-details] shortcode from working
- Fixed an error to make translation possible
- Fixed an error where "omitted fields" in the edit profile form were being overwritten as blanks

= 1.11 =
- Fixed a small error with edit-profile
- Added language support
- Added Russian language files
 
= 1.10 = 
- [edit-profile] now accepts the attribute "omit_fields", a comma-separated list of fields to not appear in the edit profile form

= 1.9 = 
- [register] file was edited to remove PHP warning

= 1.8 = 
- Edited a number of files to remove PHP warnings

= 1.6 = 
- Tiny change

= 1.5 =
- Added "sneak peak" attributes to the [restricted] shortcode; you can now set attributes for either sneak_peak_characters or sneak_peak_words within the shortcode
- Added the ability to redirect based on a user field; to use it, see the plugin page

= 1.4 =
- Fixed a naming conflict error

= 1.3 =
- Shortcodes inside of [restricted][/restricted] tags should now work
- Added 3 new methods to the "EWD_FEUP" class to access User_ID, Username and any custom field
- Fixed a bug that prevented e-mail settings from being saved
- Fixed a bug that was causing a conflict with the options of a handful of other plugins

= 1.2 =
- Fixed a database error for new installs

= 1.1 = 
- Fixed an error with sign-up e-mails
- Fixed an error with "Admin Approval"


