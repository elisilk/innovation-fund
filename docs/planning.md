== URLs ==

Live Site: https://innovationfund.dreamhosters.com/
Admin: https://innovationfund.dreamhosters.com/wp-admin/

Local Dev Site: http://bhsinnovationfund.local/
Local Dev Admin: http://bhsinnovationfund.local/wp-admin/

GitHub: https://github.com/elisilk/innovation-fund

== Tech Stack ==

- WordPress
- custom theme
- Vite
- pnpm
- Secure Custom Fields (WP plugin)

== Required Plugins ==

Secure Custom Fields
https://wordpress.org/plugins/secure-custom-fields/

All-in-One WP Migration and Backup
https://wordpress.org/plugins/all-in-one-wp-migration/

== To Dos (in order) ==

1. Global CSS foundation - Typography, spacing, colors.
2. Header/footer
3. Container/layout system
4. Hero section
5. SCF Flexible Content
6. Dynamic section rendering
7. Setup staging environment and workflow - https://youtu.be/BrwdgJ0aGsA?si=mHoO8T7hVPbTvKma&t=1480

== Flexible Content Library ==

Title - Homepage (title_hero_home)
Title - Hero (title_hero_standard)
Title - Simple (title_simple)

Content - Rich Text (rich_text)
Content - Text/Image (text_image)
Content - Impact Stats (impact_stats)
Content - Quote (quote)
Content - Gallery (gallery)

Dynamic - Featured Programs (featured_programs)
Dynamic - Upcoming Events (upcoming_events)

Promotion - CTA Banner (cta)
Promotion - Donation Banner (donation_banner)

== Assets ==

fonts

icons
Ion icons - https://icon-sets.iconify.design/ion/

images

== Sitemap ==

Home
About
Mission
Leadership
Partners
Programs
└── Individual Program Pages
Events
└── Event Pages
News
Donate
Contact

== Theme Structure ==

bhs-innovation-fund-2026/
│
├── style.css
├── functions.php
├── screenshot.png
├── index.php
├── front-page.php
├── page.php
├── single.php
├── archive.php
├── header.php
├── footer.php
│
├── assets/
│ ├── dist/ # Built assets (generated)
│ │ ├── app.css
│ │ └── app.js
│ │
│ └── static/
│ ├── fonts/
│ └── images/
│
├── src/
│ ├── css/
│ │ ├── app.css
│ │ │
│ │ ├── base/
│ │ │ ├── variables.css
│ │ │ ├── fonts.css
│ │ │ ├── reset.css
│ │ │ └── typography.css
│ │ │
│ │ ├── layout/
│ │ │ ├── container.css
│ │ │ ├── sections.css
│ │ │ ├── hero.css
│ │ │ └── grid.css
│ │ │
│ │ ├── components/
│ │ │ ├── skip-to-main.css
│ │ │ ├── links.css
│ │ │ ├── buttons.css
│ │ │ ├── cards.css
│ │ │ └── navigation.css
│ │ │
│ │ └── utilities/
│ │ │ ├── color.css
│ │ | ├── spacing.css
│ │ └── visually-hidden.css
│ │
│ └── js/
│ └── app.js
│
├── inc/
│ ├── setup.php
│ ├── enqueue.php
│ ├── post-types.php
│ ├── acf.php
│ ├── menus.php
│ ├── taxonomies.php
│ ├── queries.php
│ ├── helpers.php
│ └── editor.php
│
├── template-parts/
│ ├── sections/
│ │ ├── hero.php
│ │ ├── rich-text.php
│ │ ├── text-image.php
│ │ ├── featured-programs.php
│ │ ├── upcoming-events.php
│ │ ├── quote.php
│ │ ├── cta.php
│ │ └── gallery.php
│ │
│ ├── components/
│ │
│ ├── cards/
│ │ ├── program-card.php
│ │ ├── event-card.php
│ │ └── post-card.php
│ │
│ └── layout/
│ ├── site-header.php
│ ├── site-footer.php
│ └── page-hero.php
│
├── templates/
│ ├── program/
│ │ ├── single-program.php
│ │ └── archive-program.php
│ │
│ └── event/
│ ├── single-event.php
│ └── archive-event.php
│
├── acf-json/
│
├── languages/
│
├── .gitignore
├── readme.txt
├── package.json
├── vite.config.js
├── tailwind.config.js (optional)
└── composer.json (optional)

== Known Issues to Address ==

