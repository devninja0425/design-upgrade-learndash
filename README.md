# Design Upgrade for LearnDash

Instantly improve LearnDash's design -- focus mode, course content lists, profile page, course navigation & course grid -- to more closely match your WordPress theme, and improve LearnDash styles.

[**Download from wordpress.org**](https://wordpress.org/plugins/design-upgrade-learndash/)

## Description

[LearnDash](https://www.learndash.com/) is a powerful learning management system (LMS) for managing your online courses, but let's be honest &ndash; the default styles are outdated. In order to provide your students with an exceptional learning experience, you need a professional design.

Design Upgrade for LearnDash completely redesigns every aspect of LearnDash so that it closely resembles your existing WordPress theme. No settings or custom code. Just activate & enjoy!

## Compatible with the LD3 & "Legacy" Template

We'll automatically detect whether you're using the "LearnDash 3.0" or "Legacy" template, and assign styles appropriately. If you're still running LearnDash 2.x, all of the same design upgrades that you've always enjoyed will still be there.

See "Features" below for a list of what's new.

## Features

**LearnDash 3.x Features**

Tested with LearnDash 3.1.6

* **NEW:** Major design improvements for WisdmLabs' LearnDash Group Registration plugin
* **Focus Mode:** Improved styles for Focus Mode comments, which were added in LearnDash 3.1
* **Global:** Larger clickable areas for all course content, navigation & Focus Mode areas
* **Buttons:** All buttons have matching rounded corners & increased font size
* **Font Sizes:** These will now be inherited from your theme, which should increase your font sizes across the board
* **Focus Mode:** Improved sidebar tray design, Course Sections, shadow added to mobile menu, collapse arrow flips to show current menu state, and more.
* **Focus Mode:** Top navigation bar received several small improvements
* **Animations:** Subtle animations for LearnDash tooltips & the Focus Mode top menu
* **Profile:** Several styles were improved & standardized
* **Login/Registration:** Unified styles for all form fields
* **Course Grid:** Equal height columns & other small tweaks
* **WisdmLabs Ratings, Reviews & Feedback** design upgrades

**Also:** Small tweaks were made to assignments, pagination, the "User Status" widget and more.

**[Full changelog & list of features →](https://ldx.design/design-upgrade-pro-learndash-3/#free-changelog)**

**LearnDash 2.x "Legacy" Features**

Tested with LearnDash 2.6.6

* Much improved course grid styles, equal height cards & no more weird spacing issues 👍
* All fonts have been reset to use your theme's default font family, size & color
* All PNG icons have been replaced with comparable SVGs
* All complete/incomplete icons for lesson/topic/quiz lists have been moved to the right for better consistency
* Spacing around & between elements has been adjusted to provide greater consistency throughout
* All LearnDash widgets now have more consistent spacing & sizing, including improvements to Course Info & Course Navigation
* Styling for the `[ld_profile]` shortcode has been completely revamped
* Completely revamped & restyled quiz elements 💯
* Improved design of the statistics modal window (for quizzes), including row highlights on hover
* Larger pager navigation buttons to improve usability
* Full support for RTL languages

## Who is this for?

**Brand new LearnDash users:** There is absolutely no reason not to try it out. At the very least, it will give your site a more consistent design. If you plan to customize LearnDash further, you can still do so using a child theme or Additional CSS in the Customizer.

**Seasoned LearnDash veterans:** If you have not made any customizations to your LearnDash design, but would like to improve it, give us a shot. You might want to try it out on a test site first, but you can deactivate it with one click and return to your previous design.

You might also want to give your students a heads up that you're updating the design. But we feel confident that they'll like it :-)

**LearnDash developers:** If you're a developer who builds LearnDash sites for your clients, this could save you hours (maybe even days) of development time. LearnDash's markup & CSS is a beast to customize. This will give you a much easier baseline to work with.

We designed the plugin to be just specific enough to override LearnDash's default styles, but not so specific that you'll need to use a ton of selectors to override our specifity. All CSS in child themes and Additional CSS will take precedence over our styles.

## Pro Version

**Need custom styles?** Our [pro version](https://escapecreative.com/products/design-upgrade-learndash/?utm_source=github.com&utm_medium=free%20plugin&utm_campaign=readme) uses the Customizer to bring you **over 110 customizable design options.** Completely customize your LearnDash site with just a few clicks.

## Theme Compatibility

Design Upgrade for LearnDash **should work on most themes**, assuming they have not customized the LearnDash markup in any way. While I can't guarantee full compatibility, I have tested with the following themes.

### Tested With

We have tested with the following themes, and they all appear **to be compatible:**

* Astra
* Divi
* GeneratePress
* Neve
* OceanWP
* LearnMate
* Edufire
* Storefront
* Twenty Twenty
* Twenty Nineteen
* Twenty Seventeen
* Twenty Sixteen

### Incompatible Themes

* BuddyBoss Platform (released June 2019)
* Boss. / Social Learner (If you deactivate the "Boss for LearnDash" plugin, it will still work in "Legacy" mode)
* eLumine by WisdmLabs

### Incompatible Plugins

* **LearnDash Visual Customizer by SnapOrbital:** The Visual Customizer takes a similar approach to designing LearnDash components, and thus the code conflicts with ours.

## Uncanny Owl Toolkit Compatibility

We recognize the [Uncanny LearnDash Toolkit](https://wordpress.org/plugins/uncanny-learndash-toolkit/) by Uncanny Owl is a popular LearnDash plugin that adds some nice features. We're in the process of making our plugin fully compatible with theirs. Here's where we are so far:

* Reset Progress button: Button styles upgraded
* Simple Course Timer modal: Button styles upgraded
* `[uo_dashboard]`: Styles upgraded
* `[uo_courses]`: Styles upgraded
* `[uo_breadcrumbs]`: Compatible; Considering upgrades
* `[uo_lessons_topics_grid]`: Compatible; Considering upgrades
* `[uo_login_ui]`: Compatible; Considering upgrades

**NOTE:** Uncanny LearnDash Toolkit styles are only upgraded if you're using the "LearnDash 3.0" active template. Styles do not apply to the "Legacy" template.

## Plugin Compatibility

### Ratings, Reviews & Feedback plugin by WisdmLabs

As of version 2.5, we now enhance the styles of the Ratings, Reviews & Feedback plugin by WisdmLabs. For a detailed overview, please see our [article on ldx.design](https://ldx.design/design-upgrade-wisdmlabs-ratings-reviews).

### Group Registration plugin by WisdmLabs

As of version 2.6, we now enhance the styles of the Group Registration plugin by WisdmLabs. General design improvements will be made to all frontend elements output by the `[wdm_group_users]` shortcode.

## Browser Support

A few techniques we use to improve the LearnDash design are only supported in the latest versions of major browsers. For the most part, as long as you're **not** using Internet Explorer, most (if not all) of our plugin's design upgrades will work.

We support the latest versions of the following browsers:

* Google Chrome
* Mozilla Firefox
* Apple Safari
* Microsoft Edge
* Chrome for Android
* Firefox for Android
* iOS Safari (not tested, but should work)

We **do not** support any version of Internet Explorer, however, we do offer a few code snippets & suggestions to fix a few issues in IE11. See the IE11 section below in FAQ.

## Roadmap

As LearnDash adds new features, it is our goal to keep this plugin updated.

Features planned for future release:

* Compatibility with more Uncanny LearnDash Toolkit modules
* Exploring compatibility with other WisdmLabs plugins

## We'd love to hear from you!

Does something look weird with your theme? Is there something we missed? Wouldn't it be cool if...

We tested it on a handful of popular themes, but we couldn't possibly cover them all. If you have any feedback, please let us know.

## Frequently Asked Questions

### Where are the settings?

The free version doesn't have any. It simply applies a fresh coat of paint behind the scenes.

Check out our [pro version](https://escapecreative.com/products/design-upgrade-learndash/?utm_source=github.com&utm_medium=free%20plugin&utm_campaign=readme&utm_content=faq) that includes 100+ settings you can customize.

### Will this affect the rest of my site?

No. We've carefully crafted it to only apply to LearnDash elements. The rest of your site (header, footer, pages, blog posts, etc.) will continue to use the styles determined by whichever WordPress theme you are using.

### Can I use this plugin with the LearnDash Visual Customizer?

Technically, yes, but you will encounter some weird design issues. We recommend you check out our similar [pro plugin](https://escapecreative.com/products/design-upgrade-learndash/?utm_source=github.com&utm_medium=free%20plugin&utm_campaign=readme&utm_content=faq) to customize LearnDash styles.

### Can I use this plugin with the Divi LearnDash Kit?

I have done some testing with the Divi LearnDash Kit, but I haven't tested every element. It should work in most cases, but you'll want to test all your pages. If you find something that isn't compatible, please let us know so we can fix it.

### Can I make design changes in addition to what the plugin makes?

Absolutely. Feel free to add your own CSS if you want to further customize the look & feel of your LearnDash site. Just place your CSS in a child theme or the Additional CSS area of the WordPress Customizer. Or check out our [pro plugin](https://escapecreative.com/products/design-upgrade-learndash/?utm_source=github.com&utm_medium=free%20plugin&utm_campaign=readme&utm_content=faq).

### Will this slow down my site?

No. We do add one CSS file to the header, but as long as you're using a reliable WordPress host with decent performance, you shouldn't notice a difference.

### IE11 Support & Bug Fixes

The two main CSS features we use that cause issues in IE11 are CSS custom properties (variables) and flexbox. You can use the following CSS to fix some of these issues if you're using IE11.

To fix some layout issues with the course grid:

`.ld-course-list-items div.ld_course_grid .thumbnail.course {
	display: block !important;
}

.ld-course-list-items div.ld_course_grid .thumbnail.course .caption {
	display: block;
}`

To fix colors not appearing, you'll need to use the dev tools to look for all CSS properties that start with `var(--`. These represent CSS custom properties, and they don't work in IE11.

For example, replace `var(--ldx-color-link)` with `#000000`, or whatever hexadecimal color value you'd like to use for your link color.

### My course/lesson/topic/quiz still looks weird. Can you help?

Most likely, yes. We'll certainly try.

We designed this plugin to be flexible so that it takes on many of the characteristics of your WordPress theme. But every theme is built differently, so styles will differ from site to site. Shoot us a message with a link to your site and we'll try to help out.

## Credits

* Paint brush icon made by [Freepik](http://www.freepik.com), courtesy of [flaticon.com](https://www.flaticon.com/). Licensed under [CC3.0 BY](http://creativecommons.org/licenses/by/3.0/).
* Gradient by [colorful gradients](https://colorfulgradients.tumblr.com/post/155121898640/colorful-gradient-43352)
