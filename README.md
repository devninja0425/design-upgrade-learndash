# Design Upgrade for LearnDash

Instantly improve LearnDash's design -- courses, lessons, topics, quizzes, profile page, course navigation widget & course grid -- to more closely match your WordPress theme, and remove those unwanted default LearnDash styles.

## Description

[LearnDash](https://www.learndash.com/) is a powerful learning management system (LMS) for managing your online courses, but let's be honest &ndash; the default styles are outdated. In order to provide your students with an exceptional learning experience, you need a professional design.

Design Upgrade for LearnDash completely redesigns every aspect of LearnDash so that it closely resembles your existing WordPress theme. No settings or custom code. Just activate & enjoy!

## Features

I literally went through every line of CSS that LearnDash uses and gave it all a fresh coat of paint. Here are the highlights:

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

Tested with LearnDash 2.6.3

## Who is this for?

**Brand new LearnDash users:** There is absolutely no reason not to try it out. At the very least, it will give your site a more consistent design. If you plan to customize LearnDash further, you can still do so using a child theme or Additional CSS in the Customizer.

**Seasoned LearnDash veterans:** If you have not made any customizations to your LearnDash design, but would like to improve it, give us a shot. You might want to try it out on a test site first, but you can deactivate it with one click and return to your previous design.

You might also want to give your students a heads up that you're updating the design. But we feel confident that they'll like it :-)

**LearnDash developers:** If you're a developer who builds LearnDash sites for your clients, this could save you hours (maybe even days) of development time. LearnDash's markup & CSS is a beast to customize. This will give you a much easier baseline to work with.

We designed the plugin to be just specific enough to override LearnDash's default styles, but not so specific that you'll need to use a ton of selectors to override our specifity. All CSS in child themes and Additional CSS will take precedence over our styles.

## Pro Version

**Need custom styles?** Our [pro version](https://escapecreative.com/products/design-upgrade-learndash/?utm_source=github.com&utm_medium=free%20plugin&utm_campaign=readme) uses the Customizer to bring you **over 80 customizable design options.** Completely customize your LearnDash site with just a few clicks.

## Theme Compatibility

Design Upgrade for LearnDash **should work on most themes**, assuming they have not customized the LearnDash markup in any way. While I can't guarantee full compatibility, I have tested with the following themes.

## Tested With

We have tested with the following themes, and they all appear **to be compatible:**

* **NEW!** Boss. by BuddyBoss (must deactivate Social Learner/"Boss for LearnDash" plugin)
* Astra
* Divi
* GeneratePress
* OceanWP
* Storefront
* Twenty Nineteen
* Twenty Seventeen
* Twenty Sixteen

## Incompatible Themes

* LearnMate by Wbcom Designs
* eLumine by WisdmLabs

## Incompatible Plugins

* **LearnDash Visual Customizer by SnapOrbital:** The Visual Customizer takes a similar approach to designing LearnDash components, and thus the code conflicts with ours.
* **Boss for LearnDash:** We **are** compatible with the Boss. theme, as well as "BuddyPress for LearnDash," but in order to use this plugin, you need to deactivate the "Boss for LearnDash" plugin.

### Uncanny Owl Toolkit Compatibility

We recognize the [Uncanny LearnDash Toolkit](https://wordpress.org/plugins/uncanny-learndash-toolkit/) by Uncanny Owl is a popular LearnDash plugin that adds some nice features. We're in the process of making our plugin fully compatible with theirs. Here's where we are so far:

* `[uo_dashboard]`: Compatible; styles upgraded
* `[uo_breadcrumbs]`: Compatible; no styles changed
* `[uo_courses]`: The UO Course Grid comes with a lot of styling options already. We're still evaluating whether or not we should make any design changes to it.
* `[uo_lessons_topics_grid]`: Compatible; no styles changed
* `[uo_login_ui]`: Compatible; no styles changed

**Bottom Line:** You are fine to use Design Upgrade for LearnDash with the Uncanny LearnDash Toolkit.

## Roadmap

As LearnDash adds new features, it is our goal to keep this plugin updated.

Features planned for future release:

* Evaluating: Switch from SVG icons to font icons
* Compatibility with LearnDash 3.0 when it is released

## We'd love to hear from you!

Does something look weird with your theme? Is there something we missed? Wouldn't it be cool if...

We tested it on a handful of popular themes, but we couldn't possibly cover them all. If you have any feedback, please let us know.

## Frequently Asked Questions

### Where are the settings?

The free version doesn't have any. It simply applies a fresh coat of paint behind the scenes.

Check out our [pro version](https://escapecreative.com/products/design-upgrade-learndash/?utm_source=github.com&utm_medium=free%20plugin&utm_campaign=readme&utm_content=faq) that includes 80+ settings you can customize.

### Will this affect the rest of my site?

No. We've carefully crafted it to only apply to LearnDash elements. The rest of your site (header, footer, pages, blog posts, etc.) will continue to use the styles determined by whichever WordPress theme you are using.

### Can I use this plugin with the LearnDash Visual Customizer?

Technically, yes, but you will encounter some weird design issues. We recommend you check out our similar [pro plugin](https://escapecreative.com/products/design-upgrade-learndash/?utm_source=github.com&utm_medium=free%20plugin&utm_campaign=readme&utm_content=faq) to customize LearnDash styles.

### Can I use this plugin with the Divi LearnDash Kit?

I have done some testing with the Divi LearnDash Kit, but I haven't tested every element. It should work in most cases, but you'll want to test all your pages. If you find something that isn't compatible, please let us know so we can fix it.

### Can I make design changes in addition to what the plugin makes?

Absolutely. Feel free to add your own CSS if you want to further customize the look & feel of your LearnDash site. Just place your CSS in a child theme or the Additional CSS area of the WordPress Customizer. Or check out our [pro plugin](https://escapecreative.com/products/design-upgrade-learndash/?utm_source=github.com&utm_medium=free%20plugin&utm_campaign=readme&utm_content=faq).

### Will this slow down my site?

Nope. We do add one small CSS file to the header (63KB), but as long as you're using a reliable WordPress host with decent performance, you shouldn't notice a difference.

For reference, the LearnDash plugin loads 5 CSS files that total 45KB (7 files totaling 67KB if you count the Course Grid).

### My course/lesson/topic/quiz still looks weird. Can you help?

Most likely, yes. We'll certainly try.

We designed this plugin to be flexible so that it takes on many of the characteristics of your WordPress theme. But every theme is built differently, so styles will differ from site to site. Shoot us a message with a link to your site and we'll try to help out.

## Credits

* Paint brush icon made by [Freepik](http://www.freepik.com), courtesy of [flaticon.com](https://www.flaticon.com/). Licensed under [CC3.0 BY](http://creativecommons.org/licenses/by/3.0/).
* Gradient by [colorful gradients](https://colorfulgradients.tumblr.com/post/155121898640/colorful-gradient-43352)