- [ ] when mobile nav menu us open, prevent clicks in the main container (e.g., [Responsive navbar tutorial using HTML CSS & JS](https://youtu.be/HbBMp6yUXO0?si=zS793syyaX-tFtIt))
- [ ] the heading font size seems too big at mobile/smaller viewport sizes

== Potential AI Prompts to Consider ==

- Now that we've continue to flesh out this site, can you refresh our summary document (architecture.md) with the latest decisions we've made, especially with respect to the structure of the custom post types and their fields and relationships?

- For the WYSIWYG editor, I'm worried that that is too open-ended. The editor can pretty much put in any kind of HTML and media they want and then format it how they want. Is there a way to limit what's possible?

- How does search work in Wordpress? I'm hoping that the search is able to look inside the program titles as well as the rich text content and other fields within that custom post. Is that how it works? Is the search returned in some kind of order by match? Can the search results be broken up in terms of types (e.g., a program, vs a news post, vs an event, etc.)?

- Thinking about the external websites (press coverage) with connections to a program, how do you suggest setting that field up? As a "link"? I don't want to overstructure it, but sometimes I think it's helpful to enforce the different parts of the link including the article's title, its publication, and its publication date. Is that too much?

- When talking about the new relationships, you mentioned for the templates/components to "build small reusable query patterns early". Can you elaborate on how to do that concretely? I'm finding that there are some php loops that I am repeating and am wondering if I need to build like a utilities folder with functions that I can call in any template? Is that something I should prioritize? How does that work in Wordpress?

- As I am building out the actual content (that I imagine the editor would do in the future), I do think it's useful to see how the editing works and make sure the fields and inputs all are clear and intuitive. At the same time, as I continue to build out more custom fields and relationships, I worry about making a change that could reset some things or cause some issue. And so part of me wants to look into some kind of seeding of the database with content so I'd have a baseline that I could just import simply (and potentially edit easily too). Is that possible with Wordpress and with SCF? Could it be in a JSON format that I could edit in text editor? Or a set of SQL/database commands?

- Can you help me think about backups, staging, and deployment? And what parts should be put in git? Assuming most of the content will be created over time by the editor online, I'd like to be able to access that content and import it into my local development copy from time to time. I'd also like to be able to push changes to a staging server so I can assess (and share) the changes on a live website before pushing to the production site. It seems like there are a few Wordpress plugins that make that this process somewhat easy.

- Build out the menus.
  - Primary nav - just a small number of key pages listed in the top site header
  - Social media nav - links to each of the organization's social media pages, that can be in the footer and also in the top banner within the site header
  - A more extensive site map kind of menu with many (all?) pages, including a privacy policy or other pages that are not critical to promote highly, that would exist in the footer
  -

- Performance and optimization?

- Error pages? Where do I see logs of what pages people are trying to access and where those pages were linked from, so that I can make updates and fixes? Should I have some built-in redirects?

- For events, we often have annual events, and so I like having a structure where I don't just write over the page from the prior year. But rather, I can copy the prior year's event to the current year and then update that current year's content. And then the prior year would still be accessible in some kind of archive. So for example,
  - https://bhsinnovationfund.org/events/5k - the current year's (2026) event
  - https://bhsinnovationfund.org/5k-2025 - the prior year's event (or something similar)

- Speaking of redirects, if I want an individual program URL and event URL to have a simpler URL, can I do that? For example:
  - https://bhsinnovationfund.org/events/5k - should also be reachable by https://bhsinnovationfund.org/5k (without the "events")
  - https://bhsinnovationfund.org/programs/heritage-spanish-speaker-pathway - should also be reachable by https://bhsinnovationfund.org/heritage-spanish-speaker-pathway (without the "programs")
  - and I could imagine short forms of some other programs that I might want to make easily accessible

- Hosting?
  - What do you think of Wordpress as a static site?

- Other plugins to consider?
  - 10 FREE Plugins Every WordPress User Needs Right Now in 2026 - WPTuts - https://www.youtube.com/watch?v=Enz5e8oYpAs
  - Backup, Migration & Staging
    - WPvivid Backup - https://wordpress.org/plugins/wpvivid-backuprestore/
  - Database
    - WP-Sweep - https://wordpress.org/plugins/wp-sweep/
    - Database Cleaner - https://wordpress.org/plugins/database-cleaner/

SEOPress: https://jo.my/seopress
Independent Analytics: https://independentwp.com/
Fluent SMTP: https://fluentsmtp.com/
Fluent Auth: https://fluentauth.com/

== Key Resources ==

How to set up the live and staging URLs, plus connect a GitHub repo of the theme to those URLs.

WordPress Staging & Deployment Guide (GitHub Actions Workflow)
https://www.youtube.com/watch?v=BrwdgJ0aGsA&list=PLpcSpRrAaOaqBzG9rTA66V494iTRySkXq&index=19

== Case Study ==

bhs-innovation-fund-2026/
├── docs/
│ ├── case-study/
| │ ├── 01-existing-site.md
| │ ├── 02-content-model.md
| │ ├── 03-accessibility.md
| │ ├── 04-responsive-design.md
| │ ├── 05-deployment.md
| │ ├── 06-testing.md
| │ └── 07-before-after.md

Recording metrics

- Lighthouse/accessibility scores
- number of accessibility issues
- mobile layout problems
- page weight
- number of HTTP requests
- heading structure
- color contrast
- keyboard navigation
- time/content workflow for the administrator
- before/after screenshots
